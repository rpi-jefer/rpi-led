<?php
$valor_estado = $_POST['valor_estado'];

if($valor_estado==1)
{
    exec('sudo python /var/www/proyecto/apaga.py');
}
else{
	exec('sudo python /var/www/proyecto/prende.py');
}
?>