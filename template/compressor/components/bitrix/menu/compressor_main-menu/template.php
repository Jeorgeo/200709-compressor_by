<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="main-menu main-menu_top">
		<?
		$previousLevel = 0;
		foreach($arResult as $arItem):
			?>

		<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
			<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
		<?endif?>

		<?if ($arItem["IS_PARENT"]):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="<?if ($arItem["SELECTED"]):?>parent main-menu__parent active<?else:?>parent main-menu__parent<?endif?>">
					<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a><i class="main-menu__btn-accordeon btn-accordeon active js-accordeon-btn"></i>
					<ul class="main-menu__has-childs has-childs">
			<?else:?>
				<li<?if ($arItem["SELECTED"]):?> class="parent main-menu__parent active"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
					<ul class="main-menu__has-childs has-childs">
			<?endif?>

		<?else:?>

			<?if ($arItem["PERMISSION"] > "D"):?>

				<li class="<?if ($arItem["SELECTED"]):?>parent main-menu__parent active<?else:?>parent main-menu__parent<?endif?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>

			<?else:?>

				<li class="<?if ($arItem["SELECTED"]):?>parent main-menu__parent active<?else:?>parent main-menu__parent <?endif?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>

			<?endif?>

		<?endif?>

		<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

	<?endforeach?>

	<?if ($previousLevel > 1)://close last item tags?>
		<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
	<?endif?>

</ul>
<?endif?>
