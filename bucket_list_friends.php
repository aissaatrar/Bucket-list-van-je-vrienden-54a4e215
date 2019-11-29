<?php
$aantalPersonen;
$arrayPersonen = array();
echo "Hoeveel vrienden zal ik vragen om hun droom? " . "\n";
$aantalPersonen = readline();
if (!is_numeric($aantalPersonen))
{
  echo $aantalPersonen . 'is geen geldig getal, probeer het opnieuw';
  exit();
}
for ($i=0; $i < $aantalPersonen; $i++)
{
  $persoon = array("Naam"=>'',"Droom"=>'');
  echo "Wat is jouw naam? " . "\n";
  $persoon['Naam'] = readline();
  echo "Wat is jouw droom? " . "\n";
  $persoon['Droom'] = readline();
  $arrayPersonen[$i] = $persoon;
}
for ($i=0; $i < $aantalPersonen; $i++)
{
  echo $arrayPersonen[$i]['Naam'] . ' heeft dit als droom: ' . $arrayPersonen[$i]['Droom'] . "\n";
}
 ?>
