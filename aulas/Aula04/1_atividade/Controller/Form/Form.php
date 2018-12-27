<?php
    
session_start();

$m = isset($_POST["model"])?$_POST["model"]:"Modelo não configurado";
if($m != "") {
    $_SESSION['modelo'] = $m;
}

$tipo = isset($_POST["tipo"])?$_POST["tipo"]:"Tipo não configurado";
if($tipo != "") {
    $_SESSION['tipo'] = $tipo;
}

$cor = isset($_POST["cores"])?$_POST["cores"]:"branco";
$_SESSION['cor'] = $cor;

$problema = isset($_POST["problema"])?$_POST["problema"]:"false";
$_SESSION['problema'] = $problema;

$helice = isset($_POST["helice"])?$_POST["helice"]:"false";
$_SESSION['helice'] = $helice;

$tomada = isset($_POST["tomada"])?$_POST["tomada"]:"false";
$_SESSION['tomada'] = $tomada;

$nivelV = isset($_POST["nivelVelocidade"])?$_POST["nivelVelocidade"]:"Atualmente é 0";
$_SESSION['nV'] = $nivelV;


//btn

$ligarV = isset($_POST["btnLigar"])?$_POST["btnLigar"]:false;

$desligarV = isset($_POST["btnDesligar"])?$_POST["btnDesligar"]:false;

$manutV = isset($_POST["btnManut"])?$_POST["btnManut"]:false;