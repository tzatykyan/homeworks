<?php ob_start();
require_once('session.php'); ?>
<?php require_once('../assets/templates/header.php'); ?>
<?php require_once('content_reader.php'); ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Article View</title>
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
            <a class="navbar-brand" href="#">
			Read full article
			</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            				
                <a href="/application/logout.php" class="btn btn-success pull-right">user1LOGOUT
                    </a>
				</div><!--/.navbar-collapse -->
    </div>
</nav>
<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="container">
   <h1> <?=strtoupper($_GET['name'])?></h1>
   <div>
   <?php
   $content = getContent($config['content']);
   $i=0;
   foreach($content as $item){
	    
	   if((strtolower(basename($item['title'], ".txt")))==($_GET['name'])){
		   
		   echo $item['content'];
		   $i++;
		  }
	   	  
   }
   if ($i==0){
		   header("HTTP/1.0 404 Not Found");
		    echo "NOT FOUND";
	   }
   ob_end_flush();
   if ($i!=0):?>
   <br>
   <div class="container">
   <p><a class="btn btn-primary btn-lg" href="download_header.php?name=<?=$_GET['name']?>" role="button">Download</a></p>
   <?php endif;?>
   </div>
   <div class="container">
   <p><a class="btn btn-primary btn-lg" href="../index.php" role="button">Go Home &raquo;</a></p>
   </div>
 
   
   </div>
</div>


<?php require_once('../assets/templates/footer.php'); ?>

 <!-- /container -->
</body>
</html>
