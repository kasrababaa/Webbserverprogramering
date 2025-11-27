<?php

require_once("../../projekt-3-app.php");
$title = "Lindholmsskolan - Startsida";

    $stmt = $pdo->prepare("SELECT * FROM Teachers");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
    $stmt2 = $pdo->prepare("SELECT * FROM Students");
    $stmt2->execute();
    $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

    $stmt3 = $pdo->prepare("SELECT * FROM StudentsClassesView");
    $stmt3->execute();
    $result3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
  



require($includeDir . "/header.php"); 
?>


<main>
    <h2><b>Lärare på skolan</b></h2>
    <table>

        <tr> <!-- Edited Line -->
            <th>Förnamn</th>
            <th>Efternamn</th>
        </tr>


        <?php foreach ($result as $key => $value) : ?>
            <tr>
                <td><?= $value['FirstName'] ?></td>
                <td><?= $value['LastName'] ?></td>
            </tr>

            
        <?php endforeach; ?>

     
    </table>

    <h2><b>Elever på skolan</b></h2>
    <table>

        <tr> <!-- Edited Line -->
            <th>Förnamn</th>
            <th>Efternamn</th>
            <th>Födelseår</th>
        </tr>

        <?php foreach ($result2 as $key => $value) : ?>
            <tr>
                <td><?= $value['FirstName'] ?></td>
                <td><?= $value['LastName'] ?></td>
                <td><?= $value['BirthYear'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2><b>Kurser som eleverna läser</b></h2>
    <table>

        <tr>
            <th>Elev</th>
            <th>Kursnamn</th>
            <th>Lärare</th>
        </tr>

        <?php foreach ($result3 as $key => $value) : ?>
            <tr>
                <td><a href="student.php?id=<?= $value['StudentId'] ?>"> <?= $value['FirstName']?> <?=$value['LastName']?> </a></td>
                <td><?= $value['Name'] ?></td>
                <td><?= $value['FirstName:1'] ?> <?= $value['LastName:1'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>


<?php require($includeDir . "/footer.php"); ?>