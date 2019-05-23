
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
            button{
                overflow: hidden;
                border-radius: 17px;
                background-color: #4ADFCC;
                color:white;
                box-shadow: 2px 2px 2px 2px #E0E0E0;
                
            }
            nav{
                background-color: #4ADFCC;
            }
            
        </style>
        <script>
            function validateForm() {
                var x = document.forms["myform"]["quote"].value;
                document.forms["myform"]["quote"].value=x.replace('\'','’');         
            }
        </script>
    </head>

    <body>

        <?php require_once 'process.php'; ?>
        
        
        <div class="navbar navbar-inverse" style="background-color: #4ADFCC; border-color: #4ADFCC; box-shadow: 2px 2px 2px 2px #E0E0E0;">
            <a class="navbar-brand" href="#">About</a>
            <ul class="nav navbar-nav">
            <li style="background-color: white;" >
                    <a href="index.php">Add quote</a>
                </li>
                <li >
                    <a href="show.php">Show</a>
                </li>
            </ul>
        </div>
        
 
        
    
    <div class="container">

    
            <form action="process.php" onsubmit="return validateForm()" method="POST" role="form" class="form" name="myform">
                <br>
                <legend style="text-align:center;">Quote form </legend>

                <div class="form-group">
                    <label for="quote">Quote</label>
                    <textarea name="quote" id="quote" class="form-control" rows="3" required="required" placeholder="input quote"></textarea>
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name = "author" placeholder="input author">
                </div>
                <button style = "background-color:#4ADFCC; border-color: #4ADFCC;  "type="submit" class="btn btn-primary" name="save" >save</button>
            </form>
        </div>
    </body>
</html>
