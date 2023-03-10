<?php
    //secoes e cookies.

    //fazendo um cookie
    /*
    session_start();
    setcookie('nome', 'joao', time() + (60*60*24), '/');

    echo $_COOKIE['nome'];
*/

//o sinal negativo destroi o cookie.
session_start();
setcookie('nome', 'joao', time() - (60*60*24), '/');

echo $_COOKIE['nome'];
?>