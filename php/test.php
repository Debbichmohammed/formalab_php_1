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

$n=$_POST['nom'];
$p=$_POST['prenom'];
$age=$_POST['age'];
echo "Je m'appelle $p $n j'ai $age";

?>
    