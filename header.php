<html>
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">  
    <title>smearalloverme</title>
    <link href="<?php echo get_bloginfo('template_directory'); ?>/mainstyle.css" rel="stylesheet">
    <?php wp_head();?>
</head> 
<body>
<div id="full" class="fullview">
<div class= "header">
    <div class= "header_content">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("TopNavBar") ) : ?>
        <?php endif;?>
        <div class="company_name_box">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>">
                <h1><?php echo get_bloginfo( 'name' ); ?></h1>
            </a>
        </div>
    </div>            
</div>

123


