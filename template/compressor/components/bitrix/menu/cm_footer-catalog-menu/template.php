<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<?
//echo '<pre>';
//echo print_r($arResult);
//echo '</pre>';
?>
<ul class="footer__catalog-menu">
		<?
		foreach($arResult as $arItem):
			?>

				<li class="<?if ($arItem["SELECTED"]):?>selected<?endif?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>

	<?endforeach?>

</ul>

<?endif?>
