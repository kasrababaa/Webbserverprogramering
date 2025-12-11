<?php

require_once("../../projekt-3-app.php");

$checkStudentStmt = $pdo->prepare("SELECT * FROM StudentsClasses WHERE StudentId = :StudentId AND ClassId = :ClassId");
$checkStudentStmt->execute([
    "StudentId" => $_POST['student'],
    "ClassId" => $_POST['class']

]);

$checkStudentResult = $checkStudentStmt->fetchAll(PDO::FETCH_ASSOC);

if ($checkStudentResult != false) {
    echo "Eleven läser redan kursen!";
    exit;
}

$addStudentClassStmt = $pdo -> prepare("INSERT INTO StudentsClasses (StudentId, ClassId) Values (:StudentId , :ClassID)");

$addStudentClassStmt -> execute ([
    "StudentId" => $_POST['student'],
    "ClassId" => $_POST['class']
]);

header ("Loacation : student.php?id=" . $_POST['student']);