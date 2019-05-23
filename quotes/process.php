<?php 
    $mysqli = mysqli_connect('localhost','root','','quote');
    $mysqli->query("SET quote 'utf8'");

    if(isset( $_POST['save'] )){
        $quote = $_POST['quote'];
        $author = $_POST['author'];
        $mysqli->query("insert into data(quote,author) values('$quote','$author')") or die($mysqli->error);
        header("location: show.php");
    }

    if(isset($_GET['like'])){
        $id= $_GET['like'];
        
        $mysqli->query("update data set likes = likes+1 where id=$id") or die($mysqli->error);

        header("location: show.php");
    }
?>