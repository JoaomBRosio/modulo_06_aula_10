<?php
/*
session_start();
if(isset($_SESSION['nome'])){
echo $_SESSION['nome'];
}
*/


//destruindo uma sessao
session_start();
$_SESSION['nome'] = 'jao';
session_destroy();
?>