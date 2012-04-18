<?php

    function theme_coldtrick_init() {
       // Replace the default index page
		//register_plugin_hook('index','system','custom_index_coldtrick');		
    }

    function custom_index_coldtrick() {
		if (!@include_once(dirname(__FILE__) . "/index.php")) return false;
		return true;
	}

	register_elgg_event_handler('init','system','theme_coldtrick_init');

?>