<link href="<?php echo base_url(); ?>css/layout.css" rel="stylesheet" type="text/css" />
		<!-- -->
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-responsive.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.css"/>
		
		<!-- Attach JavaScript files -->
		<script src="<?php echo base_url(); ?>js/jquery-1.7.2.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>js/jquery.orbit.js" type="text/javascript"></script>
	    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
	    <script type="text/javascript" src="<?php echo base_url(); ?>js/Merged-JS.js"></script>
	    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.layout.js"></script>
	    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>
	     <script type="text/javascript">

	var myLayout; // a var is required because this page utilizes: myLayout.allowOverflow() method

	$(document).ready(function () {
		myLayout = $('body').layout({
			// enable showOverflow on west-pane so popups will overlap north pane
			west__showOverflowOnHover: true

		//,	west__fxSettings_open: { easing: "easeOutBounce", duration: 750 }
		});
 	});

	</script>
	<style type="text/css">
	/**
	 *	Basic Layout Theme
	 * 
	 *	This theme uses the default layout class-names for all classes
	 *	Add any 'custom class-names', from options: paneClass, resizerClass, togglerClass
	 */

	.ui-layout-pane { /* all 'panes' */ 
		background: #FFF; 
		border: 1px solid #BBB; 
		padding: 10px; 
		overflow: auto;
	} 

	.ui-layout-resizer { /* all 'resizer-bars' */ 
		background: #DDD; 
	} 

	.ui-layout-toggler { /* all 'toggler-buttons' */ 
		background: #AAA; 
	} 


	</style>

		<title><?php echo $title; ?></title>