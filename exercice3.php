 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <script src="main.js"></script>
</head>
<body BGCOLOR="white" >
<h1> <u>EXERCICE 3 </u></h1>

<fieldset>
<center>
    <form action="" method="post">
    <input placeholder="saisir des mots" type="texte" name="m" size="12">
<br> <br>

<input type="submit" name="valider">
    </form>
</body>

</html>
<?php
if(isset($_POST['valider'])){
    $chaine=$_POST['m'];
    $i;
    $mot=preg_split("/[\s,]+/",$chaine);
    
    var_dump($mot);

    for ($i=0; $i < count($mot); $i++) { 
        if(preg_match ('/m|M/',$mot[$i])){
            echo $mot[$i]." <br>";
    }
    }

    }
   ?>
   </center>
   </fieldset>