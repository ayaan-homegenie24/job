<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $post_applied = $_POST['post_applied'];
    $name = $_POST['name'];
    $whatsapp_number = $_POST['whatsapp_number'];
    // Add similar lines for other form fields

    // Process the data (e.g., store in database, send email, etc.)
    // Example: Store data in a text file
    $data = "Post Applied: $post_applied\nName: $name\nWhatsApp Number: $whatsapp_number\n";
    // Add similar lines for other form fields

    // Write data to a text file (you can modify this to store in a database)
    $file = fopen("form_data.txt", "a"); // Open file in append mode
    fwrite($file, $data); // Write data to file
    fclose($file); // Close file

    // Provide feedback to user
    echo "Thank you for your application! We will get in touch with you soon.";
} else {
    // If form is not submitted, redirect user back to the form page or show an error message
    echo "Error: Form not submitted.";
}
?>
