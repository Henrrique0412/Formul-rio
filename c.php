<?php
session_start();
$dado = $_POST;
	$_SESSION['dado'] = $dado;
	
	$_SESSION['dado']['p'] = rand(1,999);

	$arr=["reque", "dt", "natural", "filiacao", "curso", "periodo", "turno", "telefone", "email"];

	foreach ($arr as $val) {
		if(empty($_POST[$val])){
			flash_msg("O campo {$val} é obrigatorio!");
			return;
		}

		$_SESSION['dado'][$val] = $_POST[$val];
	}

	if(!isset($_POST['alternativas']) || empty($_POST['alternativas'])){
		flash_msg("Assinale uma alternativa");		
		exit();
	}

	$_SESSION['dado']['alternativas'] = $_POST['alternativas'];

	$arr2 = ["documento", "declara", "diploma", "seg_cham", "tranc_disc", "valida", "outros" ];
	foreach ($arr2 as $val) {
		if($_POST["alternativas"] == $val){
			if(empty($_POST["especi"])){
				flash_msg("Para a {$val} deve se preencher o campo.");
				exit();
			}
		}
	}

	$_SESSION['dado']['especi'] = $_POST['especi'];

	$arr3 = ["seg_cham", "colacaograuesp", "prazo_mat",];
	foreach ($arr3 as $val) {
		if($_POST["alternativas"] == $val){
			if(empty($_POST["justi"])){
				flash_msg("Para a {$val} deve se preencher o campo.");
				exit();
			}
		}
	}

	$_SESSION['dado']['justi'] = $_POST['justi'];

	$ass = ["ass", "ass2", "ass3", "ass4"];
	foreach ($ass as $val) {
		if(empty($_POST["ass"]) || empty($_POST["ass2"]) || empty($_POST["ass3"]) || empty($_POST["ass4"])){
			flash_msg("Todas as assinaturas tem que estar preenchidas!");
		}

		$_SESSION['dado'][$val] = $_POST[$val];
	}

	if(!isset($_POST["arm"])){
		flash_msg("Assinale VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS)");		
		exit();
	}

	if($_POST["arm"] == "s"){
		if(empty($_POST["coae"])){
			flash_msg("Insira a(s) chave(s)");		
			exit();
		}
		$_SESSION['dado']['coae'] = $_POST['coae'];
	}

	$_SESSION['dado']['arm'] = $_POST['arm'];

	if(!isset($_POST["bibliot"])){
		flash_msg("Assinale VISTO (BIBLIOTECA)");		
		exit();
	}

	if($_POST["bibliot"] == "s"){
		if(empty($_POST["bibli"])){
			flash_msg("Insira o(s) livro(s)");		
			exit();
		}
		$_SESSION['dado']['bibli'] = $_POST['bibli'];
	}

	$_SESSION['dado']['bibliot'] = $_POST['bibliot'];



	function flash_msg($aviso, $redirect = "index.php"){
		$_SESSION['aviso'] = "<div style='color: black; margin-top: 15px; margin-left: 30px'>{$aviso}</div>";
		header("location: {$redirect}");
	}

	header("location: d.html");


