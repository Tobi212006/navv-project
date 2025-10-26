 <?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';

$database = new Database();
$db = $database->getConnection();

// Get POST data
$input = file_get_contents("php://input");
$data = json_decode($input);

// Debug logging
error_log("Received registration data: " . print_r($data, true));

if(!empty($data->full_name) && !empty($data->email) && !empty($data->phone) && !empty($data->membership_plan)) {
    
    try {
        $query = "INSERT INTO members SET full_name=:full_name, email=:email, phone=:phone, age=:age, gender=:gender, address=:address, fitness_goals=:goals, membership_plan=:membership_plan, reference_source=:reference";
        $stmt = $db->prepare($query);

        $stmt->bindParam(":full_name", $data->full_name);
        $stmt->bindParam(":email", $data->email);
        $stmt->bindParam(":phone", $data->phone);
        $stmt->bindParam(":age", $data->age);
        $stmt->bindParam(":gender", $data->gender);
        $stmt->bindParam(":address", $data->address);
        $stmt->bindParam(":goals", $data->goals);
        $stmt->bindParam(":membership_plan", $data->membership_plan);
        $stmt->bindParam(":reference", $data->reference);

        if($stmt->execute()) {
            $member_id = $db->lastInsertId();
            http_response_code(201);
            echo json_encode(array(
                "success" => true,
                "message" => "Registration successful!",
                "member_id" => $member_id,
                "email" => $data->email
            ));
        } else {
            http_response_code(500);
            echo json_encode(array(
                "success" => false,
                "message" => "Registration failed to save to database."
            ));
        }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(array(
            "success" => false,
            "message" => "Database error: " . $e->getMessage()
        ));
    }
} else {
    http_response_code(400);
    echo json_encode(array(
        "success" => false,
        "message" => "Missing required fields. Please fill Name, Email, Phone, and select a Membership Plan.",
        "required_fields" => ["full_name", "email", "phone", "membership_plan"],
        "received_data" => $data
    ));
}
?>