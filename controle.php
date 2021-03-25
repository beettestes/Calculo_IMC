<?php
$sexo = $_POST['sexo'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];



if ($peso < 0) {
  echo "peso invalido";
}

elseif ($altura < 0) {
  echo "altura invalida";
}

else {

$imc = $peso / ($altura * $altura);
}



if ($sexo == "M") {

	if ($imc <= 16) {
		$oof = "Magreza grave";
		$oof2 = "https://media.discordapp.net/attachments/416694699773001728/823999647734693928/b879ea2f496829864efcdadd2fbf923f.png?width=530&height=670";
	}
	elseif ($imc <= 18) {
	    $oof = "Magreza moderada";
	    $oof2 ="https://media.discordapp.net/attachments/672536541481926664/824020016692723792/1616532070803.png?width=324&height=669";
	}
	elseif ($imc <= 20) {
	    $oof = "Magreza leve";
	    $oof2 ="https://media.discordapp.net/attachments/672536541481926664/824020321114914896/340.png?width=246&height=668";
	}
	elseif ($imc <= 25) {
	    $oof = "Peso normal";
	    $oof2 ="https://cdn.discordapp.com/attachments/416694699773001728/824020603362476032/d6mwl0m-ca65a3e0-1430-4695-8514-bb4422c4803e.png";
	}
	elseif ($imc <= 30) {
	    $oof = "Sobrepeso";
	    $oof2 ="https://media.discordapp.net/attachments/672536541481926664/824023463450509352/gRhyAxY-removebg-preview.png";
	}
	elseif ($imc <= 35) {
	    $oof = "Obesidade grau I";
	    $oof2 ="https://media.discordapp.net/attachments/416694699773001728/824023762407784518/2d2df4ebf56acaf7f5a299347e224aeb.png?width=488&height=671";
	}
	elseif ($imc <= 40) {
	    $oof = "Obesidade grau II (Severa)";
	    $oof2 ="https://media.discordapp.net/attachments/416694699773001728/824024125450092594/Mr_4-removebg-preview.png";
	}
	else{
		$oof = "Obesidade grau III (Morbida)";
		$oof2 ="https://media.discordapp.net/attachments/416694699773001728/824024494876000276/Machvise_Anime_Concept_Art-removebg-preview.png";
	}

}

else{

	if ($imc <= 15) {
		$oof = "Magreza grave";
		$oof2 ="https://media.discordapp.net/attachments/416694699773001728/824025369475547157/48238d75c2890e0da1af743cf116c1a8-removebg-preview.png";
	}
	elseif ($imc <= 17) {
	    $oof = "Magreza moderada";
	    $oof2 ="https://media.discordapp.net/attachments/416694699773001728/824025740986417172/dbcd2kn-8ada3d66-8fb9-46d0-abf2-2264425113b0.png";
	}
	elseif ($imc <= 19) {
	    $oof = "Magreza leve";
	    $oof2 ="https://media.discordapp.net/attachments/416694699773001728/824026002228510810/a99fa6af098552b0c76977afd8b27e1e.png?width=328&height=670";
	}
	elseif ($imc <= 24) {
	    $oof = "Peso normal";
	    $oof2 ="https://cdn.discordapp.com/attachments/672536541481926664/824027028932132884/11f26636c433821dfb2d7e93b9ade906.png";
	}
	elseif ($imc <= 29) {
	    $oof = "Sobrepeso";
	    $oof2 ="https://media.discordapp.net/attachments/672536541481926664/824027352937005098/362adcb2771e1f4ffd32f7186f72189a.png?width=306&height=669";
	}
	elseif ($imc <= 34) {
	    $oof = "Obesidade grau I";
	    $oof2 ="https://media.discordapp.net/attachments/672536541481926664/824027528938651708/Miss_Merry_Christmas_Anime_Concept_Art-removebg-preview.png";
	}
	elseif ($imc <= 39) {
	    $oof = "Obesidade grau II (Severa)";
	    $oof2 ="https://media.discordapp.net/attachments/672536541481926664/824027873185890304/latest.png";
	}
	else{
		$oof = "Obesidade grau III (Morbida)";
		$oof2 ="https://media.discordapp.net/attachments/672536541481926664/824028254708695040/latest.png";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Sua Situação</title>
<link rel="stylesheet" href="./controle.css">
</head>
<body>

<section class="resposta">
	<div class="container">
	<ul class="flex">
		<li>
		<h3>Considerando seu peso de:</h3> 
		<?php echo "<p> $peso kg </p>"; ?>

		<h3>E sua altura de:</h3>
		<?php echo "<p> $altura </p>"; ?>

		<h3>Seu IMC:</h3>
		<p><?php echo number_format($imc,1); ?></p>

		<h3>Situação:</h3>
		<?php echo "<p> $oof </p> ";?>

		<img class="tamanho" src="<?php echo $oof2;?>">
		</li>
	</ul>
	</div>
</section>

</body>
</html>