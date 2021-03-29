<?php
//**** initialisatie
$_output= "<h1> Verschillen tussen Gregoriaanse - en Juliaanse - calender</h1>
<p>Tussen de 1000 en 3000</p><br>";

//*** verwerking

For ($_jaar = 1000; $_jaar < 3000; $_jaar++)
{
  $_febGreg = cal_days_in_month(CAL_GREGORIAN,2,$_jaar);
  $_febJul = cal_days_in_month(CAL_JULIAN,2,$_jaar);
  
  if ($_febGreg != $_febJul)
  {
    $_output.="$_jaar ---> Gregorian = $_febGreg -- Julian = $_febJul<br>";
  }
}
$_output.="<br>";

//*******output
echo $_output;
?>