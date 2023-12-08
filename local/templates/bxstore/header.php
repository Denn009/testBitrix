<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    use Bitrix\Main\Page\Asset;
    // Подключаем js
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.6.0.min.js");
    //Подключаем css
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-grid.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/style.css");

    $APPLICATION->ShowHead();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $APPLICATION->ShowTitle(); ?></title>
</head>
<body>

<?php
$APPLICATION->ShowPanel();
?>

<header>
	<div class="container">
		<div class="header">

			<div class="header-logo">
				<svg class="header-svg">
					<use xlink:href="#logo"></use>
				</svg>
			</div>

			<div class="header-wrapper">


				<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"main_menu",
						Array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(""),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "top",
							"USE_EXT" => "N"
						)
					);
				?>



				<?$APPLICATION->IncludeComponent("bitrix:search.title", "main_search", Array(
						"COMPONENT_TEMPLATE" => ".default",
							"NUM_CATEGORIES" => "1",	// Количество категорий поиска
							"TOP_COUNT" => "5",	// Количество результатов в каждой категории
							"ORDER" => "date",	// Сортировка результатов
							"USE_LANGUAGE_GUESS" => "Y",	// Включить автоопределение раскладки клавиатуры
							"CHECK_DATES" => "N",	// Искать только в активных по дате документах
							"SHOW_OTHERS" => "N",	// Показывать категорию "прочее"
							"PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
							"SHOW_INPUT" => "Y",	// Показывать форму ввода поискового запроса
							"INPUT_ID" => "title-search-input",	// ID строки ввода поискового запроса
							"CONTAINER_ID" => "title-search",	// ID контейнера, по ширине которого будут выводиться результаты
							"CATEGORY_0_TITLE" => "",	// Название категории
							"CATEGORY_0" => array(	// Ограничение области поиска
								0 => "iblock_Catalog",
							),
							"CATEGORY_0_iblock_Catalog" => array(	// Искать в информационных блоках типа "iblock_Catalog"
								0 => "1",
							)
						),
						false
				);?>


			</div>


			<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "basket_line", Array(

				),
				false
			);?>

			
		</div>	
	</div>
</header>







    
