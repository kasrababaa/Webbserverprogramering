<?php

require_once("../../projekt-3-app.php");

require($includeDir."/header.php");

?>

<main>
    <p>
        Vill du lägga till studenten med STudentId <?= $_GET['student'] ?> till kursen med ClassId <?= $_GET['class'] ?>?
    </p>

    <form action="add-student-class-formhandler.php" method="post">
        <input type="hidden" name="studentId" value="<?= $_GET['student'] ?>">
        <input type="hidden" name="classId" value="<?= $_GET['class'] ?>">
        <input type="submit" value="Ja">
    </form>
</main>

<?php require ($includeDir."/footer.php"); ?>