<!DOCTYPE html>
<html class="gr__getbootstrap_com" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.png">
    <title>Save to JSON</title>
<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/styles.css" rel="stylesheet">
      <link href="css/signin.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
     <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        </script>
     
</head>
<body style="background: url(img/bg.jpeg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;" data-gr-c-s-loaded="true">
     <nav class="navbar navbar-default navbar-fixed-top">
        <div class="topnav" id="myTopnav">
          <a href="index.php" class="active"><img src="img/favicon.png" width="25px"/></a>
          <a href="index.php">Create</a>
          <a href="view.php">View</a>
        
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </nav>
    <div class="container" style="min-height:auto;">
      <form class="form-signin" action="save.php" method="POST" enctype="multipart/form-data">
     
        <input id="product" name="product" class="form-control" placeholder="Product name" required="yes" autofocus="" type="text">
        <input id="qty" name="qty" class="form-control" placeholder="Quantity in stock" required="yes" autofocus="" type="number">
        <input id="price" name="price" class="form-control" placeholder="Price per item" required="yes" type="text">
        <br />
  
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Save</button>
      </form>
    </div> <!-- /container -->
</body>
</html>