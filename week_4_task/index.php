<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
<?php
include "db.php";
?>
</head>
<body>
    <div class="container my-5">
    <h2> User Lists</h2>
    <a class="btn btn-primary" href="/sidehustle7.0/create.php" role="botton">New user</a>
     <br>
     <table class="table">
        <thead>
            <tr>
                <th>userid</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>username</th>
                <th>gender</th>
                <th>email</th>
                <th>password</th>
            </tr>
        </thead>
        <tbody>
    <?php
        $sql="SELECT * FROM userprofile";
        $result=$conn->query($sql);

        if (!$result){
        die("invalid query:".$conn->error);
        }
        //read from each row
        while($row=$result->fetch_assoc()){
        echo"    
        <tr>
        <td>$row[userid]</td>
        <td>$row[firstname]</td>
        <td>$row[lastname]</td>
        <td>$row[username]</td>
        <td>$row[gender]</td>
        <td>$row[email]</td>
        <td>$row[password]</td>
               </tr>
        ";
        }

        ?>
        </tbody> 

</body>
</html>