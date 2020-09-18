<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//echo '<pre>';
//echo print_r($arResult);
//echo '</pre>';

//delayed function must return a string
if(empty($arResult))

	return "";
	//$strReturn = '';

	$strReturn = '<div class="container">';
	$strReturn .= '<div class="breadcrumbs">';
	$strReturn .= '<span class="breadcrumbs__item">';
	$strReturn .= '<a href="/">Главная</a></span>';

	$itemSize = count($arResult);
	for($index = 0; $index < $itemSize; $index++)
	{
		$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

		if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
		{
			$strReturn .= '
				<i class="breadcrumbs__separator"></i>
				<span class="breadcrumbs__item" id="bx_breadcrumb_'.$index.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
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

	$strReturn .= '</div></div>';

return $strReturn;
