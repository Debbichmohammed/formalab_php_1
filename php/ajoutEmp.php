<?php
/*echo "bonjour";

$a=2 ;
$b=5;
$result=1;
for ( $i = 0 ; $i<$b ; $i++ ) 
{
    $result=$result*$a;
}
echo "<br>";
echo "$result" ;
if ($result % 2 ==1){
    echo 'impaire';
}
elseif ($result % 2 ==0){
    echo 'paire';
}*/

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$matricule=$_POST['matricule'];
echo "Je m'appelle $prenom $nom j'ai $matricule";

?>
    