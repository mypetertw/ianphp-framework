<header class="header-container bg-white">
    <div class="header-left-layout">
        <div class="clear-font-size">
        <a href="/admin/index"><img class="header-logo progress-bar-btn vertical-middle" src="<?=$SETTING_WEBSITE['data_2'];?>"></a>
        <!-- <form style="display: inline-block;" id="search">
            <div class="relative">
                <input class="header-search-box left-20 vertical-middle" placeholder="<?=$_SESSION['search_query'] ? $_SESSION['search_query'] : 'Search';?>" id="search_query" value="<?=$_SESSION['search_query'];?>">
                <button type="submit" class="translate-without search-btn ease-in-out" style="right: 20px; visibility: hidden;"></button>
                <span class="translate-without" id="search-loading" style="right: 20px;"></span>
            </div>
        </form> -->
        </div>
    </div>

    <? if ($Admin) { ?>
        <div class="header-right-layout">
            <a class="pointer header-admin-icon-menu-evt-btn header-admin-icon header-icon font-13"><?=$Admin['name'];?>（<?=$Admin['permission_name'];?>）</a>
        </div>
    <? } ?>
</header>

<div class="display-none header-admin-icon-menu-layout header-admin-icon-menu-evt">
    <a href="/admin/signout" class="ease-in-out black header-admin-icon-menu-btn">登出</a>
</div>
