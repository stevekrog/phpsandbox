<?php
require_once ("../functionExLib.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="POST">
        Input number to format as US currency:
        <input type="text" name="input" autofocus />
        <input type="submit" value="Submit" />
    </form>

    <?php
      if(isset($_POST['input']))
      {
          print formatCurrency($_POST['input']) . "<br />";
      }
    ?>
    <!-- put a button on the form to reset it -->
    <a href="<?= $_SERVER['PHP_SELF']; ?>">Reset</a>
<?php ?>
</body>
</html>
