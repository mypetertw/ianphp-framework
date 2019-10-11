<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
if (preg_match("/admin/i", ROUTER) == 1 && !is_writable(ROOT . '/images')) {
  exit ('/images IS NOT WTITABLE.');
}

if (!file_exists(ROOT . '/local-config.json')) {
  exit (header('location: /admin/local-config'));
}

if (ROUTER == '/admin/templates/signin' or ROUTER == '/admin/templates/index') {

  if (!TABLE_EXIST('user')) {
    exit ('USER TABLE NOT EXIST.');
  }

  if (!TABLE_EXIST('setting')) {
    exit ('SETTING TABLE NOT EXIST.');
  }

  if (!TABLE_EXIST('permission')) {
    exit ('PERMISSION TABLE NOT EXIST.');
  }

  # FIND
  $FIND_ROOT = Queries\Select::FETCH($PDO->prepare(
    "SELECT * FROM `user`
    WHERE `email` = :target_id "
  ), [
    'target_id' => 'root@root'
  ]);

  if (!$FIND_ROOT) {

    # 創建管理員帳號
    $stmt = $PDO->prepare(
      "INSERT INTO `user` (
        `name`,
        `icon`,
        `email`,
        `password`,
        `session`,
        `permission_id`
      )
      VALUES (
        :name,
        :icon,
        :email,
        :password,
        :session,
        :permission_id
      ) "
    );
    $stmt->execute([
      'name' => 'Root',
      'icon' => '/images/user.png',
      'email' => 'root@root',
      'password' => hash('sha256', '0000'),
      'session' => $SESSION,
      'permission_id' => 10
    ]);

    # 創建範例會員帳號
    $stmt = $PDO->prepare(
      "INSERT INTO `user` (
        `name`,
        `icon`,
        `email`,
        `password`,
        `online_status`,
        `session`,
        `permission_id`
      )
      VALUES (
        :name,
        :icon,
        :email,
        :password,
        :online_status,
        :session,
        :permission_id
      ) "
    );
    $stmt->execute([
      'name' => 'Simple User',
      'icon' => '/images/user.png',
      'email' => 'user@user',
      'online_status' => $TIME_NOW,
      'password' => hash('sha256', '0000'),
      'session' => $SESSION,
      'permission_id' => 1
    ]);

    Helper\Slack::SEND_MESSAGE(HOST . ': USER 設定完成。', 'listeners/local-config', NOW_SELF, 'local-config');
  }

  $FIND_SETTING = Queries\Select::FETCH($PDO->prepare(
    "SELECT * FROM `setting`
    WHERE `setting_type` = :target_id "
  ), [
    'target_id' => 'meta'
  ]);

  if (!$FIND_SETTING) {

    # 創建設定項
    $ARRAY = [
      'meta',
      'website',
      'analytics',
      'cache',
      'contact',
    ];

    foreach ($ARRAY as $key) {
      $stmt = $PDO->prepare(
        "INSERT INTO `setting` (
          `setting_type`
        )
        VALUES (
          :setting_type
        ) "
      );
      $stmt->execute([
        'setting_type' => $key
      ]);
    }

    # 設定項預設值
    $PDO->query(
      "UPDATE `setting` SET
      `data_1` = 'zh_TW',
      `data_2` = 1,
      `data_3` = '/images/instagram.png',
      `data_4` = '/images/instagram.png',
      `data_5` = 'keyword',
      `data_6` = 'description'
      WHERE `setting_type` = 'meta' "
    );

    $PDO->query(
      "UPDATE `setting` SET
      `data_1` = '未命名網站',
      `data_2` = '/images/instagram.png'
      WHERE `setting_type` = 'website' "
    );

    $PDO->query(
      "UPDATE `setting` SET
      `data_1` = 0,
      `data_2` = 0
      WHERE `setting_type` = 'analytics' "
    );

    $PDO->query(
      "UPDATE `setting` SET
      `data_1` = $TIME_NOW
      WHERE `setting_type` = 'cache' "
    );

    Helper\Slack::SEND_MESSAGE(HOST . ': SETTING 設定完成。', 'listeners/local-config', NOW_SELF, 'local-config');
  }

  $FIND_PERMISSION = Queries\Select::FETCH($PDO->prepare(
    "SELECT * FROM `permission`
    WHERE `permission_id` = :target_id "
  ), [
    'target_id' => '10'
  ]);

  if (!$FIND_PERMISSION) {

    # 創建權限
    $ARRAY = [
      '使用者' => 1,
      '管理員' => 10,
    ];

    foreach ($ARRAY as $key => $value) {
      $stmt = $PDO->prepare(
        "INSERT INTO `permission` (
          `permission_id`,
          `permission_name`,
          `user`,
          `manager`,
          `setting`
        )
        VALUES (
          :permission_id,
          :permission_name,
          :user,
          :manager,
          :setting
        ) "
      );
      $stmt->execute([
        'permission_id' => $value,
        'permission_name' => $key,
        'user' => 0,
        'manager' => 0,
        'setting' => 0
      ]);
    }

    $PDO->query(
      "UPDATE `permission` SET
      `user` = 1,
      `manager` = 1,
      `setting` = 1
      WHERE `permission_id` = 10 "
    );

    Helper\Slack::SEND_MESSAGE(HOST . ': PERMISSION 設定完成。', 'listeners/local-config', NOW_SELF, 'local-config');
  }
}
