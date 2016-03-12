<!DOCTYPE html>
<html lang="en">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73568956-2', 'auto');
  ga('send', 'pageview');

</script>
 
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tau Kappa Epsilon | Theta-Chi</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<!--Forum CSS TESTING-->
	<link href="css/forum.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
 
<body>
	
	<div class="brand">TAU KAPPA EPSILON | Θ Χ</div>
    <div class="address-bar"> Better Men for A Better World </div> 
    
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="rush.html">TKE</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="rush.html">Rush</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <!-- li>
                        <a href="charity.html">Charity</a>
                    </li-->
                    <li>
                        <a href="roster.html">Roster</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="forum.html">Forum</a>
                    </li>
                </ul>
            </div>
        <!-- /.container -->
    </nav>

<div class="container">

 
<div class="content">
<div class="newsBox">

<!-- Contact form test -->	
	<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Us</strong>
                    </h2>
                    <hr>
                    <p>Submit a mode of contact and a message.  We will get back to you ASAP.</p>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Username</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Password</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Scroll</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php

$fields = array('username','password','scroll');
$db = connectDB();

function connectDB() {
	//Step1
	try{
	$db = new PDO('mysql:host=52.73.15.164;dbname=Tke1','root','Sweetarts11');
	return $db;
	}
	catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
	}
	//Step2
 	$db_select = mysql_select_db("login",$db);
 	if (!$db_select) {
 	die("Database selection also failed miserably: " . mysql_error());
 	}
	//Step3
	$result = mysql_query("SELECT * FROM login", $db);
 	if (!$result) {
 	die("Database query failed: " . mysql_error());
 	}
}
$dbc = getUsers();
	
function getUsers($dbc){
	try{
		$query = $dbc->prepare("SELECT username, password, scroll FROM dbo.login");
		$query->execute();
		for ($i = 0; $row = $query->fetch(); $i++){
			$username = $row['username'];
			$password = $row['password'];
			$scroll = $row['scroll'];
		}
	}
	catch(Exception $e){echo "Oh well!";}
}
//Step5
mysql_close($dbc);
mysql_close($db);
?>

</div>

</div>

<div class="footer">
		<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Contact &copy; TKEFrostburg@gmail.com</p>
                </div>
            </div>
        </div>
</div><!-- end .footer -->
</div><!-- end .container -->
</body>
</html>