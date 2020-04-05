
<!DOCTYPE html>
<html>
<head>
<?php
        include ("exo4_fonction.php");
        ?>
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
    textarea{
        
        width:500px;
        height:200px;
        float: left;
    }
    input{
        
        width:10%;
        height:5%;
        float: right;
        margin-right: 50%;
        margin-top: 10px;
        background-color: skyblue;
    }
    </style>
    </head>
<body BGCOLOR="yellow" >
<h1> <u>EXERCICE 4 </u></h1>
<fieldset>
    <form action="" method="post">
        <textarea name="phras" id="phras" placeholder="saisissez une phrase">           
        </textarea><br><br>
        <input type="submit" name="valider">
</form>
</fieldset>

</body>
</html>
<?php
if(isset($_POST['valider'])){
    
    {
        $chaine=$_POST['phrase'];
        #fonction pour valider une phrase qui est la F1.
        if(phraseValide($chaine))
        {
            #fonction pour decouper un texte qui est la f2.
            $texte=decoupage($chaine);
            for($i=0; $i<count($texte); $i++){
                $texte1[]=eliminEspace($texte[$i]);
            }
            var_dump($texte1); 
            #fonction pour supprimer des espaces qui est la f3. 
            $chaine=eliminEspace($chaine);
            echo "<label>Le texte corrigé </label><br/>";
            echo '<textarea readonly id="case1">'.$chaine.'</textarea><br/>'; 
        }
        else{
            echo "Remplissez lee champ SVP";
            exit;
        }
    }   
?>

    
   
    
}
    ?>

