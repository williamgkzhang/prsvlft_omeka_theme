<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php if ( $description = option('description')): ?>
		 <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->

    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>


    <!-- Stylesheets -->
    <?php
    queue_css_url('//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800');
    queue_css_url('//fonts.googleapis.com/css?family=Lato:400,300,400italic,700,300italic');
    queue_css_file('all');
    echo head_css();

    //echo theme_header_background();
	 /*
	  */
    ?>
    <!-- JavaScripts -->
    <?php 
    queue_js_file('all');
    echo head_js(); 
    ?>
</head>
<body class="home">
<?php //echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>

    <?php //fire_plugin_hook('public_body', array('view'=>$this)); ?>

        <header id="header">
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
	 			<?php include 'theme_header.php' ?>
        </header>
            
			<?php /*
        <div class="menu-button">Menu</div>
            
        <div id="wrap">
            <nav id="primary-nav">
                <?php echo public_nav_main(array('role' => 'navigation')); ?>
                <div id="search-wrap">
                    <h2>Search</h2>
                    <?php echo search_form(array('show_advanced' => true)); ?>
                </div>
            </nav>
            <div id="content">
                <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
			 */?>
