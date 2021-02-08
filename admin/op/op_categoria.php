<?php
ini_set('default_charset','UTF-8');
require_once'../../include/config.php';
require_once'../../include/crud.php';

$id =  $_POST['id'];
$acao = $_POST['acao'];
$txt_categoria = $_POST["txt_categoria"];
$txt_ativo = $_POST["txt_ativo"];

//echo "$id - $acao";
$dados = array(
    "categoria" => $txt_categoria,
    "ativo_categoria" => $txt_ativo
);

#VERIFICA OPERACAO
$op = false;
$url_sucesso = URL_ADMIN . "index.php?link=2";
$url_erro = URL_ADMIN . "index.php?link=3";
if($acao =="Cadastrar")
    $op = $inserir = inserir("categoria",$dados);
else if($acao == "Alterar")
    $op = alterar("categoria", $dados, "id_categoria = $id");
else if($acao == "Excluir")
    $op = deletar("categoria", "id_categoria = $id");

if($op)
    print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url_sucesso';
    <script type='text/javascript'>alert('Operação realizada com sucesso.') </script>";
else
    print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url_erro';
    <script type='text/javascript'>alert('Operação não foi realizada.') </script>";
