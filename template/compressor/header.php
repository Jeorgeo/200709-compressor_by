<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lte IE 6]>
	<style type="text/css">

		#banner-overlay {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>images/overlay.png', sizingMethod = 'crop');
		}

		div.product-overlay {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>images/product-overlay.png', sizingMethod = 'crop');
		}

	</style>
	<![endif]-->
	<link rel="icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/lightbox/css/lightbox.css">
	<script src="https://kit.fontawesome.com/61af31009b.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/assets/js/maskedinput.js"></script>
	<?$APPLICATION->ShowHead();?>
	<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/jquery-migrate-3.3.1/jquery.min.js"></script>!-->
	<!--<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>!-->
	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
