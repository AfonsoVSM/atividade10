<?php

$pacientes = array (
    'joana'=>20,
    'rui'=>25,
    'ana'=>30
    );

echo 'Idade do paciente joana' . $pacientes['joana'] . 'anos.';

foreach ($pacientes as $nome =>$idade){
    echo 'Paciente ' .$nome . 'tem ' . $idade . 'anos.<br>';
    echo 'Paciente ' .$nome . 'tem ' . $idade . 'anos.<br>';
    $pacientes['Pedro']=24;
    $pacientes['Carla']=23;
?>