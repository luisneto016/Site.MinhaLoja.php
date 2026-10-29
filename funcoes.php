<?php
 
date_default_timezone_set('America/Sao_Paulo');
 
function e($texto) {
    if (is_null($texto)) {
        return '';
    }
    return htmlspecialchars($texto);
}
 
function dinheiro($valor) {
    if (empty($valor) || !is_numeric($valor)) {
        return 'R$ 0,00';
    }
    
    return 'R$ ' . number_format((float)$valor, 2, ',', '.');
}
 
function data_br($data) {
    $partes = explode('-', $data);
    return $partes[2] . '/' . $partes[1] . '/' . $partes[0];
}