<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';

$database = new Database();
$db = $database->getConnection();

$data = json_decode(file_get_contents("php://input"));

if(isset($data->action)) {
    switch($data->action) {
        case 'create_order':
            createOrder($db, $data);
            break;
        case 'verify_payment':
            verifyPayment($db, $data);
            break;
        default:
            http_response_code(400);
            echo json_encode(array("message" => "Invalid action."));
    }
}

function createOrder($db, $data) {
    // Set payment amounts based on plan
    $amounts = [
        'basic' => 1999,
        'premium' => 3499,
        'elite' => 4999
    ];
    
    $amount = $amounts[$data->membership_plan] ?? 1999;
    $order_id = "order_" . uniqid();
    $payment_id = "pay_" . uniqid();
    
    $query = "INSERT INTO payments 
              SET member_id=:member_id, payment_id=:payment_id, amount=:amount,
                  currency=:currency, payment_method=:payment_method,
                  razorpay_order_id=:razorpay_order_id, payment_status='pending'";

    $stmt = $db->prepare($query);
    $stmt->bindParam(":member_id", $data->member_id);
    $stmt->bindParam(":payment_id", $payment_id);
    $stmt->bindParam(":amount", $amount);
    $stmt->bindParam(":currency", $data->currency);
    $stmt->bindParam(":payment_method", $data->payment_method);
    $stmt->bindParam(":razorpay_order_id", $order_id);

    if($stmt->execute()) {
        $response = [
            "success" => true,
            "order_id" => $order_id,
            "amount" => $amount,
            "currency" => "INR",
            "member_id" => $data->member_id
        ];
        
        echo json_encode($response);
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Unable to create payment order."));
    }
}

function verifyPayment($db, $data) {
    $query = "UPDATE payments 
              SET payment_status='completed',
                  razorpay_payment_id=:razorpay_payment_id,
                  razorpay_signature=:razorpay_signature
              WHERE razorpay_order_id=:razorpay_order_id";

    $stmt = $db->prepare($query);
    $stmt->bindParam(":razorpay_payment_id", $data->razorpay_payment_id);
    $stmt->bindParam(":razorpay_signature", $data->razorpay_signature);
    $stmt->bindParam(":razorpay_order_id", $data->razorpay_order_id);

    if($stmt->execute()) {
        // Update member status to active
        $update_member = "UPDATE members SET status='active' WHERE email=:email";
        $stmt_member = $db->prepare($update_member);
        $stmt_member->bindParam(":email", $data->email);
        $stmt_member->execute();
        
        echo json_encode(array(
            "success" => true,
            "message" => "Payment verified successfully! Welcome to Naav Maharashtra Vyamshala."
        ));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Payment verification failed."));
    }
}
?>