<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage agriflex
 * @since agriflex 1.0
 */
 
  GLOBAL $options,$googlemap;
  GLOBAL $isresearch, $isextension, $iscollege, $istvmdl;
  GLOBAL $isextensiononly, $isresearchonly, $iscollegeonly, $istvmdlonly, $isfazd;
  GLOBAL $isextension4h, $isextensioncounty, $isextensioncountytce, $isextensionmg, $isextensionmn, $isextensionsg;
  
?>

<!DOCTYPE html>
<!--[if lt IE 7]>
<html id="ie6" class="no-js ie6 oldie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="no-js ie7 oldie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="no-js ie8 oldie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>" />

  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Print the <title> tag based on what is being viewed.
    We filter the output of wp_title() a bit - see
    agriflex_filter_wp_title() in functions.php.
    -->
  <title>
    <?php wp_title( '|', true, 'right' ); ?>
  </title>

  <link rel="profile" href="http://gmpg.org/xfn/11" />

  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=100" />

  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/iefix.css?2" />
  <![endif]-->

  <link rel="shortcut icon" href="http://agrilifecdn.tamu.edu/wp-content/themes/agrilife-2.0/favicon.ico" type="image/ico" />

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php agriflex_return_map; ?>

  <!-- We add some JavaScript to pages with the comment form
  to support sites with threaded comments (when in use). -->
  <?php agriflex_threaded_comments(); ?>

  <!--Always have wp_head() just before the closing </head>
  tag of your theme, or you will break many plugins, which
  generally use this hook to add elements to <head> such
  as styles, scripts, and meta tags. -->
  <?php wp_head(); ?>

  <!-- Hook up the FlexSlider and FitVids-->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/flex-bootstrap.js"></script>

</head>

<body <?php body_class(); ?>>

<!-- Conditional Agency navigation -->
<?php get_template_part( 'nav', 'agency' ); ?>

<?php if($iscollegeonly) college_top_level_section() ?>
	
<div id="wrapper" class="hfeed">
  <?php agriflex_show_header(); ?>
  <div class='menu-button'>Menu</div>
  <!-- Tabbed menu -->
  <?php get_template_part( 'nav', 'primary' ); ?>
  <div id="content-wrap">		
          <div class="wrap">	
