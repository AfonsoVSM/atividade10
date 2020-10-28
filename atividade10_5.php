<php
     $pessoa['nome']= 'Maria da silva';
     $pessoa['rua']= 'Sao joaoa';
     $pessoa['bairro']= 'bairro lindo da cidade';
     $pessoa['cidade']= 'uma cidade';
     
     foreach ($pessoa as $dados){
     echo $dados;
     echo '<br>';
     }
?>