<?php
// require_once ("../functionExercises/functionExercises.php");
require_once ("../functionExLib.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="POST">
        Input paragraph:
        <input type="text" name="input" autofocus />
        <input type="submit" value="Submit" />
    </form>

    <?php
      if(isset($_POST['input']))
      {
          print getLastSentence($_POST['input']) . "<br />";
      }
    ?>
    <!-- put a button on the form to reset it -->
    <a href="<?= $_SERVER['PHP_SELF']; ?>">Reset</a>
<?php ?>
</body>
</html>
