<?php
    require_once("model/Query.php");
    require_once("view/seebooks.php");
    require_once("controller/Insert.php");
    
    function booksTable()
    {
        $myquery = new Query();
        $rows = $myquery->loadBooks();
        if (!$rows)
            $string = "There are no books.";
        else {
            $string = "<div class='mb-3 row'><div class='col m-4'><table class='table table-dark table-striped rounded rounded-lg'>";
            $string .= "<tr><th>ID</th><th>TITLE</th><th>AUTHOR</th><th>PAGES</th><th>DELETE</th><th>MODIFY</th></tr>";
            foreach ($rows as $row) 
            {
                $string .= "<tr><td>".$row['id']."</td><td>".$row['title']."</td><td>".$row['author']."</td><td>".$row['pages']."</td><td><a href='controller/delete.php?deletedId=".$row['id']."'>Delete</a></td><td><a href='controller/Modify_controller.php?modifyId=".$row['id']."& modifyTitle=".$row['title']."& modifyAuthor=".$row['author']."& modifyPages=".$row['pages']."'>Modify</a></td>"; 
            }
            $string .= "</table></div></div>";
        }
        return $string;
    }

    function searchTable($search)
    {
        $myquery = new Query();
        $rows = $myquery->searchBook($search);
        if (!$rows)
        {
            $string = "<h2>There are no Books.</h2>";
        }else 
        {
            $string = "<div class='mb-3 row'><div class='col m-4'><table class='table table-dark table-striped rounded rounded-lg'>";
            $string .= "<tr><th>ID</th><th>TITLE</th><th>AUTHOR</th><th>PAGES</th><th>DELETE</th><th>MODIFY</th></tr>";
            foreach ($rows as $row) 
            {
                $string .= "<tr><td>".$row['id']."</td><td>".$row['title']."</td><td>".$row['author']."</td><td>".$row['pages']."</td><td><a href='controller/delete.php?deletedId=".$row['id']."'>Delete</a></td><td><a href='controller/Modify_controller.php?modifyId=".$row['id']."& modifyTitle=".$row['title']."& modifyAuthor=".$row['author']."& modifyPages=".$row['pages']."'>Modify</a></td>"; 
            }
            $string .= "</table></div></div>";
        }
        return $string;
    }
?>