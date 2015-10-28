<?php
/**
 * Created by PhpStorm.
 * User: Steve
 * Date: 9/14/2015
 * Time: 7:01 PM
 */


include "bookLib.php";


/**
 * Create multidimensional array of books and access functions
 */

$books[] = array(
    "title" => "Moby Dick",
    "author" => "Herman Melville",
    "subject" => "Whaling",
    "publisher" => "Richard Bentley",
    "pages" => "927",
    "publication date" => "18511018",
    "formats" => array('hard back', 'paper back', 'ebook', 'pdf ')
);
$books[] = array(
    "title" => "Silent Spring",
    "author" => "Rachel Carson",
    "subject" => "Environment",
    "publisher" => "Houghton Mifflin",
    "pages" => "250",
    "publication date" => "19620303",
    "formats" => array('hard back', 'paper back','ebook')
);
$books[] = array(
    "title" => "The Hunger Games",
    "author" => "Suzanne Collins",
    "subject" => "Dystopian",
    "publisher" => "Scholastic Press",
    "pages" => "374",
    "publication date" => "20080914",
    "formats" => array('hard back', 'paper back','ebook')
);
$books[] = array(
    "title" => "The Catcher in the Rye",
    "author" => "J. D. Salinger",
    "subject" => "Coming of age fiction",
    "publisher" => "Little, Brown and Company",
    "pages" => "214",
    "publication date" => "19510715",
    "formats" => array('hard back', 'paper back')
);
$books[] = array(
    "title" => "To Kill a Mockingbird",
    "author" => "Harper Lee",
    "subject" => "Racial injustice",
    "publisher" => "Robert Brown",
    "pages" => "250",
    "publication date" => "19600711",
    "formats" => array('hard back', 'paper back','ebook', 'audio')
);
// create an array of key values from an instance of a book
$bookKeys = array_keys($books[0]);

?>

<!doctype html>
<html>
<head>
    <style>
        h3.dsb {font-family:Verdana, sans-serif;
            color: DarkSlateBlue;
        }
        table { width: 100%;
            border-collapse: collapse;
        }
        td { background-color: aliceblue;}
        th { text-align: left;
            font-family:Verdana, sans-serif;
            font-size:13px;
            color: DarkRed;
        }
    </style>
</head>
<body>
    <h3 class="dsb" >List of Good Books</h3>

    <table>
        <tr>
            <?php for($i=0; $i<count($bookKeys); $i++) { ?>
                <th><?php print $bookKeys[$i]; ?></th>
            <?php } ?>
        </tr>
        <?php foreach($books as $bookidx => $book) { ?>
            <tr>
                <td><?php print $book['title']; ?></td>
                <td><?php print $book['author']; ?></td>
                <td><?php print $book['subject']; ?></td>
                <td><?php print $book['publisher']; ?></td>
                <td><?php print $book['pages']; ?></td>
                <td><?php print format_date($book['publication date']); ?></td>
                <td>
                    <?php
                    for($formatsCount = 0; $formatsCount < count($book['formats']); $formatsCount++)
                    {
                        if( $formatsCount == (count($book['formats'])-1) ) // last element
                        {
                            print $book['formats'][$formatsCount];
                        }
                        else
                        {
                            print $book['formats'][$formatsCount] . ", ";
                        }
                    }
                    ?>
                </td>
            </tr>
        <?php } ?>

    </table>
</body>
</html>
