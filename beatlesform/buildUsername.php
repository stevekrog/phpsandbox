<?php
include_once "data.php";

  class buildUsername
  {
    private $firstName; // first name
    private $lastName; // last Name
    private $title; // users title
    private $favBeatle; // users favorite beatle
    private $beatlesArr; // name of beatles array

    function __construct($first_name, $last_name, $title, $beatle, $beatlesArr)
    {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->title = $title;
        $this->favBeatle = $beatle;
        $this->beatlesArr = $beatlesArr;
    }

    // return the first 2 letters of users first name
    private function setStr1()
    {
        return substr($this->firstName,0,2);
    }

    // return the last 2 letters of users last name
    private function setStr2()
    {
        $tmpStr = strrev($this->lastName);
        $subStr = substr($tmpStr,0,2);
        return strrev($subStr);
    }

    // return the numeric index of favorite beatle from array
    private function setStr3()
    {
        return array_search($this->favBeatle, $this->beatlesArr);
    }

    // return the first 2 letters and last letter of favorite beatle
    private function setStr4()
    {
        $subStr1 = substr($this->favBeatle,0,2);
        $subStr2 = substr(strrev($this->favBeatle),0,1);
        return $subStr1.$subStr2;
    }

    // return the new username created by concatenating the values of the 4 functions above
    public function getNewUsername()
    {
      $newUserName = $this->setStr1() . $this->setStr2() . $this->setStr3() . $this->setStr4();
      return $newUserName;
    }
  }
?>
