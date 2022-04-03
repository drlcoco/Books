<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Modify_controller</title>
</head>
<body>
    <?php
        require_once("../model/Query.php");

        $id = $_GET['modifyId'];
        $title = $_GET['modifyTitle'];
        $author = $_GET['modifyAuthor'];
        $pages = $_GET['modifyPages'];
        if (isset($_POST['submit'])) {

            $id = $_GET['modifyId'];
            $title = $_POST['title']; 
            $author = $_POST['author']; 
            $pages = $_POST['pages'];
            $query = new Query();
            $query->modifyBook($id, $title, $author, $pages);         
        }      
        else 
        {
            require_once("../view/modifybook.php");
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"  crossorigin="anonymous"></script>
</body>
</html>

