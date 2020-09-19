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

<section class="main-project__section section section--gray">
	<div class="main-project__title-box">
		<h3 class="main-project__title">
			<?=$arResult["FIELDS"]["NAME"]?>
		</h3>
		<span class="main-project__date ">
				<?=$arResult["DISPLAY_ACTIVE_FROM"]?>
		</span>
		<span class="main-project__subtitle">
			<p>
				<?=$arResult["PROPERTIES"]["SUB_TITLE"]["VALUE"];?>
			</p>
		</span>
	</div>
	<section class="main-project__article">
		<? $slider = $arResult["PROPERTIES"]["PROJECT_SLIDER"];?>
		<?php if ($slider["VALUE"]): ?>
			<div class="project-slider js-project-slider">
			<?php foreach ($slider["VALUE"] as $slide): ?>
				<a class="project-slide project-slider__project-slide" href="#">
					<img src="<?echo CFile::GetPath($slide)?>" alt="">
				</a>
			<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<span class="section-description main-project__section-description">
			<p>
				<?echo $arResult["FIELDS"]["DETAIL_TEXT"];?>
			</p>
		</span>
	</section>
</section>
