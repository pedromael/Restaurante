<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


// PSR-4 Autoloader
spl_autoload_register(function ($className) {
    // Diretório base onde estão as classes
    $baseDir = __DIR__ . '/../classes/';

    // Converte o namespace da classe em caminho do sistema
    $file = $baseDir . str_replace('\\', '/', $className) . '.php';

    // Verifica se o arquivo existe antes de incluir
    if (file_exists($file)) {
        require $file;
    } else {
        die("A classe {$className} não foi encontrada em {$file}");
    }
});


session_start();

?>