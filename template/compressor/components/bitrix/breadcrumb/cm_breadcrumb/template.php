<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult)) {

	return "";
	$strReturn = '';

} else {

	$strReturn = '<div class="breadcrumbs">';
	$strReturn .= '<span class="breadcrumbs__item">';
	$strReturn .= '<a href="/">Главная</a></span>';
	$strReturn .= '<i class="breadcrumbs__separator"></i>';

	$itemSize = count($arResult);
	for($index = 0; $index < $itemSize; $index++)
	{
		$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
		$arrowActive = ($index > 0? '<i class="breadcrumbs__separator"></i>' : '');

		if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
		{
			$strReturn .= '
				<span class="breadcrumbs__item" id="bx_breadcrumb_'.$index.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					'.$arrow.'
					<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item">
						<span itemprop="name">'.$title.'</span>
					</a>
				</span>';
		}
		else
		{
			$strReturn .= '
				<i class="breadcrumbs__separator breadcrumbs__separator--active"></i>
				<span class="breadcrumbs__item breadcrumbs__item--active">
					<span>'.$title.'</span>
				</span>';
		}
	}

	$strReturn .= '</div>';
}




return $strReturn;
