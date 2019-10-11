<div class="left-side-content">
    <div class="left-side-content-container">

        <? if ($Admin['setting'] === 1) { ?>
            <a class="container-btn progress-bar-btn ease-in-out" href="/admin/setting/index">設定</a>
            <? if (preg_match("/setting/i", ROUTER) === 1) { ?>
                <a href="/admin/setting/index" class="left-side-content-link-sec<?=ROUTER == '/admin/templates/setting/index' ? 'a' : '';?> ease-in-out progress-bar-btn relative">一般</a>
                <a href="/admin/setting/icon" class="left-side-content-link-sec<?=ROUTER == '/admin/templates/setting/icon' ? 'a' : '';?> ease-in-out progress-bar-btn relative">圖標</a>
                <a href="/admin/setting/contact" class="left-side-content-link-sec<?=ROUTER == '/admin/templates/setting/contact' ? 'a' : '';?> ease-in-out progress-bar-btn relative">聯絡資訊</a>
            <? } ?>
        <? } ?>

        <? if ($Admin['user'] === 1) { ?>
            <a class="container-btn progress-bar-btn ease-in-out" href="/admin/user/index">使用者</a>
            <? if (preg_match("/user/i", ROUTER) === 1) { ?>
                <a href="/admin/user/index" class="left-side-content-link-sec<?=ROUTER == '/admin/templates/user/index' ? 'a' : '';?> ease-in-out progress-bar-btn relative">使用者列表</a>
            <? } ?>
        <? } ?>

        <? if ($Admin['manager'] === 1) { ?>
            <a class="container-btn progress-bar-btn ease-in-out" href="/admin/manager/index">管理員</a>
            <? if (preg_match("/manager/i", ROUTER) === 1) { ?>
                <a href="/admin/manager/index" class="left-side-content-link-sec<?=ROUTER == '/admin/templates/manager/index' ? 'a' : '';?> ease-in-out progress-bar-btn relative">管理員列表</a>
                <a href="/admin/manager/permission" class="left-side-content-link-sec<?=ROUTER == '/admin/templates/manager/permission' ? 'a' : '';?> ease-in-out progress-bar-btn relative">權限</a>
            <? } ?>
        <? } ?>

    </div>
</div>
