<?php

  extract($_REQUEST);

  $comisionCantAutos=$cantidad*50000;
  $comisionTotAutos=$precio*0.05;

  $sueldoTotal=737000+$comisionCantAutos+$comisionTotAutos;

  

    print_r("El Vendedor $vendedor obtuvo un sueldo total de: $sueldoTotal " );


  

  print_r("<br><br><a href='index.html'> Regresar</a>");

?>