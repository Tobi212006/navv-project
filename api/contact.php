<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';

$database = new Database();
$db = $database->getConnection();

// Get JSON input
$data = json_decode(file_get_contents("php://input"));

// Validate input
if (
    isset($data->name) && isset($data->email) && isset($data->message) &&
    !empty(trim($data->name)) && !empty(trim($data->email)) && !empty(trim($data->message))
) {
    $name = htmlspecialchars(strip_tags(trim($data->name)));
    $email = htmlspecialchars(strip_tags(trim($data->email)));
    $phone = htmlspecialchars(strip_tags(trim($data->phone ?? '')));
    $message = htmlspecialchars(strip_tags(trim($data->message)));

    // ✅ Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["message" => "Invalid email format."]);
        exit;
    }

    try {
        $query = "INSERT INTO contact_messages (name, email, phone, message) 
                  VALUES (:name, :email, :phone, :message)";
        $stmt = $db->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":message", $message);

        if ($stmt->execute()) {
            http_response_code(200);
            echo json_encode(["message" => "Message sent successfully! We'll contact you soon."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Failed to save message. Please try again."]);
        }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(["message" => "Database error: " . $e->getMessage()]);
    }
} else {
    http_response_code(400);
    echo json_encode(["message" => "Please fill in all required fields (Name, Email, Message)."]);
}
?>
