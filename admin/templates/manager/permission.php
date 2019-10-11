<?
require_once __DIR__ . '/../../../common/header.php';
require_once ROOT . '/admin/views/header.framework.php';
?>

<div class="admin-container">
    <? require_once $SYSTEM_VARIABLE['VIEWS_MENU']; ?>
    <div class="right-side-content">
        <div class="right-side-content-container">
            <div class="general-title bold bottom-20">權限</div>
            <?=$LINE;?>

            <form id="edit-manager-permission">
                <table class="manager-permission-table">
                    <tr>
                        <td width="12%">職位 \ 功能</td>
                        <td width="8%">使用者</td>
                        <td width="8%">管理員</td>
                        <td width="8%">設定</td>
                    </tr>
                    <? foreach (Manager\Get::PERMISSION() as $key) { ?>
                        <tr>
                            <td class="manager-permission-checkbox"><?=$key['permission_name'];?></td>
                            <td class="manager-permission-checkbox">
                                <input value="1" <?=$key['user'] == 1 ? 'checked' : '';?> type="checkbox" name="user[<?=$key['permission_id'];?>]" id="user<?=$key['permission_id'];?>"><label for="user<?=$key['permission_id'];?>">✓</label>
                            </td>
                            <td class="manager-permission-checkbox">
                                <input value="1" <?=$key['manager'] == 1 ? 'checked' : '';?> type="checkbox" name="manager[<?=$key['permission_id'];?>]" id="manager<?=$key['permission_id'];?>"><label for="manager<?=$key['permission_id'];?>">✓</label>
                            </td>
                            <td class="manager-permission-checkbox">
                                <input value="1" <?=$key['setting'] == 1 ? 'checked' : '';?> type="checkbox" name="setting[<?=$key['permission_id'];?>]" id="setting<?=$key['permission_id'];?>"><label for="setting<?=$key['permission_id'];?>">✓</label>
                            </td>
                        </tr>
                    <? } ?>
                </table>

                <?=Helper\Format::NOTE('top-20', [
                    '＊未核准的頁面將無法被造訪。',
                    '＊請勿將管理員的所有權限取消。',
                ]);?>
                <?=Helper\Btn::SUBMIT('保存', 100, 'black-btn');?>
            </form>
        </div>
    </div>
</div>

<?
require_once ROOT . '/common/footer.php';
require_once ROOT . '/admin/views/footer.framework.php';
?>
