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
        Input Url: <input type="text" name="url" autofocus />
        <input type="submit" value="Submit" />
    </form>

    <?php
      if(isset($_POST['url']))
      {
          print "URL filename is: " . getUrlFileName($_POST['url']) . "<br />";
      }
    ?>
    <!-- put a button on the form to reset it -->
    <a href="<?= $_SERVER['PHP_SELF']; ?>">Reset</a>
<?php ?>
</body>
</html>
