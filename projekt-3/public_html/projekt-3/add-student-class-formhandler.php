<?php

$checkStudentStmt = $pdo->prepare("SELECT StudentsClasses WHERE StudentID = :STudentId AND ClassId = :ClassId");
$checkStudentStmt->execute([
    "StudentId" => $_POST['student'],
    "ClassId" => $_POST['class']

]);

$checkStudentResult = $checkStudentStmt->fetchAll(PDO::FETCH_ASSOC);