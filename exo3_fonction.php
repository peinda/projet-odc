
<?php
//1_si un caractere est miniscule
function is_lower($caractere){
            return ($caractere>='a' && $caractere<='z');
        }

//2_si un caractere est majuscule
 function is_upper ($caractere){
        return ($caractere>='A' && $caractere<='Z');
    }

//3_si un caractere est un entier
function is_entier ($char){
    return($char>='0' && $char<='9');
}
//4_la taille d'un tableau numerique ou d'une chaine de caractere  

function my_strlen($char){

    $i=0;
    while(!empty($char[$i])){
    
    $i++;
}
return $i;
}

//5_si un mot est valide

function is_valide ($caractere){
    for ($i=0; $i<(my_strlen($caractere)); $i++) { 
if(!(is_lower($caractere)[$i])|| !is_upper($caractere)[$i]){

    return false;
}
}
return true;
}
//6_si un nombre est un entier positif ou pas
function is_number($nbr){
    for ($i=0; $i < my_strlen($nbr); $i++) { 
        if (!(is_entier($nbr[$i]))) {
            return false;
        }
    }
    return ($nbr>0); 
} 
//cherche un caractére dans une chaine


    function is_char_in_string($char,$mot){
        for ($i=0; $i < my_strlen($mot); $i++) { 
            if ($mot[$i]==$char) {
                return true;
            }
        }
        return false;
    } 
        //compte le nombre d'un caratére dans un mot et affiche le nombre de mot
    
    function count_char_in_string($char,$mot){
        $n=0;
        for ($i=0; $i < my_strlen($mot); $i++) { 
            if ($mot[$i]==$char) {
                $n++; 
            }
        }
        return $n;
    } 

?> 