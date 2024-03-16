<?php
// Include database connection
include 'connection.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve task name from the form
    $task_name = $_POST['task_name'];
    
    // SQL query to insert task into the database
    $sql = "INSERT INTO new_task (task_name) VALUES ('$task_name')";
    
    // Execute the SQL query
    $result = $conn->query($sql);
    
    // Check if the task was added successfully
    if ($result === TRUE) {
        echo 'Task added successfully.';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
    
    // Close database connection
    $conn->close();
}
?>