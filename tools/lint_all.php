<?php

$root = realpath(__DIR__ . '/..');
if ($root === false) {
    die("Erro: não foi possível determinar o diretório raiz.\n");
}

// Iterador recursivo para percorrer todos os arquivos e subdiretórios
$it = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($root, RecursiveDirectoryIterator::SKIP_DOTS)
);

foreach ($it as $f) {
    if (!$f->isFile()) {
        continue; // ignora diretórios
    }

    if (strtolower($f->getExtension()) !== 'php') {
        continue; // ignora arquivos que não sejam PHP
    }

    $path = $f->getPathname();
    echo "---- {$path}\n";

    // Executa o lint PHP de forma segura
    $output = null;
    $returnVar = null;
    passthru('php -l ' . escapeshellarg($path), $returnVar);

    if ($returnVar !== 0) {
        echo "Erro de sintaxe detectado em: {$path}\n";
    }
}
echo "---- Fim da verificação de linting ----\n";
