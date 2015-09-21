<?php

//Palindrome Detector

function isPalindrome($inString)
{
    $origString = $inString;
    $origString = preg_replace('/\s+/', '', $origString); // remove whitespace
    $origString = strtolower($origString); // change all chars to lower case
    $reverseString = strrev($origString);
    if( strlen($origString) < 2 )
    {
        print "Test String must be at least 2 characters" . "<br />";
        return;
    }
    if( strcmp($origString, $reverseString) == 0 ) //strcmp returns 0 (zero) if strings are same
    {
        print "'" . $inString . "' is a palindrome<br />";
    }
    else
    {
        print "'" . $inString . "' is a not palindrome<br />";
    }
}

$palString = "madam im adam";
$notPalStr = "some word";
isPalindrome($palString);
isPalindrome($notPalStr);

print "<br />";
//
//Write a function to reverse a string.
function reverseStr($inString)
{
    $origString = $inString;
    $reverseString = strrev($origString);
    return $reverseString;
}

$forwardStr = "This is the string frontwards";
print "frontwards string is /" . $forwardStr . "/<br />";
print "backwards string is /" . reverseStr($forwardStr) . "/<br />";
print "<br />";


//Write a function that checks if a string is all lower case.
function isStrLower($inString)
{
    $lowerString = strtolower($inString);
    if(strcmp($inString, $lowerString) !== 0)
    {
      print "/" . $inString . "/ is not all lowercase<br />";
    }
    else {
      print "/" . $inString . "/ is all lowercase<br />";
    }
}

$notLowerStr = "This string is Not all lOwer case.";
$lowerStr = "this string is all lower case.";
isStrLower($notLowerStr);
isStrLower($lowerStr);
print "<br />";

//Write a function that turns a unix timestamp into a readable date and time.
function formatTime($inputTime)
{
  if(!is_numeric($inputTime) )
  {
    print "Input value /" . $inputTime . "/ is not numeric <br />";
  }
  $formattedTime = strftime("%A %B %e, %G at %k:%M:%S %P" ,$inputTime);
  return $formattedTime;
}

print "the current unix time is: " . time() . "<br />";
print "The current date is: " . formatTime( time() ) . "<br />";
print "<br />";
//print "The current date is: " . formatTime("joe") . "<br />";

//Write a function that converts and returns just the file name from a URL
//example: 'http://www.weblab.com/weblab/index.php'
//result: �index.php�

function getUrlFileName($url)
{
    $reverseUrl = strrev($url);
    $firstSlashPos = strpos($reverseUrl, "/");
    $revFileName = substr($reverseUrl,0,$firstSlashPos);
    $fwdFileName = strrev($revFileName);
    return $fwdFileName;
}
$testUrl = "http://www.weblab.com/weblab/index.php";
print "url is: " . $testUrl . "<br />";
print "filename in url is: " . getUrlFileName($testUrl) . "<br />";
print "<br />";
//Write a function that returns the last sentence of a string.
//example: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.�
//result: 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.�
// algorithm is to find second to last [.?!] then ltrim and rtrim the following sentence
// and return the rest.
function getLastSentence($inputParagraph)
{
  $lastEOSChar = "";
  $lastEOSPos = null;
  $tempParagraph = "";
  $lastSentence = "";

  $posDot = strrpos($inputParagraph, ".");
  $posQM = strrpos($inputParagraph, "?");
  $posExcl = strrpos($inputParagraph, "!");

  if(!$posDot && !$posQM && !$posExcl) // no end of sentence chars found
  {
    print "There are no sentence ending characters in the string <br />";
    return;
  }
  // debug. remove
  // print "posDot = " . $posDot . ", posQM = " . $posQM . ", posExclamation = " . $posExcl . "<br />";

  // find the last occurrence of [.?!] in the string.
  $lastEOSPos = getLastEOSCharPos($posDot, $posQM, $posExcl);

  // clip off the last eos char and get next to last
  $tempParagraph = substr($inputParagraph, 0, $lastEOSPos);
  $LastEOSChar = substr($inputParagraph, $lastEOSPos, 1);

  // get 2nd to last EOS char
  $posDot = strrpos($tempParagraph, ".");
  $posQM = strrpos($tempParagraph, "?");
  $posExcl = strrpos($tempParagraph, "!");

  if(!$posDot && !$posQM && !$posExcl)
  {
    return ($tempParagraph . $LastEOSChar); // there was only 1 EOS char in sentence
  }

  $lastEOSPos = getLastEOSCharPos($posDot, $posQM, $posExcl);
  $lastSentence = ltrim(substr($tempParagraph, $lastEOSPos + 1)) . $LastEOSChar;
  return $lastSentence;
}

function getLastEOSCharPos($posDot, $posQM, $posExcl)
{

  if($posDot > $posQM)
  {
    if($posDot > $posExcl)
    {
      return $posDot; // $posDot > $posQM && $posDot > $posExcl
    }
    else
    {
      return $posExcl; // $posDot > $posQM && $posDot < $posExcl
    }
  }
  else //$posQM > $posDot
  {
    if($posQM > $posExcl)
    {
      return $posQM; //$posQM > $posDot && $posQM > $posExcl
    }
    else
    {
      return $posExcl; // $posQM > $posDot && $posQM < $posExcl
    }# code...
  }
}

$myParagraph = "This is sentence 1! This is sentence 2. Is this sentence 3? Yes it is sentence 4!";
$myParagraph2 = "This is sentence 1. This is sentence 2 Is this sentence 3? Yes it is sentence 4";
$myParagraph3 = "This is sentence 1 This is sentence 2 Is this sentence 3? Yes it is sentence 4.";

print "inputParagraph is :" . $myParagraph . "<br />";
print "last sentence is :" . getLastSentence($myParagraph) . "<br />";
print "inputParagraph is :" . $myParagraph2 . "<br />";
print "last sentence is :" . getLastSentence($myParagraph2) . "<br />";
print "inputParagraph is :" . $myParagraph3 . "<br />";
print "last sentence is :" . getLastSentence($myParagraph3) . "<br />";
print "<br />";
//Write a function that returns the first part of an email address
//example: david@drj.io
//result: david
function getEmailName($inString)
{
    $ampersandPos = strpos($inString, "@");
    if($ampersandPos==false)
    {
        print "Invalid email address\n";
    }
    else
    {
        $emailName = substr($inString,0,$ampersandPos);
        return $emailName;
    }
}

$emailAdd = "ivankong@gmail.com";
print "emailaddres is: " . $emailAdd . "<br />";
print "parsed email name is " . getEmailName($emailAdd) . "<br />";
print "<br />";
//Write a function that puts a list of items from a form into an array (text field)
//example:
//bread
//milk
//cheese
//apples

//result: [�bread�,�milk�,�cheese�,�apples�]
//
//Build an array of IPs and run a function on each ip to grab the Telize Geolocation information, using CURL
//
//Write a function that sorts the items of an array.
//
//Write a function that converts currency from one type to another.  (USD, EUR, YEN, GBP)
//
//Write a function that converts an integer to currency with 2 decimal places and a dollar sign and commas.
//Example: 1000 result: $1,000.00
//example: 100 result: $100.00
//example: 20001.50 result: $20001.50
function formatCurrency($number)
{
  return "$" . number_format( money_format('%-+.2n', $number),2 ) . "<br />";
}
$number = -1000045.43;
print $number . "<br />";
print formatCurrency($number);
$number = .43;
print $number . "<br />";
print formatCurrency($number);
$number = 0;
print $number . "<br />";
print formatCurrency($number);
$number = 1000;
print $number . "<br />";
print formatCurrency($number);
//
//Write a function that takes a JSON string and converts it to an array and displays the result in a table.
function jsonToArr($jsonString);
{
  $jsonArr =  json_decode($jsonString);
}
?>
