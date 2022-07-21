<?php

function render($path, array $data = []) {
     
    ob_start();
    extract($data);
    
    // Data 4 Image.view
    require $path;

    $content = ob_get_contents(); 
    ob_end_clean();

    //Data 4 Main.view
    require __DIR__ .'/../../app/core/View/layouts/Main.view.php';
}

/**
 * Converts special characters to HTML entities
 * 
 * @return string 
 */
function esc($html): string {
    return htmlspecialchars($html, ENT_QUOTES, 'UTF-8', true);
}