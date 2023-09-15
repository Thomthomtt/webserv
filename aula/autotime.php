<?php
include_once('index.php')
?>
<?php
$_data = $_POST["data"];
$_hora = $_POST["hora"];

switch ($_data){
	case 1 :
		echo("Domingo");
	break;
	case 2 :
		echo("Segunda");
	break;
	case 3 :
		echo("Terça");
	break;
	case 4 :
		echo("Quarta");
	break;
	case 5 :
		echo("Quinta");
	break;
	case 6 :
		echo("Sexta");
	break;
	case 7 :
		echo("Sábado");
	break;
		
if ($_date<1 or $_date>7){
	echo("Erro");
}
}
if ($_hora>=0 && $_hora<=6){
	echo("Boa Madrugada!");
} elseif ($_hora>=6 && $_hora<12){
	echo ("Bom Dia!");
} elseif ($_hora>=12 && $_hora<18){
	echo ("Boa Tarde!");
} elseif ($_hora>=18 && $_hora<24){
        echo ("Boa Noite!");
}
?>
