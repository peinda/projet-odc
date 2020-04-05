    <?php
    //si la phrase est valide
    function phraseValide($chaine){
    if (preg_match  ("/^(\s)*[A-Z].+[.!?](\s)*$/" ,$chaine)) {
            
            return true;
        }else {
            return false;
        }
        
    }

//F2 decoupage texte en phrase
function decoupage($chaine){
    $texte=preg_split("/(?<=[.!?])\s*(?=[a-z])/i", $chaine);
    echo '<pre>';
    echo'</pre>';
    return $texte;
   }


 //F3 Elimination d'espace
 
 function eliminEspace($chaine){
    $chaine=preg_replace('/\s\s+/', '',$chaine);
    $chaine=preg_replace('/^\s+/', '',$chaine);
    $chaine=preg_replace('/\s+$/', '',$chaine);
            return $chaine;

}



    ?> 
   