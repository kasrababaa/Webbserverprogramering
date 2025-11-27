<?php

require_once("../../projekt-3-app.php");

$title = "Lindholmsskolan - Elevinfo";

// Hitta info om studenten (namn o.s.v.)
$studentInfoStmt = $pdo->prepare("SELECT * FROM Students WHERE StudentId = :StudentId");
$studentInfoStmt->execute(["StudentId" => $_GET['id']]);
$studentInfoResult = $studentInfoStmt->fetch();

// Lista över alla kurser som finns
$allClassesStmt = $pdo->prepare('SELECT * FROM Classes');
$allClassesStmt->execute();
$allClassesResult = $allClassesStmt->fetchAll(PDO::FETCH_ASSOC);

// Lista över alla kurser eleven läser
$studentsClassesStmt = $pdo->prepare("SELECT ClassId FROM StudentsClassesView WHERE StudentId = :StudentId");
$studentsClassesStmt->execute(["StudentId" => $_GET['id']]);
$studentsClassesResult = $studentsClassesStmt->fetchAll(PDO::FETCH_COLUMN);


require($includeDir . "/header.php");
?>
<!--            
<pre>
    Studentinfo:
    <?= print_r($studentInfoResult) ?>

    AllClasses
    <?= print_r($allClassesResult) ?>

    StudentClasses
    <?= print_r($studentsClassesResult) ?>
</pre>
-->
<main>

    <?php if ($studentInfoResult == false): ?>
        Studenten hittades inte
    <?php else: ?>

        <h2>Info om <?= $studentInfoResult['FirstName'] . " " . $studentInfoResult['LastName'] ?></h2>

        <h3>Kurser hen läser</h3>
        <div>
            <?php
            foreach ($allClassesResult as $key => $value) {

                if (in_array($value['ClassId'], $studentsClassesResult)): ?>

                    <?= $value['Name'] ?><br>
                    <?php
                endif;
            }
            ?>

        </div>

        <h3>Kurser hen INTE läser</h3>
        <?php
        foreach ($allClassesResult as $key => $value) {

            if (!in_array($value['ClassId'], $studentsClassesResult)): ?>

                <?= $value['Name'] ?> <a href="add-student-class.php?class=<?= $value['ClassId'] ?>&student=<?= $studentInfoResult['StudentId'] ?>">+</a> <br><?php
            endif;
        }
        ?>


    <?php endif; ?>
</main>


<?php require($includeDir . "/footer.php"); ?>