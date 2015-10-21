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

  if( !isset($_POST['password']) || strlen($_POST['password']) == 0 )
  {
    echo "Password is not set. Please enter Password.";
    die;
  }
  elseif( strlen($_POST['password']) < 6 )
  {
    echo "Password must be at least 6 characters. Please re-enter Password.";
    die;
  }

  if( !isset($_POST['beatle']) || strlen($_POST['beatle']) == 0 )
  {
    echo "Favorite Beatle is not set. Please enter your favorite Beatle.";
    die;
  }

  echo "Title: ", $_POST['title'], "<br />";
  $mytitle = $_POST['title'];

  echo "First Name: ", $_POST['first_name'], "<br />";
  $myfn = $_POST['first_name'];

  echo "First Name: ", $_POST['last_name'], "<br />";
  $myln = $_POST['last_name'];

  echo "Password: ", $_POST['password'], "<br />";

  echo "Favorite Beatle: ", $_POST['beatle'], "<br />";
  $mybeatle = $_POST['beatle'];

  $myUsername = new buildUsername($myfn, $myln, $mytitle, $mybeatle, $beatlesArray);
  echo "NewUsername is: ", $myUsername->getNewUsername();

?>
