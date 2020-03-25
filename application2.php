<?php
    $col=array(
        'Bleu'=>'blue',
        'Rouge'=>'red',
        'Noir'=>'black',
        'Jaune'=>'yellow',
        'Vert'=>'green',
        'orange'=>'orange',
        'chartreuse'=>'charteuse',
        'aqua'=>'aqua',
        'brown'=>'brown'
        );

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="page.css">
        <link href="//db.onlinewebfonts.com/c/05289e866fe7e1e99d27a7a31f8d3b66?family=Trattatello" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <div id="form"> 
    <form method="POST">
        <div class="sonatel">SONATEL ACADÉMIE</div>
        <div class="text">Taille de la matrice carrée</div>
        <div class="taille">  
            <div class="icone"><img src="icone1.png"/></div>
            <input type="text" id="t" name="t"/>
        </div>
        <div class="text">Select C1 </div>
        <div class="c"> 
            <div class="icone1"><img src="icone2_3.png"/></div>
            <select class="c1" name="c1">
            <?php foreach ($col as $key => $value) {
              echo '<option value="'.$value.'">'.$key.'</option>';
            }?>
            </select>
        </div>
        <div class="text">Select C2 </div>
        <div class="c"> 
            <div class="icone2" ><img src="icone2_3.png"/></div>
            <select class="c2" name="c2" >
            <?php foreach ($col as $key => $value) {
              echo '<option value="'.$value.'">'.$key.'</option>';
            }?>
            </select>
        </div>
        <div class="text">Select C3 </div>
        <div class="c"> 
            <div class="icone3" ><img src="icone2_3.png"/></div>
            <select class="c3" name="c3" >
            <?php foreach ($col as $key => $value) {
              echo '<option value="'.$value.'">'.$key.'</option>';
            }?>
            </select>
        </div>             
        <div class="annul"><input type="submit" name="Annuler" value="Annuler"/></div>
        <div class="dessin"><input type="submit" name="Dessiner" value="Dessiner"/></div>
    </form>

    <table style="width:300px; height:300px; margin-top:70%; margin-left:28%;" >

    <?php     
if (isset($_POST['Dessiner'])) {
    $T=$_POST['t'];
    $c1=$_POST['c1'];
    $c2=$_POST['c2'];
    $c3=$_POST['c3'];

            if(!preg_match ('/^[0-9]+$/',$T)){
            echo 'ecrivez une bonne valeur';
            }
        else {
        if($c1==$c2 && $c3==$c1){
            }
            else {                
                for($i=0; $i<$T; $i++){
                    echo'<tr>';
                    for($j=0; $j<$T; $j++){
                            if($i==$j || $i+$j==$T-1 || ($j>$i and $i+$j<$T)){

                                
                                echo"<td style='background-color:$c1;'></td>";
                            }
                            else {
                                if ($i>$j and $i+$j>=$T) {
                                    echo"<td style='background-color:$c2;'></td>";
                                }
                           
                            
                            else{
                                echo"<td style='background-color:$c3;'></td>";
                            }

                        }
                        }
                    }
                    echo'</tr>';
                }
            }
        } 
        
    
    ?>
    </table>
</div>
</body>
</html>