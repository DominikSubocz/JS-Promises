<?php

class Components {
    public static function pageHeader($pageTitle, $stylesheets, $scripts){
        require("components/header.php");

    }

    public static function adminHeader($pageTitle, $stylesheets, $scripts){
        require("components/admin-header.php");

    }

    public static function pageFooter(){
        require("components/footer.php");
    }

    public static function allBooks($books){
        if(!empty($books)){

            foreach($books as $book){
                $bookId = Utils::escape($book["book_id"]);
                $title = Utils::escape($book["title"]);
                $author = Utils::escape($book["author"]);
                $price = Utils::escape($book["price"]);
                $filename = Utils::escape($book["filename"]);
                $tags = Utils::escape($book["tags"]);

                require("components/book-card.php");
            }


        }

        else{
            require("components/no-books-found.php");
        }
    }





    public static function singleBook($book){
        if(!empty($book)){
            $bookId = Utils::escape($book["book_id"]);
            $title = Utils::escape($book["title"]);
            $author = Utils::escape($book["author"]);
            $price = Utils::escape($book["price"]);
            $filename = Utils::escape($book["filename"]);
            require("components/book-single.php");

        }
        else{
            require("components/no-books-found.php");
        }
    }
}