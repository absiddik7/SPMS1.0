<?php
    include 'mysql.php';
    $course_id = 'course';
    $id = $_SESSION['id'];

    $query = "SELECT admin.name FROM admin WHERE id = $id";
    $admin_name = $conn->query($query)->fetch_row()[0];

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['id']) {
        $id = strtolower($_POST['id']);
        $name = $_POST['name'];
        $school = $_POST['school'];
        $head = $_POST['head'];

        $query = "INSERT INTO department (id, name, head, school_id) VALUES ('$id', '$name', '$head', '$school')";

        $conn->query($query);

        header("Location: departments-list.php");

    }else{
        $query = "SELECT department.id, department.name, school.name as 'school', department.head
        FROM department LEFT JOIN school ON department.school_id = school.id";

        $departments = $conn->query($query);
    }

    $query = "SELECT id, name FROM school";
    $schools = $conn->query($query);
?>