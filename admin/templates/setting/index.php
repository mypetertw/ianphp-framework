<?
require_once __DIR__ . '/../../../common/header.php';
require_once ROOT . '/common/admin.header.php';
?>

<div class="admin-container">
    <? require_once $SYSTEM_VARIABLE['VIEWS_MENU']; ?>
    <div class="right-side-content">
        <div class="right-side-content-container">
            <div class="general-title weight-500 relative">基本</div>
            <?=$LINE_20;?>
                <a href="index" class="title-tab-btn <?=ROUTER_SELF == 'index' ? 'active' : '';?> ease-in-out">基本</a>
                <a href="mail" class="title-tab-btn <?=ROUTER_SELF == 'mail' ? 'active' : '';?> ease-in-out">Gmail 寄信</a>
            <?=$LINE_20;?>

            <form id="setting-index">
                <div class="font-14 top-bottom-20 weight-500">網站名稱</div>
                <input name="name" class="ease-in-out underline-input" value="<?=$SETTING_WEBSITE['data_1'];?>">

                <div class="font-14 top-bottom-20 weight-500">網站關鍵字</div>
                <input name="tags" class="ease-in-out underline-input" value="<?=$SETTING_META['data_5'];?>" id="tags">

                <div class="font-14 top-bottom-20 weight-500">網站描述</div>
                <input name="description" class="ease-in-out underline-input" value="<?=$SETTING_META['data_6'];?>">

                <div class="font-14 top-bottom-20 weight-500">禁止被搜尋引擎抓取</div>
                <input type="checkbox" name="robots" class="ios-switch ios-switch-lg" id="robots" value="1" <?=$SETTING_META['data_2'] ? 'checked' : '';?>>
                <label for="robots" class="font-13">
                    <?=$SETTING_META['data_2'] ? '<span class="green weight-500">已啟用</span>' : '<span class="red weight-500">已停用</span>';?>
                </label>
                <?=Helper\Format::NOTE('top-10', [
                    '＊不允許搜尋引擎抓取到你的網站資訊。',
                ]);?>

                <div class="font-14 top-bottom-20 weight-500">關閉網站</div>
                <input type="checkbox" name="close" class="ios-switch ios-switch-lg" id="close" value="1" <?=$SETTING_WEBSITE['data_3'] ? 'checked' : '';?>>
                <label for="close" class="font-13">
                    <?=$SETTING_WEBSITE['data_3'] ? '<span class="green weight-500">已啟用</span>' : '<span class="red weight-500">已停用</span>';?>
                </label>
                <?=Helper\Format::NOTE('top-10', [
                    '＊關閉後使用者將無法瀏覽你的網站。',
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
