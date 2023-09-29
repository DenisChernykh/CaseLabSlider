<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!empty($arResult["ERROR_MESSAGE"])):
    ?>
    <div class="vote-note-box vote-note-error">
        <div class="vote-note-box-text"><?= ShowError($arResult["ERROR_MESSAGE"]) ?></div>
    </div>
<?
endif;

if (!empty($arResult["OK_MESSAGE"])):
    ?>
    <div class="vote-note-box vote-note-note">
        <div class="vote-note-box-text"><?= ShowNote($arResult["OK_MESSAGE"]) ?></div>
    </div>
<?
endif;

if (empty($arResult["VOTE"])):
    return false;
elseif (empty($arResult["QUESTIONS"])):
    return true;
endif;

?>

<div class="voting-form-box">
    <form id="form" action="<?= POST_FORM_ACTION_URI ?>" method="post" class="vote-form">
        <input type="hidden" name="vote" value="Y">
        <input type="hidden" name="PUBLIC_VOTE_ID" value="<?= $arResult["VOTE"]["ID"] ?>">
        <input type="hidden" name="VOTE_ID" value="<?= $arResult["VOTE"]["ID"] ?>">
        <?= bitrix_sessid_post() ?>



        <section class="vote-form">
            <div class="vote-form__container">
                <div class="question">
                    <div class="vote__slider swiper">
                        <div class="swiper-wrapper">
                            <?
                            $iCount = 0;
                            foreach ($arResult["QUESTIONS"] as $arQuestion):
                                $iCount++;

                                ?>
                                <div class="swiper-slide vote__item">
                                    <div data-swiper-parallax="-300" class="question__title" ><?= $arQuestion["QUESTION"] ?><? if ($arQuestion["REQUIRED"] == "Y") {
                                            echo "<span class='starrequired'>*</span>";
                                        } ?></div>
                                    <ul data-swiper-parallax="-100" data-swiper-parallax-duration="900" data-swiper-parallax-opacity="0"   class="question__list <?= ($iCount == 1 ? "vote-item-vote-first " : "") ?><?
                                    ?><?= ($iCount == count($arResult["QUESTIONS"]) ? "vote-item-vote-last " : "") ?><?
                                    ?><?= ($iCount % 2 == 1 ? "vote-item-vote-odd " : "vote-item-vote-even ") ?><?
                                    ?>"
                                    ">
                                    <?
                                    $iCountAnswers = 0;
                                    foreach ($arQuestion["ANSWERS"] as $arAnswer):
                                        $iCountAnswers++;
                                        ?>
                                        <li class="question__item <?= ($iCountAnswers == 1 ? "vote-item-vote-first " : "") ?><?
                                        ?><?= ($iCountAnswers == count($arQuestion["ANSWERS"]) ? "vote-item-vote-last " : "") ?><?
                                        ?><?= ($iCountAnswers % 2 == 1 ? "vote-item-vote-odd " : "vote-item-vote-even ") ?>">
                                            <?
                                            $value = (isset($_REQUEST['vote_radio_' . $arAnswer["QUESTION_ID"]]) &&
                                                $_REQUEST['vote_radio_' . $arAnswer["QUESTION_ID"]] == $arAnswer["ID"]) ? 'checked="checked"' : '';
                                            ?>
                                            <input class="radio" type="radio" <?= $value ?>
                                                   name="vote_radio_<?= $arAnswer["QUESTION_ID"] ?>" <?
                                                   ?>id="vote_radio_<?= $arAnswer["QUESTION_ID"] ?>_<?= $arAnswer["ID"] ?>"
                                                   <?
                                                   ?>value="<?= $arAnswer["ID"] ?>" <?= $arAnswer["~FIELD_PARAM"] ?>>
                                            <label for="vote_radio_<?= $arAnswer["QUESTION_ID"] ?>_<?= $arAnswer["ID"] ?>"><?= $arAnswer["MESSAGE"] ?></label>
                                        </li>


                                    <?
                                    endforeach
                                    ?>


                                    </ul>
                                    <?php if($iCount == count($arResult["QUESTIONS"])):?>
                                        <button type="button" class="modal__button " >Голосовать</button>

                                    <?php endif; ?>

                                </div>
                            <?
                            endforeach
                            ?>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="vote__button swiper-button-left">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/arrow-left.svg" alt="Переключение влево">
                        </div>
                        <div class="vote__button swiper-button-right">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/arrow-right.svg" alt="Переключение влево">
                        </div>
                        <div class="swiper-pagination"></div>

                    </div>
                </div>
            </div>
        </section>

        <div class="modal">
            <div class="modal__main">
                <h2 class="modal__title">Опрос завершен</h2>

                <div class="modal__container">
                    <p>Спасибо за ваше участие</p>

                </div>

                <button type="submit" class="modal__button">


                <?= GetMessage("VOTE_RESULTS") ?></button>
                <button type="submit" class="modal__close">&#10006;</button>
            </div>
        </div>
    </form>
</div>


