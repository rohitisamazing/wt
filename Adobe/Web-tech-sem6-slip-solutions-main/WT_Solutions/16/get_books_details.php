<?php
if (isset($_POST['title'])) {
    $title = $_POST['title'];

    $xml = simplexml_load_file('books.xml');
    $bookDetails = array();

    foreach ($xml->book as $book) {
        if ((string)$book->title === $title) {
            $bookDetails['title'] = (string)$book->title;
            $bookDetails['author'] = (string)$book->author;
            $bookDetails['year'] = (string)$book->year;
            $bookDetails['price'] = (string)$book->price;
            break;
        }
    }

    // Return the data as JSON
    echo json_encode($bookDetails);
}
?>
