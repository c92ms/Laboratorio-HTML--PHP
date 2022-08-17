<?php

  extract($_REQUEST);

  $promParciales=(($parcial1+$parcial2+$parcial3)/3);
  $porcParciales=$promParciales*0.35;
  $porcExamen=$examenFinal*0.35;
  $porcTrabajo=$trabajoFinal*0.30;
  $notaFinal=$porcParciales+$porcExamen+$porcTrabajo;

  if($notaFinal > 2.99){

    print_r("La Nota Final es: $notaFinal <br><br> 'Aprobo'." );


  }
  else{

    print_r("La Nota Final es: $notaFinal <br><br> 'No Aprobo'.");

  }
  

  print_r("<br><br><a href='index.html'> Regresar</a>");

?>