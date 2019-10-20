<?
if ($DATABASE_ENABLE) {

    # IF DATABASE IS ENABLE
    $SETTING_META = Common_Setting\Get::INFORMATION('meta');
    $SETTING_WEBSITE = Common_Setting\Get::INFORMATION('website');
    $SETTING_ANALYTICS = Common_Setting\Get::INFORMATION('analytics');
    $SETTING_CONTACT = Common_Setting\Get::INFORMATION('contact');
    $SETTING_MAIL = Common_Setting\Get::INFORMATION('mail');
    $ROBOTS = '<meta name="robots" content="' . ($SETTING_META['data_2'] ? 'noindex, nofollow' : 'index, follow' ) . '">';

} else {

    # IF NO DATABASE INFORMATION
    $SETTING_META = [

        // LANGUAGE
        'data_1' => 'zh_TW',

        // ROBOTS
        'data_2' => 1,

        // SHORTCUT ICON
        'data_3' => '/images/instagram.png',

        // SHARE PREVIEW
        'data_4' => '/images/instagram.png',

        // KEYWORD
        'data_5' => 'keyword',

        // DESCRIPTION
        'data_6' => 'description',

    ];
    $SETTING_WEBSITE = [

        // TITLE
        'data_1' => '翰燁資訊',

        // LOGO
        'data_2' => '/images/instagram.png',

    ];

    # DEFAULT VALUES
    $SETTING_ANALYTICS = [
        'data_1' => 0,
        'data_2' => 0,
    ];

    $ROBOTS = '<meta name="robots" content="noindex, nofollow">';

}
