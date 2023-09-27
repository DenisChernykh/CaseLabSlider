<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<?php if (!empty($arResult['ITEMS'])): ?>

    <h3 class="blog__title">
        блог
    </h3>
    <div class="blog__slider swiper">
        <div class="swiper-wrapper">
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>

                <div class="swiper-slide blog__item">
                    <?php if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                        <img class="blog__item-img" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>">
                    <?php endif; ?>

                    <h4 class="blog__item-title">
                        <?= isset($arItem['NAME']) ? $arItem['NAME'] : '' ?>
                    </h4>

                    <p class="blog__item-text">
                        <?= isset($arItem['PREVIEW_TEXT']) ? $arItem['PREVIEW_TEXT'] : '' ?>
                    </p>
                    <?php if(!empty($arItem['PROPERTIES']['ATT_LINK']['DESCRIPTION']) && !empty($arItem['PROPERTIES']['ATT_LINK']['VALUE'])):?>
                        <a class="blog__item-link button" target=»_blank href="<?= $arItem['PROPERTIES']['ATT_LINK']['VALUE']?>">
                            <?=$arItem['PROPERTIES']['ATT_LINK']['DESCRIPTION']?>
                        </a>
                    <?php endif; ?>

                </div>
            <? endforeach; ?>
        </div>
        <div class="blog__button swiper-button-left">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/arrow-left.svg" alt="Переключение влево">
        </div>
        <div class="blog__button swiper-button-right">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/arrow-right.svg" alt="Переключение влево">
        </div>
    </div>
<?php endif; ?>
