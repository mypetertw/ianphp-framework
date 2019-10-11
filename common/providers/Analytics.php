<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
| GOOGLE ANALYTICS
*/
if ($SETTING_ANALYTICS['data_1']) { ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?=$SETTING_ANALYTICS['data_1'];?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?=$SETTING_ANALYTICS['data_1'];?>');
    </script>
<? } ?>

<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
| FACEBOOK ANALYTICS
*/
if ($SETTING_ANALYTICS['data_2']) { ?>
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?=$SETTING_ANALYTICS['data_2'];?>');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=<?=$SETTING_ANALYTICS['data_2'];?>&ev=PageView&noscript=1"
    /></noscript>
<? } ?>
