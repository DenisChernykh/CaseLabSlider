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

<?
endif;

if (empty($arResult["VOTE"]) || empty($arResult["QUESTIONS"])):
    return true;
endif;

?>


<ol class="vote-items-list vote-question-list voting-result-box">
    <div class="vote-block__container">
    <?
    $iCount = 0;
    foreach ($arResult["QUESTIONS"] as $arQuestion):
        $iCount++;
        ?>
        <div class="result__title"><?= $arQuestion["QUESTION"] ?></div>
        <div class="vote-block__item vote-item-vote <?= ($iCount == 1 ? "vote-item-vote-first " : "") ?><?
        ?><?= ($iCount == count($arResult["QUESTIONS"]) ? "vote-item-vote-last " : "") ?><?
        ?><?= ($iCount % 2 == 1 ? "vote-item-vote-odd " : "vote-item-vote-even ") ?><?
        ?>">
            <? $percent = round($arAnswer["BAR_PERCENT"] * 0.8); // (100% bar * 0.8) + (20% span counter) = 100% td
            ?>
            <div class="vote-block__question">
                <ul class="vote-block__list">
                    <? foreach ($arQuestion["ANSWERS"] as $arAnswer): ?>


                        <li style=" border: 2px solid #<?= htmlspecialcharsbx($arAnswer["COLOR"]) ?>; background-color: #<?= htmlspecialcharsbx($arAnswer["COLOR"]) ?> " ><?= $arAnswer["MESSAGE"] ?>
                            <? if (isset($arResult['GROUP_ANSWERS'][$arAnswer['ID']])) {
                                if (trim($arAnswer["MESSAGE"]) != '')
                                    echo '&nbsp';
                                echo '(' . GetMessage('VOTE_GROUP_TOTAL') . ')';
                            }
                            ?>
                            &nbsp;
                        </li>
                    <? endforeach ?>
                </ul>
            </div>
            <div class="vote-block__result result">
                <? foreach ($arQuestion["ANSWERS"] as $arAnswer): ?>
                    <? $percent = round($arAnswer["BAR_PERCENT"] * 0.8); // (100% bar * 0.8) + (20% span counter) = 100% td
                    ?>
                    <div class="result__columns">


                        <div class="result__diagrams">
                            <nobr class="result__percent"><?= ($arAnswer["COUNTER"] > 0 ? '&nbsp;' : '') ?><?= $arAnswer["COUNTER"] ?> (<?= $arAnswer["PERCENT"] ?>%)</nobr>

                            <div  style="height:<?= $percent ?>%;background-color:#<?= htmlspecialcharsbx($arAnswer["COLOR"]) ?>" class="result__diagram"></div>
                        </div>
                    </div>
                <? endforeach ?>
            </div>


        </div>
    <?
    endforeach;


    ?>
    </div>
</ol>