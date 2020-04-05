<html>
    <head>
        <?php
            include ("exo3_fonction.php");
        ?>
        <?php
            $formvalide=false;
            $nombre="";
            $msg="";
            $result="";
            $errors="";
            $mots="";
                if(isset($_POST['envoyer']))
                {
                    if(!empty($_POST['nombre'])){
                        if(!is_number($_POST['nombre']))
                        {
                            $msg= "veuillez saisir un nombre entier positif";
                        }
                        else
                        {   
                            $nombre=$_POST['nombre'];

                                for ($i=1; $i <= $nombre; $i++) 
                               { 
                                    if(!empty($_POST['nombre'.$i])){
                                        $mots[]=$_POST['nombre'.$i];
                                        
                                        var_dump($mots) ;
                                    } 
                               }
                               $j=0;
                               for ($i=0; $i< my_strlen($mots); $i++) {       
                                   # code...
                                   if( is_char_in_string('m',$mots[$i])){
                                       $j++;
                               }
                           }              
                            echo "il y'a $j mots comportant la lettre m";
                        
                            $formvalide=true;
                        }
                  }else{
                          $msg= "veuillez saisir un nombre ";
                  }
                }
                if($msg!=""){
                    echo $msg;
                }
             ?>
        <meta charset="utf-8" />
        <title>Exo3</title>
    </head>
    <style>
    #env{
        float: left;
        background-color: greenyellow;
        margin-left: 44%;
    }
    #an{
        float: right;
        background-color: red;
        margin-right: 44%;
    }

    </style>
    <body bgcolor="sky blue">
        <center>
            <fieldset>
        <h1><u>Exercice3</u></h1>
        <fieldset>
            <form action="" method ="POST">
                <label form="num1">Ecrivez le texte :</label><br>
                <input name="nombre" type="text" value="<?php echo $nombre;?>"/><br>
                <?php
                    if($formvalide)
                    {
                        for ($i=1; $i <= $nombre; $i++) 
                        { 
                ?>
                <?php echo "<label> Mot N°".$i."</label><br>";?>
                    <input type="text" name="nombre<?php echo $i;?>" value="<?php  
                   if (!empty($_POST['nombre'.$i])){echo $_POST['nombre'.$i];} 
                   
                   ?>"> 
                <br>
                <?php 
                if ($i==$nombre) {
            
     
                        }
                    }
                    }
                ?>
                <br><input type="submit" name="envoyer" id="env" value="envoyer" />
                <input type="submit" name="annuler" id="an" value="annuler" />

            </form>
        </center>
    <?php
    ?>
</fieldset>
    </body>
</html>
