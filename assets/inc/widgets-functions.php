<?php
function example_theme_support(){
    remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme','example_theme_support');

function zona_widget(){

/*widget assets backend*/

//widget 1
register_sidebar(array(
    'name'=> 'footer columna 1',
    'id'=>'footer_uno', //le damos id y nombre al footer
    'before_widget'=>'<div id="%1$s" class="col-12 col-md-4 t-footer">', //añadimos clases y container
    'after_widget'=>'</div>', //cerramos container
    'before_tittle'=>'<h2 class="titulo-menu-footer ">', //añadimos container para titulo
    'after_tittle'=>'</h2>'//cerramos los containers de titulo
));
//widget 1

//widget 2
register_sidebar(array(
    'name'=> 'footer columna 2',
    'id'=>'footer_dos', //le damos id y nombre al footer
    'before_widget'=>'<div id="%1$s" class="col-12 col-md-4 t-footer">', //añadimos clases y container
    'after_widget'=>'</div>', //cerramos container
    'before_tittle'=>'<h2 class="titulo-menu-footer">', //añadimos container para titulo
    'after_tittle'=>'</h2>'//cerramos los containers de titulo
));
//widget 2

//widget 3
register_sidebar(array(
    'name'=> 'footer columna 3',
    'id'=>'footer_tres', //le damos id y nombre al footer
    'before_widget'=>'<div id="%1$s" class="col-12 col-md-4 t-footer">', //añadimos clases y container
    'after_widget'=>'</div>', //cerramos container
    'before_tittle'=>'<h2 class="titulo-menu-footer">', //añadimos container para titulo
    'after_tittle'=>'</h2>'//cerramos los containers de titulo
));
//widget 3
}
add_action ('widgets_init','zona_widget');
/*widget assets*/