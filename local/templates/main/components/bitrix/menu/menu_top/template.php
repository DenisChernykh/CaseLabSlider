<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>

            <ul class="menu-list menu__list menu-left">
                <?php foreach ($arResult as $item): ?>
                    <?php if ($item["SELECTED"]): ?>
                        <li class="menu-item menu__item">
                            <a class="menu-link menu__link" href="<?= $item['LINK'] ?>" style="color:sandybrown"><?= $item['TEXT'] ?></a>
                        </li>
                    <?php else: ?>
                        <li class="menu-item menu__item">
                            <a class="menu-link menu__link" href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                        </li>
                    <?php endif; ?>

                <?php endforeach; ?>

            </ul>

<?php endif; ?>