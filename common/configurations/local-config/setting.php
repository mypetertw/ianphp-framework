<?
/**
 * SETTING local-config.json VALUES
 */
require_once __DIR__ . '/../../../root.php';

if (file_exists(ROOT . '/local-config.json')) {
    exit (header('location: /'));
}

if (!is_writable(ROOT . '/images')) {
    exit ('SOMETHING WENT WRONG: /images IS NOT WTITABLE.');
}

if (!is_writable(ROOT . '/')) {
    exit ('SOMETHING WENT WRONG: / IS NOT WTITABLE.');
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

<div style="margin: 50px auto; width: 350px; text-align: left;">
    <form action="/common/configurations/local-config/handler" method="post">
        資料庫 IP
        <input name="DB_HOST" placeholder="資料庫 IP" value="172.104.102.244"><br>
        資料庫帳號
        <input name="DB_USERNAME" placeholder="資料庫帳號" value="root"><br>
        資料庫密碼
        <input name="DB_PASSWORD" placeholder="資料庫密碼" value="aehDBSffG4fTCE7ZcgPg#e8yY#YBXzCVkF4UvA9Dkw8x%erHPvCS!9%=W5ZG5?G"><br>
        資料庫名稱
        <input name="DB_NAME" placeholder="資料庫名稱" value="xxx_xxx"><br>
        開發環境域名（通常是 127.0.0.1）
        <input name="DEV_HOST" placeholder="開發環境域名（通常是 127.0.0.1）" value="<?=$_SERVER['HTTP_HOST'];?>" required><br>
        正式環境域名（不會是 127.0.0.1）
        <input name="PROD_HOST" placeholder="正式環境域名（不會是 127.0.0.1）" value="xxx.rockbearshop.com" required><br>
        SLACK WEBHOOK
        <input name="SLACK_WEBHOOK" placeholder="SLACK WEBHOOK" value="https://hooks.slack.com/services/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">
        <br>
        <br>
        <button type="submit">建立 local-config.json 設定檔</button>
    </form>
</div>
