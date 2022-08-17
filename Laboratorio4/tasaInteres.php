<?php

  extract($_REQUEST);

  $tasa=$interes/100;

  $cuotaFija = ($monto * ($tasa * pow ((1+$tasa), $plazo ))) / (pow((1+$tasa), $plazo)-1);
  
  
    print_r("la cuota Fija a Pagar es: $cuotaFija  <br><br>" );

    print_r("A continuacion la Tabla de amortizacion del Credito: <br><br> " );

echo "Cedula : $cedula <br>";
echo "Cliente: $cliente <br>";



echo "<table>";

echo "<tr>";
echo "  <th> No. Cuota  </th>";
echo "  <th> Saldo Anterior </th>";
echo "  <th> Valor de Cuota Fija </th>";
echo "  <th> Abono a Interes </th>";
echo "  <th> Abono a Capital </th>";
echo "  <th> Nuevo Saldo </th>";
echo "</tr>";


  $i=1;


while ($i<=$plazo){

  $abonoInt= ($monto*$interes)/100;
  $abonoCap=$cuotaFija-$abonoInt;
  $nuevoSaldo=$monto-$abonoCap;
  

 
echo "<tr>";
echo "<td> " . $i . "</td>";
echo "<td> " . round ($monto,2) . "</td>";
echo "<td> " . round($cuotaFija,2) . "</td>";
echo "<td> " . round($abonoInt,2) . "</td>";
echo "<td> " . round($abonoCap,2) . "</td>";
echo "<td> " . round($nuevoSaldo,2) . "</td>";
echo "</tr>";

$monto=$nuevoSaldo;

$i++;

}




echo "</table>";



  print_r("<br><br><a href='index.html'> Regresar</a>");

?>