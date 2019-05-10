<?php 

function themaKevin_bronnen(){
	wp_enqueue_script('kevin-scripts', get_theme_file_uri('/js/scriptKevin.js'), NULL, '1.0', true);
	wp_enqueue_style('style', get_stylesheet_uri());
	
}
	add_action(wp_enqueue_scripts, 'themaKevin_bronnen');
?>

<!-- Registeer menu's -->
<?php 
register_nav_menus(array(
'hoofd' => __('Hoofd menu'),
'footer' => __('Menu in footer'),
));