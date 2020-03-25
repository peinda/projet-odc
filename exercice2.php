<?php
  $calendrier=array(
      '1'=>["Janvier","January"],
      '2'=>["Février","february"],
      '3'=>["Mars","March"],
      '4'=>["Avril","April"],
      '5'=>["Mai","Mai"],
      '6'=>["Juin","June"],
      '7'=>["Juillet","July"],
      '8'=>["Août","August"],
      '9'=>["Septembre","September"],
      '10'=>["Octobre","October"],
      '11'=>["Novembre","november"],
      '12'=>["Décembre","December"],
  );
    
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <script src="main.js"></script></head>
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
<fieldset>
<body BGCOLOR="gray" >
    <center>
<h1><u>EXERCICE 2 </u></h1>
</center>

<fieldset>
    <form action="exercice2.php" method="POST">
        <select name="choix">
        <option value='francais' >Français</option>
        <option value='anglais'>Anglais</option>
        </select>
        <input type="submit" name="valider">  
    </form>


</fieldset>
</body>
</html>
<?php
if(isset($_POST['valider'])){
    if($_POST['choix']=="francais"){
                echo"<center><p><h1>Les mois De L'année</h1></p></center>";
            echo"<table bgcolor=red>";
            for ($i=1; $i <=10 ; $i=$i+3) {
                echo"<tr>";
                for ($j=$i; $j <=$i+2; $j++) { 
                    echo "<td bgcolor=blue>".$j."</td><td>".$calendrier[$j][0]."</td>";
                }
                echo"</tr>";
            }
            echo"</table>";
    }
    if($_POST['choix']=="anglais"){
            echo"<center><p><h1>The Months of the year</h1></p></center>";
            echo"<table bgcolor=blue>";
            for ($i=1; $i <=10 ; $i=$i+3) {
                echo"<tr>";
                for ($j=$i; $j <=$i+2; $j++) { 
                    echo "<td bgcolor=red>".$j."</td><td>".$calendrier[$j][1]."</td>";
                }
                echo"</tr>";
            }
            echo"</table>";     
    }
}

?>


</fieldset>