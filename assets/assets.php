<?php

add_post_type_support('page', 'excerpt');

//llamado a css
include get_template_directory() . '/assets/inc/css-functions.php';

//llamado a js
include get_template_directory() . '/assets/inc/js-functions.php';

//llamado a widgets
include get_template_directory() . '/assets/inc/widgets-functions.php';

//llamado a los modulos
include get_template_directory() . '/assets/inc/modulos-functions.php';

//llamado a woocommerce
include get_template_directory() . '/assets/inc/woocommerce-functions.php';

?>