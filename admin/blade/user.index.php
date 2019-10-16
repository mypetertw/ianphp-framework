<?
/*
| NOTE: IF DATA IS EMPTY
*/
if (sizeof(User\Get::LIST(false)) === 0) {
    echo Helper\Layout::EMPTY_DATA('目前無更多使用者');
} else { ?>

    <? foreach (User\Get::LIST(true) as $key): ?>
        <div class="list-layout relative control-evt" data-id="<?=$key['id'];?>">
            <div class="flex-item">
                <div class="clear-font-size" style="width: 90px;">
                    <?=$LAZYLOAD::RADIUS_USER('icon', 'user-image', $key);?>
                </div>
                <div class="font-15 black">
                    <a class="blue relative">
                        <?=$key['name'];?>
                        <?=$_SESSION['admin-id'] == $key['id'] ? '（後台的你自己）' : '';?>
                        <?=$_SESSION['user-id'] == $key['id'] ? '（前端的你自己）' : '';?>
                        <?=time() - $key['online_status'] <= 60 ? '<div class="notify-point-layout bg-green get-user-online-status-layout"></div>' : '';?>
                    </a>
                    <div class="font-13 top-5">
                        <?=$TIME::HUMANIZE_TIME($key['online_status']) == '剛剛 ' ? '<span class="green">正在線上</span>' : '最後上線 ' . $TIME::HUMANIZE_TIME($key['online_status']);?>
                    </div>
                </div>
            </div>

            <div class="display-none control-evt-layout-<?=$key['id'];?> translate-right">

            <div class="modify-layout center">
                <? foreach (Manager\Get::PERMISSION() as $permission_key) { ?>
                    <button <?=$key['permission_id'] == $permission_key['permission_id'] ? 'disabled' : '';?> class="control-btn ease-in-out airbnb-shadow manager-permission-btn" data-permission_id="<?=$permission_key['permission_id'];?>" data-id="<?=$key['id'];?>"><?=$permission_key['permission_name'];?></button>
                <? } ?>
            </div>

            </div>
        </div>
    <? endforeach;
/*
| NOTE: ENDBLADE
*/
}
