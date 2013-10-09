<?php
function aduna($x)
{
$x=$x+2;
return $x;
}
function inmulteste($x)
{
$x=$x*2;
return $x;
}
function scade($x)
{
$x=$x-2;
return $x;
}
function imparte($x)
{
$x=$x/2;
return $x;
}
//aplicatia propriu-zisa
function aplicatie($functie,$x){
$nr=count($functie);
$i=0;
$raspuns=array();
while($nr!=0){
$raspuns[$i]=$functie[$i]($x);
$i++;
$nr--;
}
for($j=0;$j<$i;$j++)
	echo $raspuns[$j]."<br>";
}
//verificare pe array-uri cu lungime diferita
//am folosit array pentru colectie arbitrar de lunga
//raspunsul este tot un array,care mai apoi se afiseaza
$functie=array("aduna","inmulteste","scade","imparte");
$x=5;
$functie2=array("aduna","scade");
$x2=10;
aplicatie($functie,$x);
aplicatie($functie2,$x2);

?>
