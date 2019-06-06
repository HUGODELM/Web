//index admin
<?php
session_start();
include ('./lib/php/pgConnect.php');
include ('./lib/php/autoload.php');
$cnx = Connexion::getInstance($dsn,$user,$pass);
//var_dump($cnx);


?>
<!doctype html>
<html>
	<head>
		<!--<link rel="icon" href="./images/onglet.png" />-->
		<meta charset="UTF-8">
		<title> ALICE COOPER CONCERT </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./lib/js/fonctionJqueryDA.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./lib/js/jquery.editable.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="./lib/css/style.css" />
	</head>
	<body>
      <div class="container">
		<?php
				if(file_exists('./pages/header.php'))
				{
					include ('./pages/header.php');
				}
				else
				{
					echo 'HEADEEEEEEEEEEEEEEEEEEEEEEEEER';
				}
			?>
    </div>
	    <section class="contenu">
		    <nav class="menu">
		      <?php
		      if(file_exists('./lib/php/a_menu.php'))
		      {
		        include ('./lib/php/a_menu.php');
		      }
		      else
		      {
		        echo 'menu non implémenter';
		      }
		      ?>
		    </nav>
	    <section>
        <div class="container" id="main">
            <?php
            if ($_SESSION['page']=='index.php') {
                $_SESSION['page'] = 'accueil.php';
            }
            if (isset($_GET['page'])) {
                $_SESSION['page'] = $_GET['page'];
            }
							print $_SESSION['page'];
            $path = "./pages/" . $_SESSION['page'];
            if (file_exists($path)) {
                include ($path);
            } else {
                include ('page404.php');
            }
            ?>
        </div>
    </section>
      <div class="footer" class="container">
          <?php
          if(file_exists('./pages/footer.php'))
          {
            include ('./pages/footer.php');
          }
          else
          {
            echo 'FOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOTER';
          }
          ?>
      </div>
  </body>
</html>
