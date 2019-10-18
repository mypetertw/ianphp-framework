<?
if ($DATABASE_ENABLE) {

    # DATABASE
    $SETTING_META = Common_Setting\Get::INFORMATION('meta');
    $SETTING_WEBSITE = Common_Setting\Get::INFORMATION('website');
    $SETTING_ANALYTICS = Common_Setting\Get::INFORMATION('analytics');
    $SETTING_CONTACT = Common_Setting\Get::INFORMATION('contact');

    # ROBOTS
    define('ROBOTS', '<meta name="robots" content="' . ($SETTING_META['data_2'] ? 'noindex, nofollow' : 'index, follow' ) . '">');

} else {

    # NO DATABASE
    $SETTING_META = [
        'data_1' => 'zh_TW',
        'data_2' => 1,
        'data_3' => '/images/instagram.png',
        'data_4' => '/images/instagram.png',
        'data_5' => 'keyword',
        'data_6' => 'description',
    ];
    $SETTING_WEBSITE = [
        'data_1' => '未命名網站(無DB)',
        'data_2' => '/images/instagram.png',
    ];
    $SETTING_ANALYTICS = [
        'data_1' => 0,
        'data_2' => 0,
    ];
    $SETTING_CONTACT = [
        'data_1' => '',
        'data_2' => '',
        'data_3' => '',
        'data_4' => '',
    ];

    # ROBOTS
    define('ROBOTS', '<meta name="robots" content="noindex, nofollow">');

}
