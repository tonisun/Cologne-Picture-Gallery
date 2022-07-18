<?php

function render($path, array $data = []) {
    ob_start();
    extract($data);
    require $path;

    $content = ob_get_contents();
    ob_end_clean();

    require __DIR__ . '/../index.view.php';
}

/**
 * Converts special characters to HTML entities
 * 
 * @return string 
 */
function esc($html): string {
    return htmlspecialchars($html, ENT_QUOTES, 'UTF-8', true);
}