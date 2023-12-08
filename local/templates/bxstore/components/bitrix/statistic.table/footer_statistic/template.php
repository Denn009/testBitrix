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
$this->createFrame()->begin();
?>

<div class="footer-statistic">
	<div class="footer-statistic-item">
		<span>Всего посетителей: </span>
		<span><?echo $arResult["STATISTIC"]["TOTAL_GUESTS"]?></span>
	</div>
	<div class="footer-statistic-item">
		<span>Посетителей сегодня: </span>
		<span><?echo $arResult["STATISTIC"]["TODAY_GUESTS"]?></span>
	</div>
	<div class="footer-statistic-item">
		<span>Посетители онлайн: </span>
		<span><?echo $arResult["STATISTIC"]["ONLINE_GUESTS"]?></span>
	</div>	
</div>


