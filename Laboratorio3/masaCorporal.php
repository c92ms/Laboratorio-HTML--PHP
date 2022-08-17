<?php

  extract($_REQUEST);

  $imc=$peso/($estatura*$estatura);

  if($imc<18.5){

    print_r("El Paciente $paciente tiene un IMC de $imc y se encuentra por debajo del peso " );

  }
  if ($imc>=18.5 && $imc<=24.9){
    print_r("El Paciente $paciente tiene un IMC de $imc y se encuentra saludable " );
    

  }
  if ($imc>=25 && $imc<=29.9){
    print_r("El Paciente $paciente tiene un IMC de $imc y se encuentra con sobrepeso" );

  }
  if ($imc>=30 && $imc<=39.9){
    print_r("El Paciente $paciente tiene un IMC de $imc y se encuentra obeso " );

  }
  if ($imc>=40){
    print_r("El Paciente $paciente tiene un IMC de $imc y se encuentra con obesidad morbida " );

  }



  print_r("<br><br><a href='index.html'> Regresar</a>");

?>