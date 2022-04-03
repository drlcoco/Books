<?php
require_once("Connection.php");
// This method performs the INSERT and returns a result message.
class Query {
    public function insertBook($title, $author, $pages) {
        $connection= new Connection();
        $pdoObject = $connection->getConnection();
        $sql = "INSERT INTO books (title, author, pages) VALUES (:title, :author, :pages)";
        $sentence = $pdoObject->prepare($sql);
        $sentence->bindParam(':title', $title); 
        $sentence->bindParam(':author', $author);      
        $sentence->bindParam(':pages', $pages);
        $sentence->execute(); 
        if($sentence){
            echo "<div class='row bg-light mt-2'>
            <div class='col text-center'><h2>Inserted book ".$title." succesfully</h2>
            <a class='btn btn-lg btn-primary m-4' href='' role='button'>See Books</a></div></div>";
        }
        else{
            header("Location:''");
        }
    }
    // This method performs the SELECT and returns the result in an array.
    public function loadBooks() 
    {
        $connection = new Connection(); 
        $pdoObject = $connection->getConnection();
        $sql = "SELECT * FROM books";
        $result = $pdoObject->prepare($sql);
        $result->execute();
        $rows = null;
        while ($row = $result->fetch()) 
        {
            // saving the rows in an array
            $rows[] = $row; 
        }
        return $rows; 
    }

    public function searchBook($search){
        $connection= new Connection();
        $pdoObject = $connection->getConnection();
        $sql = "SELECT * FROM books WHERE title LIKE '%$search%'";
        $searchbook = $pdoObject->prepare($sql); 
        $searchbook->execute();
        $rows = null;
        while ($row = $searchbook->fetch()) {
            // saving the rows in an array
            $rows[] = $row; 
        }
        return $rows;
    }

    function deleteBook($id)
    {
        $connection= new Connection();
        $pdoObject = $connection->getConnection();
        $sql = "DELETE FROM books WHERE id = $id";
        $deleted = $pdoObject->prepare($sql);
        $deleted->execute();

        if($deleted){
            echo "<div class='row bg-light mt-2'>
            <div class='col text-center'><h2>Deleted book ".$id." succesfully</h2>
            <a class='btn btn-lg btn-primary m-4' href='..' role='button'>See Books</a></div></div>";
        }
        else{
            echo "Error, can,t delete.";
        }
    }

    function modifybook($id, $title, $author, $pages){
        $connection= new Connection();
        $pdoObject = $connection->getConnection();
        $sql = "UPDATE books SET id = '$id', title = '$title', author = '$author', pages = '$pages' WHERE id = $id";
        $modify = $pdoObject->prepare($sql);
        $modify->execute();

        if($modify){
            echo "<div class='row bg-light mt-2'>
            <div class='col text-center'><h2>Modified book ".$id." succesfully</h2>
            <a class='btn btn-lg btn-primary m-4' href='..' role='button'>See Books</a></div></div>";
        }
        else{
            echo "Error";
        }
    }
}
?>