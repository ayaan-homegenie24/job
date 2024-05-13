<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $post_applied = $_POST['post_applied'];
    $name = $_POST['name'];
    $whatsapp_number = $_POST['whatsapp_number'];
    $age = $_POST['age'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $present_company = $_POST['present_company'];
    $present_salary = $_POST['present_salary'];
    $residing_location = $_POST['residing_location'];
    $expected_salary = $_POST['expected_salary'];
    $marital_status = $_POST['marital_status'];
    $num_children = $_POST['num_children'];
    $job_location = $_POST['job_location'];
    $sales_engineer_location = $_POST['sales_engineer_location'];

    // Compose email message
    $to = "ayaan.homegeniegroup@gmail.com"; // Change this to your email address
    $subject = "New Job Application Submission";
    $message = "Post Applied For: $post_applied\n";
    $message .= "Name: $name\n";
    $message .= "Whatsapp Number: $whatsapp_number\n";
    $message .= "Age: $age\n";
    $message .= "Qualification: $qualification\n";
    $message .= "Over all working experience: $experience\n";
    $message .= "Present Company: $present_company\n";
    $message .= "Present Monthly Salary: $present_salary\n";
    $message .= "Present Residing Location: $residing_location\n";
    $message .= "Expected Salary Per Month: $expected_salary\n";
    $message .= "Marital Status: $marital_status\n";
    $message .= "Number Of Children If Any: $num_children\n";

    if ($post_applied == "Telecalling") {
        $message .= "Job Location: $job_location\n";
    } elseif ($post_applied == "Sales engineer") {
        $message .= "Job Location for Sales Engineer: $sales_engineer_location\n";
    }

    // Send email
    $headers = "From: your-email@example.com\r\n";
    $headers .= "Reply-To: your-email@example.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error: Email not sent.";
    }
} else {
    echo "Error: Invalid request.";
}
?>
