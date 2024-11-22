<?php

include 'db.php';

$nome = $_POST['nome'];
$obs = $_POST['obs'];
$tit = $_POST['tit'];
$aut = $_POST['aut'];
$res = $_POST['res'];

$query= "insert into cadastros(nome, obs, tit, aut, res) 
values('$nome', '$obs', '$tit', '$aut', '$res')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');