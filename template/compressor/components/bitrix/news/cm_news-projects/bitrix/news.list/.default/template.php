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
<section class="main-projects__section section section--gray">
		<h3 class="section-title">
			<?=$arResult["NAME"]?>
		</h3>
		<span class="section-description">
			<p>
				<?=$arResult["DESCRIPTION"]?>
			</p>
		</span>
		<div class="projects-list">
		<?if($arParams["DISPLAY_TOP_PAGER"]):?>
			<?=$arResult["NAV_STRING"]?><br />
		<?endif;?>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<article class="projects-slider__slide-type02 slide-type02 slide-type02--news" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="slide-type02__aside">
					<figure class="slide-type02__logo slide-type02__logo--news">
						<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
					</figure>
				</div>
				<div class="slide-type02__bside slide-type02__bside--news">
					<span class="slide-type02__article slide-type02__article--news">
						<div class="slide-type02__fly-box">
							<h4 class="slide-type02__title slide-type02__title--news">
								<?echo $arItem["NAME"]?>
							</h4>
							<span class="slide-type02__date slide-type02__date--news">
									<?echo $arItem["DISPLAY_ACTIVE_FROM"]?>
							</span>
						</div>
						<span class="slide-type02__title">
							<p>
								<?=$arItem["PROPERTIES"]["SUB_TITLE"]["VALUE"];?>
							</p>
						</span>
						<p>
							<?echo $arItem["PREVIEW_TEXT"];?>
						</p>
					</span>
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="link-more slide-type02__link-more slide-type02__link-more--news">
						Подробнее
					</a>
				</div>
			</article>
		<?endforeach;?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<br /><?=$arResult["NAV_STRING"]?>
		<?endif;?>
	</div>
