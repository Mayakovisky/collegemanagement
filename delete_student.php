<?php
// Include the database connection and functions file
include 'includes/db_connect.php'; // Ensure you have the correct path to your db connection file
include 'includes/functions.php';

// Check if the student ID is provided in the URL
if (isset($_GET['id']))
{
    $student_id = intval($_GET['id']); // Sanitize the input by converting it to an integer

    // Call the function to delete the student
    if (delete_student($conn, $student_id)) {
        // If successful, redirect to the admin dashboard
        //header("Location: http://localhost/collegemanagement/admin_dashboard.php?message=success");
        header("Location: http://localhost/collegemanagement/admin_dashboard.php");
        exit;
    } else {
        // If there's an error, redirect with an error message
        header("Location: http://localhost/collegemanagement/admin_dashboard.php?message=error");
        exit;
    }
} else {
    // If no student ID is provided, redirect to the dashboard
    header("Location: http://localhost/collegemanagement/admin_dashboard.php?message=no_id");
    exit;
}
?>