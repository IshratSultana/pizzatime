<?php
include_once "db.php";
session_start();
if (isset($_GET)) {
    if (isset($_GET['operation'])) {
        if ($_GET['operation'] == 'delete' && isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "DELETE FROM pizza WHERE id='$id'";

            if ($conn->query($sql) === TRUE) {
                header("Location: dashboard.php?delete-success=true");
                exit();
            } else {
                echo "Error deleting record: " . $conn->error;
                header("Location: dashboard.php?delete-success=false");
                exit();
//
            }
        }
    }
}