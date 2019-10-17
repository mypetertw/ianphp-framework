<?
require_once __DIR__ . '/../../../common/header.php';
require_once ROOT . '/common/admin.header.php';
?>

<div class="admin-container">
    <? require_once $SYSTEM_VARIABLE['VIEWS_MENU']; ?>
    <div class="right-side-content">
        <div class="right-side-content-container">
            <div class="general-title weight-500 relative">圖標</div>
            <?=$LINE_20;?>

            <form id="setting-icon">
                <div class="font-14 top-bottom-20 weight-bold">Logo</div>
                <?=Image\Image_Upload_Layout::LOGO(1, 'data_2', 'setting-logo-layout font-12', '', $SETTING_WEBSITE);?>
                <?=Helper\Format::NOTE('top-20', [
                    '＊圖片背景需為透明。',
                    '＊推薦尺寸 90 x 25 (px)。',
                ]);?>

                <?=$LINE_20;?>

                <div class="font-14 top-bottom-20 weight-bold">瀏覽器標頭圖示</div>
                <?=Image\Image_Upload_Layout::LOGO(2, 'data_3', 'setting-meta-title-logo-layout font-12', '', $SETTING_META);?>
                <?=Helper\Format::NOTE('top-20', [
                    '＊在網頁標題的左側顯示的圖示。',
                    '＊推薦尺寸 32 x 32 (px)。',
                ]);?>

                <?=$LINE_20;?>

                <div class="font-14 top-bottom-20 weight-bold">預設預覽圖</div>
                <?=Image\Image_Upload_Layout::LOGO(3, 'data_4', 'setting-meta-logo-layout font-12', '', $SETTING_META);?>
                <?=Helper\Format::NOTE('top-20', [
                    '＊將網站網址分享出去時的預覽圖。',
                    '＊推薦尺寸 200 x 200 (px)。',
                ]);?>

                <?=$LINE_20;?>
                <?=Helper\Btn::SUBMIT('保存', 100, 'black-btn');?>
            </form>

        </div>
    </div>
</div>

<?
require_once ROOT . '/common/footer.php';
require_once ROOT . '/common/admin.footer.php';
?>
