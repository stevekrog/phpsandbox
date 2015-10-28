<?php
/**
 * Created by PhpStorm.
 * User: Steve
 * Date: 9/15/2015
 * Time: 11:37 AM
 */

function format_date($datestring)
{
    $year = substr($datestring, 0, 4);
    $month = substr($datestring, 4, 2);
    $day = substr($datestring, 6, 2);
    return $month . "/" . $day . "/" . $year;
}

function countBookFormats($books)
{
    foreach($books as $bookKey => $book)
    {
        foreach($book as $fieldName => $fieldValue)
        {
            if ($fieldName <> "formats")
            {
                print "fieldName is:" . $fieldName . ", fieldValue is:" . $fieldValue . "<br />";
            }
            else
            {
                print "fieldName is:" . $fieldName . ", fieldValue is:";
                foreach($book["formats"] as $format) //$book["formats"] evaluates to the array of formats
                {
                    print $format . "<br />";
                }
            }
        }
    }
}
?>