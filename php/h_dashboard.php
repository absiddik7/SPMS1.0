<?php
    include 'mysql.php';

    $id = $_SESSION['id'];

    $query = "SELECT faculty.name FROM faculty WHERE id = $id";
    $faculty_name = $conn->query($query)->fetch_row()[0];

    $course_id = 'course';

    $query = "SELECT COUNT(course.id) as 'total' FROM course";
    $crss = $conn->query($query)->fetch_row()[0];

    $query = "SELECT COUNT(program.id) as 'total' FROM program";
    $progs = $conn->query($query)->fetch_row()[0];


    $query = "SELECT COUNT(student.id) as 'total' FROM student";
    $stds = $conn->query($query)->fetch_row()[0];

 ?>