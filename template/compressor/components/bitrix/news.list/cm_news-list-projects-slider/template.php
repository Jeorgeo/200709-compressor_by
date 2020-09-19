<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?
//echo '<pre>';
//echo print_r($arResult);
//echo '</pre>';
?>

<div class="projects-slider js-projects-slider">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="slide-box">
		<article class="project slide-type02 projects-slider__project">
			<div class="slide-type02__aside">
				<figure class="slide-type02__logo">
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
				</figure>
				<span class="slide-type02__date">
					<span class="slide-type02__date-title">
						<?
							$arDateActive = explode(' ', $arItem["DISPLAY_ACTIVE_FROM"]);
						?>
						<? echo $arDateActive[0];?>
					</span>
					<? echo $arDateActive[1].' '.$arDateActive[2];?>
				</span>
			</div>
			<div class="slide-type02__bside">
				<span class="slide-type02__article">
					<h4 class="slide-type02__title">
						<?echo $arItem["NAME"]?>
						<p>
							<?=$arItem["PROPERTIES"]["SUB_TITLE"]["VALUE"];?>
						</p>
					</h4>
					<p>
						<?echo $arItem["PREVIEW_TEXT"];?>
					</p>
				</span>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="link-more slide-type02__link-more">
					Подробнее
				</a>
			</div>
		</article>
	</div>

<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
