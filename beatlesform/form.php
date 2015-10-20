<?php include_once "selectMenu.php"; ?>
<?php include_once "data.php"; ?>

<form action="process.php" method="post">
    <label for="first_name">First Name:</label><br>
    <input type="text" name="first_name" id="first_name" autofocus>
    <br>
    <label for="last_name">Last Name:</label><br>
    <input type="text" name="last_name" id="last_name">
    <br>
    <label for="title">Title:</label><br>
    <?php
      $titleMenu = new selectMenu($titleArray, "Select a title.", "title");
      echo $titleMenu->makeMenu();
    ?>
    <br>
    <label for="beatle">Beatle:</label><br>
    <?php
      $beatlesMenu = new selectMenu($beatlesArray, "Select your favorite Beatle.", "beatle");
      echo $beatlesMenu->makeMenu();
    ?>
    <input type="submit" value="submit">
    <input type="reset" value="reset">
</form>
