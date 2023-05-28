<?php
function comercio_framework(){
    
    
    
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', 'all');
    wp_register_style('estilos', get_template_directory_uri() . '/assets/librerias/css/estilos.css', 'all');
    wp_register_style('fuente', '<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Lora&display=swap" rel="stylesheet">', 'all');

    


    wp_enqueue_style('bootstrap');
    wp_enqueue_style('estilos');
    wp_enqueue_style('fuente');
    
    
}


add_action('wp_enqueue_scripts', 'comercio_framework');


/*assets styles*/