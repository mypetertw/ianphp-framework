<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
require_once __DIR__ . '/../root.php';

if (file_exists(ROOT . '/local-config.json')) {
    exit (header('location: /'));
}

if (preg_match("/admin/i", ROUTER) == 1 && !is_writable(ROOT . '/')) {
    exit ('/ IS NOT WTITABLE.');
}
?>

<style>
    input {
        padding: 10px;
        border: 1px #eee solid;
        margin: 5px 0;
        width: 100%;
        outline: none;
        font-size: 16px;
    }
    button {
        padding: 10px 15px;
        background: #000;
        width: 100%;
        border: 0;
        outline: none;
        color: #fff;
        font-size: 16px;
    }
</style>

<div style="margin: 50px auto; width: 350px; text-align: center;">
    <div style="margin: 20px 0;">Local Config 設定檔 (請先將根目錄設定權限為 777)</div>
    <form action="/common/handlers/local-config" method="post">
        <input name="DB_HOST" placeholder="資料庫 IP" value="172.104.102.244"><br>
        <input name="DB_USERNAME" placeholder="資料庫帳號" value="root"><br>
        <input name="DB_PASSWORD" placeholder="資料庫密碼" value="aehDBSffG4fTCE7ZcgPg#e8yY#YBXzCVkF4UvA9Dkw8x%erHPvCS!9%=W5ZG5?G"><br>
        <input name="DB_NAME" placeholder="資料庫名稱"><br>
        <input name="APP_ID" placeholder="APP ID" value="<?=time();?>"><br>
        <input name="APP_TOKEN" placeholder="APP TOKEN" value="<?=md5(time());?>"><br>
        <input name="DEV_HOST" placeholder="開發環境域名（通常是 127.0.0.1）" value="<?=$_SERVER['HTTP_HOST'];?>"><br>
        <input name="DOMAIN_HOST" placeholder="商店正式域名（不會是 127.0.0.1）" value="xxx.rockbearshop.com"><br>
        <input name="BITBUCKET_NAME" placeholder="Bitbucket 專案名稱">
        <br>
        <br>
        <button type="submit">產生設定檔</button>
    </form>
</div>
