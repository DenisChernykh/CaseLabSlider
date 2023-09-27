<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<footer id="footer" class="footer">
    <div class="container">
        <h3 class="footer__title">Контакты</h3>
        <div class="footer__top">
            <ul class="footer__info">
                <li class="footer__info-item">
                    <dl>
                        <dt>общие</dt>
                        <dd><a href="tel:+79991234567"> <?php $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH"           => SITE_TEMPLATE_PATH . "/includes/footer_phone.php",
                                ]); ?></a></dd>

                        <dd><a href="mailto:info@autodromodoalgarve.com"><?php $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH"           => SITE_TEMPLATE_PATH . "/includes/footer_email.php",
                                ]); ?></a></dd>
                    </dl>
                </li>
                <li class="footer__info-item">
                    <dl>
                        <dt>билеты</dt>
                        <dd><a href="tel:+79991234567"><?php $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH"           => SITE_TEMPLATE_PATH . "/includes/footer_phone.php",
                                ]); ?></a></dd>
                        <dd><a href="mailto:info@autodromodoalgarve.com"><?php $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH"           => SITE_TEMPLATE_PATH . "/includes/footer_email.php",
                                ]); ?></a></dd>
                    </dl>
                </li>
                <li class="footer__info-item">
                    <ul class="social-list">
                        <li class="social-list__item">
                            <a href="#!" class="social-list__link">
                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/YOUTUBE.svg" alt="Youtube" class="social-list__icon">
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="#!" class="social-list__link">
                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/instagram.svg" alt="instagram" class="social-list__icon">
                            </a>
                        </li>
                        <li class="social-list__item">

                            <a href="#!" class="social-list__link">
                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/FACEBOOK.svg" alt="facebook" class="social-list__icon">
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="footer__adress">
                <p class="footer__adress-title">
                    адрес
                </p>
                <address class="footer__adress-text">
                    <?php $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                        "AREA_FILE_SHOW" => "file",
                        "PATH"           => SITE_TEMPLATE_PATH . "/includes/footer_adress.php",
                    ]); ?>
                </address>

            </div>
        </div>

    </div>
</footer>
<!-- JS (скрипты) -->
<!-- jquery js -->

</body>
</html>
