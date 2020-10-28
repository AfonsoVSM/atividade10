<php
     $core = array('vermelho','azul','verde', 'amarelo');
     echo $core[0];
     echo $core[1];
     echo $core[2];
     echo $core[3];
     
     $a = array('tesla',2000,3.0,'BMW','Fiat');
     echo $a[1];
     
     $a[1]=2020;
     echo $a[1];
     
     $a[]="Vila das aves";
     $a[]="AEDAH";
     foreach ($a as $item) {
            echo $item .'<br>';
     }
?>