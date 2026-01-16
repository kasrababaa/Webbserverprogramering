<?php

require_once("../../../projekt-3-app.php");

$checkStudentStmt = $pdo->prepare("SELECT * FROM StudentsClasses WHERE StudentId = :StudentId AND ClassId = :ClassId");
$checkStudentStmt->execute([
    "StudentId" => $_POST['studentId'],
    "ClassId" => $_POST['classId']

]);

$checkStudentResult = $checkStudentStmt->fetchAll(PDO::FETCH_ASSOC);

if ($checkStudentResult != false) {
    echo "Eleven läser redan kursen!";
    exit;
}

$addStudentClassStmt = $pdo -> prepare("INSERT INTO StudentsClasses (StudentId, ClassId) Values (:StudentId , :ClassId)");

$addStudentClassStmt -> execute ([
    "StudentId" => $_POST['studentId'],
    "ClassId" => $_POST['classId']
]);

header ("Location: " . $siteurl . "student.php?id=" . $_POST['studentId']);