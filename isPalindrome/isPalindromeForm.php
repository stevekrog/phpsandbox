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
        Input String to see if it is a palindrome:
        <input type="text" name="input" autofocus />
        <input type="submit" value="Submit" />
    </form>

    <?php
      if(isset($_POST['input']))
      {
          print isPalindrome($_POST['input']) . "<br />";
      }
    ?>
    <!-- put a button on the form to reset it -->
    <a href="<?= $_SERVER['PHP_SELF']; ?>">Reset</a>
<?php ?>
</body>
</html>
