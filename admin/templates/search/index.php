<?
require_once __DIR__ . '/../../../common/header.php';
require_once ROOT . '/admin/views/header.framework.php';
?>

<div class="admin-container">
    <? require_once $SYSTEM_VARIABLE['VIEWS_MENU']; ?>
    <div class="right-side-content">
        <div class="right-side-content-container">
            <div class="general-title weight-bold relative"><?=$_SESSION['search_query'];?></div>
            <?=$LINE_20;?>

        </div>
    </div>
</div>

<?
require_once ROOT . '/common/footer.php';
require_once ROOT . '/admin/views/footer.framework.php';
?>
