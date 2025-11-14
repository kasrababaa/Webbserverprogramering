<?php

require_once("../../projekt-3-app.php");
$title = "Lindholmsskolan - Startsida";

    $stmt = $pdo->prepare("SELECT * FROM Teachers");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
    $stmt = $pdo->prepare("SELECT * FROM Students");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  



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

        <?php foreach ($result as $key => $value) : ?>
            <tr>
                <td><?= $value['FirstName'] ?></td>
                <td><?= $value['LastName'] ?></td>
                <td><?= $value['BirthYear'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>


<?php require($includeDir . "/footer.php"); ?>