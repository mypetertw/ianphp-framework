<?
require_once __DIR__ . '/../../../common/header.php';
require_once ROOT . '/admin/views/header.framework.php';
?>

<div class="admin-container">
    <? require_once $SYSTEM_VARIABLE['VIEWS_MENU']; ?>
    <div class="right-side-content">
        <div class="right-side-content-container">
            <div class="general-title weight-500 relative">聯絡資訊</div>
            <?=$LINE_20;?>

            <form id="setting-contact">
                <div class="font-14 top-bottom-20 weight-500">LINE 加好友網址</div>
                <input name="line_link" class="ease-in-out underline-input" value="<?=$SETTING_CONTACT['data_1'];?>">
                <?=Helper\Format::NOTE('top-10', [
                    '＊請輸入加好友連結。例如：https://line.me/R/ti/p/@pjq7xxxx',
                    '＊加入後網站會出現 Line Icon 供使用者點擊。',
                ]);?>

                <div class="font-14 top-bottom-20 weight-500">Facebook 粉絲專頁 Messenger</div>
                <input name="facebook_link" class="ease-in-out underline-input" value="<?=$SETTING_CONTACT['data_2'];?>">
                <?=Helper\Format::NOTE('top-10', [
                    '＊請輸入你的粉絲專業帳號，例如：https://www.facebook.com/TheWalkingDeadTopTvShow/，帳號為「TheWalkingDeadTopTvShow」',
                    '＊加入後網站會出現 Facebook Messenger Icon 供使用者點擊。',
                    '＊如果沒有取專屬帳號，請至臉書專業管理員後台設定。',
                ]);?>

                <div class="font-14 top-bottom-20 weight-500">電子郵件</div>
                <input name="email" class="ease-in-out underline-input" value="<?=$SETTING_CONTACT['data_3'];?>">
                <?=Helper\Format::NOTE('top-10', [
                    '＊請輸入你的完整電子郵件，例如：abc123@gmail.com',
                    '＊加入後網站會出現電子郵件供使用者點擊。',
                ]);?>

                <div class="font-14 top-bottom-20 weight-500">電話號碼</div>
                <input name="phone" class="ease-in-out underline-input" value="<?=$SETTING_CONTACT['data_4'];?>">
                <?=Helper\Format::NOTE('top-10', [
                    '＊請輸入你的完整電話號碼，例如：0912333878, 0233118832',
                    '＊加入後網站會出現電話供使用者點擊。',
                ]);?>

                <?=Helper\Btn::SUBMIT('保存', 100, 'black-btn');?>
            </form>

        </div>
    </div>
</div>

<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
require_once ROOT . '/common/footer.php';
require_once ROOT . '/admin/views/footer.framework.php';
?>
