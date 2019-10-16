<? if ($SETTING_CONTACT['data_1'] or $SETTING_CONTACT['data_2'] or $SETTING_CONTACT['data_3'] or $SETTING_CONTACT['data_4']) { ?>

    <div class="social-contact-content clear-font-size">
        <? if ($SETTING_CONTACT['data_1']) { ?>
            <a class="social-contact-line-btn top-15" href="<?=$SETTING_CONTACT['data_1'];?>" target="_blank"><img src="/images/line-icon.png"></a>
        <? } ?>

        <? if ($SETTING_CONTACT['data_2']) { ?>
            <button type="button" class="social-contact-facebook-btn top-15" onclick="window.open('https://www.messenger.com/t/<?=$SETTING_CONTACT['data_2'];?>');"><img src="/images/facebook.svg"></button>
        <? } ?>

        <? if ($SETTING_CONTACT['data_3']) { ?>
            <button type="button" class="social-contact-email-btn top-15" onclick="location.href='mailto:<?=$SETTING_CONTACT['data_3'];?>';"><img src="/images/email.svg"></button>
        <? } ?>

        <? if ($SETTING_CONTACT['data_4']) { ?>
            <button type="button" class="social-contact-phone-btn top-15" onclick="location.href='tel:<?=$SETTING_CONTACT['data_4'];?>';"><img src="/images/phone.svg"></button>
        <? } ?>
    </div>

<? } ?>
