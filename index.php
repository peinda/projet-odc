<html>
	<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="accueil.css">
        <link href="//db.onlinewebfonts.com/c/05289e866fe7e1e99d27a7a31f8d3b66?family=Trattatello" rel="stylesheet" type="text/css"/>
        <title>Accueil</title>
        <h1><u>EXERCICES et APPLICATIONS PHP SONATEL ACADEMY</u></h1>
    </head>
<body>
<div class="exo">
    
		  <a href="?recup=exo1">Exercice1</a>
          <a href="?recup=exo2">Exercice2</a>
          <a href="?recup=exo3">Exercice3</a>
          <a href="?recup=exo4">Exercice4</a>
          <a href="?recup=exo5">Exercice5</a>
          <a href="?recup=appli1">Application1 </a>
          <a href="?recup=appli2">Application2 </a>
          <h4> Coding for better life</h4>
          </div>
<div >
    <?php 
 if (isset($_GET['recup'])) {
        $url = $_GET['recup'];
    if ($url == "exo1") {
        include("exercice1.php");
                }
            else{
                if ($url == "exo2") {
                    include("exercice2.php");
                }
                else{
                    if ($url == "exo3") {
                        include("exercice3.php");
                    }

                    else{
                        if ($url == "exo4") {
                            include("exercice4.php");
                        }

                        else{
                            if ($url == "exo5") {
                                include("exercice5.php");
                            }

                            else{
                                if ($url == "appli1") {
                                    include("application1.php");
                                }

                                else{
                                    if ($url == "appli2") {
                                        include("application2.php");
                                    }
                                }
                            }
                        }
                    }
                }
            }	
        }

    
    ?>

</div>

</body>
</html>