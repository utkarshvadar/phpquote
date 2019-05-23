
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <style>
            a{
                color:#4ADFCC;
            }
            blockquote{
                border-left:none
            }

            .quote-badge{
                background-color: rgba(0, 0, 0, 0.2);   
            }

            .quote-box{
                
                overflow: hidden;
                margin-top: -100px;
                padding-top: -100px;
                border-radius: 17px;
                background-color: #4ADFCC;
                margin-top: 25px;
                color:white;
                width: 325px;
                box-shadow: 2px 2px 2px 2px #E0E0E0;
                
            }

            .quotation-mark{
                
                margin-top: -10px;
                font-weight: bold;
                font-size:100px;
                color:white;
                font-family: "Times New Roman", Georgia, Serif;
                
            }

            .quote-text{
                
                font-size: 19px;
                margin-top: -65px;
            }

            a.abc:hover{
                text-decoration:none;
                color:tomato;

            }
            a.abc{
                color:white;
            }

        </style>
    </head>
    <body>

        <?php require_once 'process.php'; ?>
        
        
        <div class="navbar navbar-inverse" style="background-color: #4ADFCC; border-color: #4ADFCC; box-shadow: 2px 2px 2px 2px #E0E0E0;">
            <a class="navbar-brand" href="#">About</a>
            <ul class="nav navbar-nav">
            <li >
                    <a href="index.php">Add quote</a>
                </li>
                <li style="background-color: white;" >
                    <a href="show.php">Show</a>
                </li>
            </ul>
        </div>
        

        <div class="container">    
        <?php
            $mysqli = mysqli_connect('localhost','root','','quote');
            $result = $mysqli->query("select * from data order by likes DESC") or die($mysqli->error);
        ?>
        <?php while($row = $result->fetch_assoc()):?>
        <div class="col-sm-4">
            <blockquote class="quote-box">
            <p class="quotation-mark">
                “
            </p>
            <p class="quote-text">
                <?php echo $row['quote']?>
            </p>
            <hr>
            <div class="blog-post-actions">
                <p class="blog-post-bottom pull-left">
                <?php echo $row['author']?>
                </p>
                <p class="blog-post-bottom pull-right">
                <span class="badge quote-badge"><?php echo $row['likes']?></span><a class="abc" title ="like" href="process.php?like=<?php echo $row['id']?>">   ❤  </a>
                </p>
            </div>
            </blockquote>
            <br>
        </div>
            
        <?php endwhile?>
        
        </div>
    </body>
</html>
