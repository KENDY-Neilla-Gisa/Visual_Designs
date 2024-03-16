<?php
// Include database connection
include 'connection.php';

// SQL query to select tasks from the new_task table
$sql = 'SELECT * FROM new_task';

// Execute the SQL query
$result = $conn->query($sql);

// Check if there are any tasks retrieved
if ($result->num_rows > 0) {
    // Loop through each row of the result set
    while ($row = $result->fetch_assoc()) {
        // Output each task
        echo "Task ID: " . $row['id'] . "<br>";
        echo "Task Name: " . $row['task_name'] . "<br>";
        echo "-----------------------<br>";
    }
} else {
    // If no tasks found
    echo "No tasks found.";
}

// Close database connection
$conn->close();
?>
