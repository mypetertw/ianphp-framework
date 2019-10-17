<?
require_once __DIR__ . '/../../common/header.php';
require_once ROOT . '/common/admin.header.php';
?>

<div class="admin-container">
    <div class="signin-container center">
        <div class="signin-title">管理員後台</div>

        <div class="top-30">
            <form id="signin" data-redirect="<?=$_GET['redirect'];?>">
                <input name="email" class="signin-input ease-in-out width-100" value="<?=!$FIND_ROOT ? 'root@root' : '';?>" autofocus>
                <input name="password" class="signin-input ease-in-out width-100" value="<?=!$FIND_ROOT ? '0000' : '';?>" type="password">
                <button type="submit" class="signin-btn bg-red general-radius width-100">登入</button>
            </form>
        </div>

    </div>
</div>

<?
require_once ROOT . '/common/footer.php';
require_once ROOT . '/common/admin.footer.php';
?>
