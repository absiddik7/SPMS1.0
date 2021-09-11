<?php
    include 'mysql.php';

    $id = $_SESSION['id'];

    $query = "SELECT faculty.name FROM faculty WHERE id = $id";
    $faculty_name = $conn->query($query)->fetch_row()[0];

 ?>