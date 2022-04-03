<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Modify</title>
</head>
<body>
<h1 class="text-center m-4">Modify your Book</h1>
    <div class="container mt-2 bg-light rounded rounded-lg">
        <div class="row text-center">
            <div class="col d-flex flex-column justify-content-center align-self-center">
                <form name="form1" action="" method="post">  
                <div class="mb-3 row">     
                    <label for="title" class="col-sm-2 col-form-label">* Title: </label>
                    <div class="col-sm-10">
                        <input type="text" id="title" name="title" class="form-control" required value="<?php echo $_GET['modifyTitle']; ?>"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="author" class="col-sm-2 col-form-label">* Author: </label>
                    <div class="col-sm-10">
                        <input type="text" id="author" name="author" class="form-control" required value="<?php echo $_GET['modifyAuthor']; ?>" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pages" class="col-sm-2 col-form-label">* Pages: </label>
                    <div class="col-sm-10">
                        <input type="text" id="pages" name="pages" class="form-control" required value="<?php echo $_GET['modifyPages'];?>"  />
                    </div>
                </div>
                <div class="row">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" name="submit" class="btn btn-primary mb-4">Modify</button>
                        </div>
                </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"  crossorigin="anonymous"></script>
</body>
</html>