<?php require_once('session.php'); ?>
<?php require_once('../assets/templates/header.php'); ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Add your article</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Add your article</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            				
                <a href="application/logout.php" class="btn btn-success pull-right">user1LOGOUT
                    </a>
				</div><!--/.navbar-collapse -->
    </div>
</nav>
<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="container">
   <form enctype="multipart/form-data" action="server_upload.php" method="post">
	<label class="custom-file">
  <input type="file" id="file" class="custom-file-input" name="userarticle">
  <input type="submit">
  <span class="custom-file-control"></span>
</label>
</form>
</div>


<?php require_once('../assets/templates/footer.php'); ?>

 <!-- /container -->
</body>
</html>
