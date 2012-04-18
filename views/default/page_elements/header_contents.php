<?php

	/**
	 * Elgg header contents
	 * This file holds the header output that a user will see
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2009
	 * @link http://elgg.org/
	 **/
	 
?>

<div id="page_container">
<div id="page_wrapper">

<div id="layout_header">
<?php 
	if(is_plugin_enabled("language_selector")){
		echo "<div id='language_selector'>"; 
		echo elgg_view("language_selector/default");
		echo "</div>";
	}
?>
<div id="wrapper_header">
	<!-- display the page title -->
	
	<h1><a href="<?php echo $vars['url']; ?>"><?php echo $vars['config']->sitename; ?></a></h1>
	
	<form id="searchform" action="<?php echo $vars['url']; ?>search/" method="get" onsubmit="if ($('#tag').val() =='<?php echo elgg_echo("search");?>') { return false; } if ($('#tag').val() =='') { return false; }">
		
			<input type="text" size="21" name="tag" id="tag" value="<?php echo get_input("tag", elgg_echo("search"));?>" onblur="if (this.value=='') { this.value='<?php echo elgg_echo("search");?>' }" onclick="if (this.value=='<?php echo elgg_echo("search");?>') { this.value='' }" class="search_input" />
			<input type="submit" value="<?php echo elgg_echo("Go");?>" class="search_submit_button" />
		
	</form>
	
</div><!-- /#wrapper_header -->
</div><!-- /#layout_header -->