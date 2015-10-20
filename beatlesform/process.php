<?php
include_once "buildUsername.php";
  // var_dump($_POST);
  // test that all variables have been set
  if( !isset($_POST['title']) || strlen($_POST['title']) == 0 )
  {
    echo "Title is not set. Please enter title.";
    die;
  }

  if( !isset($_POST['first_name']) || strlen($_POST['first_name']) == 0 )
  {
    echo "First name is not set. Please enter first name.";
    die;
  }
  elseif( strlen($_POST['first_name']) < 2 )
  {
    echo "First name must be at least 2 characters. Please re-enter first name.";
    die;
  }

  if( !isset($_POST['last_name']) || strlen($_POST['last_name']) == 0 )
  {
    echo "Last name is not set. Please enter last name.";
    die;
  }
  elseif( strlen($_POST['last_name']) < 2 )
  {
    echo "Last name must be at least 2 characters. Please re-enter last name.";
    die;
  }

  if( !isset($_POST['beatle']) || strlen($_POST['beatle']) == 0 )
  {
    echo "Favorite Beatle is not set. Please enter your favorite Beatle.";
    die;
  }

  echo $_POST['title'], " ";
  $mytitle = $_POST['title'];

  echo $_POST['first_name'], " ";
  $myfn = $_POST['first_name'];

  echo $_POST['last_name'], ". favorite beatle is: ";
  $myln = $_POST['last_name'];

  echo $_POST['beatle'];
  $mybeatle = $_POST['beatle'];

  $myUsername = new buildUsername($myfn, $myln, $mytitle, $mybeatle, $beatlesArray);
  echo "<br />NewUsername is: ", $myUsername->getNewUsername();

?>
