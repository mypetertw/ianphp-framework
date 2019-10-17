<?
require_once __DIR__ . '/../../../common/header.php';
require_once ROOT . '/common/header.admin.php';
?>

<div class="admin-container">
    <? require_once $SYSTEM_VARIABLE['VIEWS_MENU']; ?>
    <div class="right-side-content">
        <div class="right-side-content-container">
            <div class="general-title weight-500 relative">使用者</div>
            <?=$LINE_20;?>
            <div class="font-14 gray bottom-20 relative">
                <?=sizeof(User\Get::LIST(false));?> 筆
                <div class="translate-right">
                    <?=Helper\Btn::PAGINATION(sizeof(User\Get::LIST(false)));?>
                </div>
            </div>
            <?=$LINE;?>

            <? require_once BLADE;?>

            <div class="top-20">
                <?=Helper\Btn::PAGINATION(sizeof(User\Get::LIST(false)));?>
            </div>
        </div>
    </div>
</div>

<?
require_once ROOT . '/common/footer.php';
require_once ROOT . '/common/footer.admin.php';
?>
