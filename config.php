<?php
    session_start(); //Abrindo a sessão em todas as páginas
    ob_start(); //Pra evitar problemas de redirecionamento do php
    header("Content-type: text/html; charset=utf-8");
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese'); //Deixar datas no formato brasileiro
    date_default_timezone_set('America/Sao_Paulo'); //Nossa fuso horário pra brasileiro 
    
    require('vendor/autoload.php'); //gerador de pdf
    
    $autoLoad = function($class){
        include('classes/'.$class.'.php');
    };
    spl_autoload_register($autoLoad);

    define('INCLUDE_PATH', 'http://localhost/Projetos/exemplo-email-pdf/'); 

    const host = 'localhost';
    const dbname = 'pdf';
    const user = 'root';
    const senha = '';

    
?>
