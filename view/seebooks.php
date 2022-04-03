<?php
    if(!empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['pages']) && is_numeric($_POST['pages']) && $_POST['pages'] > 0){
        $title = $_POST['title'];
        $author = $_POST['author'];
        $pages = $_POST['pages'];
    }else{
        require_once("view/insertform.php");

        if(isset($_POST['search'])){
            $search = $_POST['search'];
            echo searchTable($search);
        }
        else{
            echo booksTable();
        }
    }
?>