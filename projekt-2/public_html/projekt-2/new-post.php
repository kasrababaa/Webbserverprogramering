<?php
require_once("../../projekt-2-app.php");

require($includeDir . "/header.php"); 
?>

<main>
 <form action="new-post-formhandler.php" method="post">
      <label for="title">Titel</label><br>
      <input type="text" name="title" id="title" required><br>
      <label for="username">Användarnamn</label><br>
      <input type="text" name="username" id="username" required><br>
      <label for="content"></label> Skriv ditt inlägg här<br>
      <textarea name="content" id="" rows="10" cols="60" id="content" required></textarea><br>
      <input type="submit" value="Skicka in">
  </form>
</main>

<?php require($includeDir . "/footer.php"); ?>