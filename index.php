<?php

require __DIR__ . '/vendor/autoload.php';

use mikehaertl\pdftk\Pdf;

$arquivos = [
    'A' => 'arquivos/doc1.pdf',
    'B' => 'arquivos/doc2.pdf',
    'C' => 'arquivos/doc3.pdf'
];

$pdf = new Pdf($arquivos);
foreach ($arquivos as $key => $item) {
    reset($arquivos);
    // PRIMEIRO EM DIANTE
    if ($key === key($arquivos) || $key !== end(array_keys($arquivos)))
        $pdf->cat(null, null, $key);

    // ULTIMO
    if ($key === end(array_keys($arquivos))) {
        $pdf->cat(null, null, $key)
            ->execute();
    }
}

$temp = $pdf->getTmpFile();
$content = file_get_contents( (string) $temp );

echo $temp->getFileName();
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="testes.pdf"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($content));
header('Accept-Ranges: bytes');
@readfile($temp->getFileName());