
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    
</head>
<body> 
<div id="login-form" class="login-form" name="form1">   
<div id="form-content">
            <?php
                echo "<h3 style='color:red;'> Sign Up Failed...Redirecting!!!</h3>";
                echo "<h4>Username already exist!!!</h4>";
                header( "refresh:2;url=index.php" );
              ?>
</div>
</div>
  
</body>
</html>
