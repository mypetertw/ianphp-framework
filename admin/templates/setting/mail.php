<?
require_once __DIR__ . '/../../../common/header.php';
require_once ROOT . '/common/admin.header.php';
?>

<div class="admin-container">
    <? require_once $SYSTEM_VARIABLE['VIEWS_MENU']; ?>
    <div class="right-side-content">
        <div class="right-side-content-container">
            <div class="general-title weight-500 relative">Gmail 寄信</div>
            <?=$LINE_20;?>
                <a href="index" class="title-tab-btn <?=ROUTER_SELF == 'index' ? 'active' : '';?> ease-in-out">基本</a>
                <a href="mail" class="title-tab-btn <?=ROUTER_SELF == 'mail' ? 'active' : '';?> ease-in-out">Gmail 寄信</a>
            <?=$LINE_20;?>

            <form id="setting-mail">
                <div class="font-14 top-bottom-20 weight-500">寄件人名稱</div>
                <input name="name" class="ease-in-out underline-input" value="<?=$SETTING_MAIL['data_1'];?>">

                <div class="font-14 top-bottom-20 weight-500">電子郵件地址</div>
                <input name="email" class="ease-in-out underline-input" value="<?=$SETTING_MAIL['data_2'];?>" placeholder="xxx@gmail.com">

                <div class="font-14 top-bottom-20 weight-500">電子郵件登入密碼</div>
                <input name="password" class="ease-in-out underline-input" type="password" value="<?=$SETTING_MAIL['data_3'];?>">
                <?=Helper\Format::NOTE('top-10', [
                    '＊請輸入你允許寄信的 Gmail 帳號和密碼。',
                    '<span class="sale-red">＊重要！請至 <a href="https://myaccount.google.com/u/3/lesssecureapps?utm_source=google-account&utm_medium=web" target="_blank" class="blue">Google 允許非安全應用訪問</a>，將其設定為「允許」，否則將無法透過此電郵寄信。</span>',
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
