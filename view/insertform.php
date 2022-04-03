<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Insertform</title>
</head>
<body>
    <h1 class="text-center m-4">Welcome to the library</h1>
    <div class="container mt-2 bg-light rounded rounded-lg">
        <div class="row text-center">
            <div class="col d-flex flex-column justify-content-center align-self-center">
                <form action="" method="POST" class="m-5">
                <div class="mb-3 row">
                    <label for="title" class="col-sm-2 col-form-label">Title: </label>
                    <div class="col-sm-10">
                        <input type="text" name="title" id="title" class="form-control" value="<?php 
                    if(isset($_POST['submit']) && isset($_POST['title'])){
                        echo $_POST['title'];
                    }?>" />
                <?php 
                    if(isset($_POST['submit']) && empty($_POST['title'])){
                        echo "<span class ='messageError' style=color:darkred>- You must enter a title!</span>";
                    }?>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="author" class="col-sm-2 col-form-label">Author: </label>
                    <div class="col-sm-10">
                    <input type="text" name="author" id="author" class="form-control" value="<?php 
                    if(isset($_POST['submit']) && isset($_POST['author'])){
                        echo $_POST['author'];
                    }?>" />
                <?php 
                    if(isset($_POST['submit']) && empty($_POST['author'])){
                        echo "<span class ='messageError' style=color:darkred>- You must enter an author!</span>";
                    }?>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pages" class="col-sm-2 col-form-label">Pages: </label>
                    <div class="col-sm-10">
                    <input type="number" name="pages" id="pages" class="form-control" value="<?php 
                    if(isset($_POST['submit']) && isset($_POST['pages']) ){
                        echo $_POST['pages'];
                    }?>" />
                <?php 
                    if(isset($_POST['submit']) && empty($_POST['pages'])){
                        echo "<span class ='messageError' style=color:darkred>- You must enter the number of pages!</span>";
                    }
                    elseif(isset($_POST['submit']) && !is_numeric($_POST['pages'])){
                        echo "<span class ='messageError' style=color:darkred>- You must enter a numeric value!</span>";
                    }
                    elseif(isset($_POST['submit']) && is_numeric($_POST['pages']) && $_POST['pages'] < 0){
                        echo "<span class ='messageError' style=color:darkred>- You must enter a positive number!</span>";
                    }?>
                    </div>
                </div>
                <div class="row">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" name="submit" class="btn btn-primary mb-4">Add Book</button>
                        </div>
                </div>
                </form>
    
    <hr class="bg-dark">

    <div class="m-3 row d-inline-flex justify-content-center">
            <form name="formsearch" action="" method="post" class="col-6"> 
                <input type="text" name="search" id="search" class="form-control"/>
                <button type="submit" id="sub" name="send" class="btn btn-primary m-2">Search by title</button>
            </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"  crossorigin="anonymous"></script>
</body>
</html>