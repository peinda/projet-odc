
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>exo2</title>
    <script src="main.js"></script>

<style>
    form{
        margin-left:45%;
    }
    table{
        margin-left:30%;
        width:500px;
        height:150px;
        border-spacing:0px;
    }

    td{
        text-align:center;
        border:1px solid black; 
    }
    </style>
    </head>
<body BGCOLOR="yellow" >
<h1> <u>EXERCICE 4 </u></h1>
<fieldset>

    <form action="" method="post">
        <textarea name="phras" id="phras" placeholder="saisissez une phrase"></textarea><br><br>
        <input type="submit" name="valider">
</form>
</fieldset>

</body>
</html>
<?php
if(isset($_POST['valider'])){
    $chaine=$_POST['phras'];
    $phra=array();
    $caracter=preg_split("/[\n.!?]+/", "$chaine");
    foreach ($caracter as $key => $value) {
     if (strlen($value)<=200) {
            $phra[]=$value;
        }
    }
    foreach ($phra as $key => $value) {
        echo ('<td>'.$value.'</td>');
    }
    }
   ?>