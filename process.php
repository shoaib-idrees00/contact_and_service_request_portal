<?php

require_once "config/database.php";


if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: request.php");
    exit;
}

$full_name = trim($_POST["full_name"] ?? "");
$email = trim($_POST["email"] ?? "");
$phone = trim($_POST["phone"] ?? "");
$service = trim($_POST["service"] ?? "");
$budget = trim($_POST["budget"] ?? "");
$description = trim($_POST["description"] ?? "");
$contact_method = trim($_POST["contact_method"] ?? "");

$errors = [];

if ($full_name === "" || strlen($full_name) < 2) {
    $errors[] = "Invalid name.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email.";
}


$phone_digits = preg_replace("/\D/", "", $phone);

if (strlen($phone_digits) < 7) {
    $errors[] = "Invalid phone number.";
}

$allowed_services = [
    "Web Development",
    "Digital Marketing",
    "SEO",
    "E-Commerce",
    "IT Support"
];

if (!in_array($service, $allowed_services, true)) {
    $errors[] = "Invalid service.";
}


$allowed_budgets = [
    "$500 - $1,000",
    "$1,000 - $2,500",
    "$2,500 - $5,000",
    "$5,000+"
];

if (!in_array($budget, $allowed_budgets, true)) {
    $errors[] = "Invalid budget.";
}

if ($description === "" || strlen($description) < 20) {
    $errors[] = "Description must contain at least 20 characters.";
}

$allowed_contacts = [
    "Email",
    "Phone"
];

if (!in_array($contact_method, $allowed_contacts, true)) {
    $errors[] = "Invalid contact method.";
}


if (!empty($errors)) {

    echo "<h2>There were errors:</h2>";

    foreach ($errors as $error) {
        echo "<p>" . htmlspecialchars($error) . "</p>";
    }

    echo '<a href="request.php">Go Back</a>';

    exit;
}

$full_name = htmlspecialchars($full_name);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$service = htmlspecialchars($service);
$budget = htmlspecialchars($budget);
$description = htmlspecialchars($description);
$contact_method = htmlspecialchars($contact_method);


$sql = "INSERT INTO service_requests
        (full_name, email, phone, service, budget, description, contact_method)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "sssssss",
    $full_name,
    $email,
    $phone,
    $service,
    $budget,
    $description,
    $contact_method
);


if ($stmt->execute()) {

    header(
        "Location: success.php?name=" .
        urlencode($full_name)
    );

    exit;

} else {

    echo "Something went wrong. Please try again.";

}

?>