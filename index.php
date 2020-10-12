<!DOCTYPE html>
<html>
<head>
    <title>FRIENDS BOOK LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<?php include('index_header.php'); ?>
			<?php include('dbcon.php'); ?>
    <body>
        <style >
           
        .well{
        background-color: #187FAB;
    }
        </style>
    <div class="row">
    <div class="col-sm-12">
        <div class="well">
            <center><h1 style="color: black;">FRIENDS BOOK</h1></center>
        </div>
    </div>
    </div>
            <section>				
			
                <div id="container_demo" >
				<img src="images/logo.jpg" class="img-rounded" title="logo" width="150px" height="150px">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
								<?php include('login_form.php'); ?>
                        </div>
                        <div id="register" class="animate form">
								<?php include('sign_up_form.php'); ?>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>