<?
namespace Helper;

class Layout {

  public function EMPTY_DATA($STRING) {
    return '<div class="empty-data-layout">' . $STRING . '</div>';
  }
}

class Time {

  public function MICROTIME() {
    list($usec, $sec) = explode(" ", microtime());
    return str_replace('.', '', ((float)$usec + (float)$sec));
  }

  public function FULL_TIME($TIME) {
    $a = date('A', $TIME);
    if ($a == 'AM') {
  		$when = '上午';
  	} else if ($a == 'PM') {
  		$when = '下午';
  	}
    return date('Y 年 m 月 d 日 '.$when.' h:i', $TIME);
  }

  public function MODIFY_TIME($KEY) {
    $TIME = $KEY['edit_time'] != 0 ? $KEY['edit_time'] : $KEY['add_time'];
    $STRING = $KEY['edit_time'] != 0 ? '最後編輯：' : '發佈時間：';
    $a = date('A', $TIME);
    if ($a == 'AM') {
  		$when = '上午';
  	} else if ($a == 'PM') {
  		$when = '下午';
  	}
    return date($STRING . 'm月d日 '.$when.'h:i', $TIME);
  }

  public function TIME($TIME) {
    $a = date('A', $TIME);
    if ($a == 'AM') {
  		$when = '上午';
  	} else if ($a == 'PM') {
  		$when = '下午';
  	}
    return date('m月d日 '.$when.'h:i', $TIME);
  }

  public function HUMANIZE_TIME($TIME) {
    $a = date('A', $TIME);
    if ($a == 'AM') {
  		$when = '上午';
  	} else if ($a == 'PM') {
  		$when = '下午';
  	}

    if ($TIME > time()) {
      return date('Y 年 m 月 d 日 '.$when.' h:i', $TIME);
    }

    $mdtime = date('m月d日', $TIME);
    $ymdtime = date('Y年m月d日', $TIME);
    $yy = date('Y', $TIME);
    $y = date('Y', time());
    $dtime = $yy == $y ? $mdtime : $ymdtime;
  	$htime = date('H:i', $TIME);
  	$h = date('G', $TIME);
  	$TIME = time() - $TIME;

  	if ($TIME < 60) {
  		$str = '剛剛 ';
  	} else if ($TIME < 60 * 60) {
  		$min = floor($TIME / 60);
  		$str = $min.' 分鐘前 ';
  	} else if ($TIME < 60 * 60 * 24) {
  		$h = floor($TIME / ( 60 * 60));
  		$str = $h.' 小時前 ';
  	} else {
  		$str = $dtime .' '. $when . $htime;
  	}
  	return $str;
  }
}

class Format {

  function NOTE($CLASS, $ARRAY) { ?>
    <div class="gray font-13 <?=$CLASS;?>">
      <? $i = 1; foreach ($ARRAY as $key) { ?>
        <?=$key;?><? if (sizeof($ARRAY) != $i) { echo '<br>'; } ?>
      <? $i++; } ?>
    </div>
  <? }

  function CLEAR_HTML_TAG($STRING) {
    return strip_tags(str_replace(["\r", "\n", "\r\n", "\n\r"], '', $STRING));
  }
}

class Slack {

  public function SEND_MESSAGE($STRING, $HANDLER, $FILE, $CHANNEL) {
    GLOBAL $LOCAL_CONFIG;

    $payload = [
      'text' => $STRING,
      'channel' => '#' . $CHANNEL,
      'username' => 'DEBUG',
      'attachments' => [
        [
          "title" => "Error Message",
          "text" => $STRING
        ],
        [
          "title" => "Handler",
          "text" => $HANDLER
        ],
        [
          "title" => "File",
          "text" => $FILE
        ],
        [
          "title" => "HOST",
          "text" => $SYSTEM_VARIABLE['HOST_URL']
        ]
      ]
    ];
    $ch = curl_init($LOCAL_CONFIG['SLACK_WEBHOOK']);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $res = curl_exec($ch);
    curl_close($ch);
  }
}

class Phone_Number {

  public function NATIONAL($from, $to, $number) {
    $from = '/'.preg_quote($from, '/').'/';
    return preg_replace($from, $to, $number, 1);
  }

  public function NATIONAL_BACK($from, $to, $number) {
    $from = '/'.preg_quote($from, '/').'/';
    return preg_replace($from, $to, $number, 4);
  }
}

class Css {

  public function REQUIRE($ROUTER) {
    GLOBAL $SYSTEM_VARIABLE, $SYSTEM_CACHE;
    return '<link rel="stylesheet" type="text/css" href="' . $SYSTEM_VARIABLE['HOST_URL'] . $ROUTER . $SYSTEM_CACHE['CACHE'] . '">';
  }
}

class Js {

  public function REQUIRE($ROUTER) {
    GLOBAL $SYSTEM_VARIABLE, $SYSTEM_CACHE;
    return '<script src="' . $SYSTEM_VARIABLE['HOST_URL'] . $ROUTER . $SYSTEM_CACHE['CACHE'] . '"></script>';
  }
}

class Btn {

  public function SUBMIT($STRING, $WIDTH, $CLASS) {
    return '<button style="width: '.$WIDTH.'px;" class="'.$CLASS.' width-btn ease-in-out top-30" type="submit">'.$STRING.'</button>';
  }

  public function PAGINATION($QUERY_SIZEOF) {
    GLOBAL $_GET, $PAGE, $PAGE_AMOUNT;

    $PAGE_NUM = ceil($QUERY_SIZEOF / $PAGE_AMOUNT);
    if ($PAGE_NUM == 0) return '';

    $left = $PAGE - 4;
    $right = $PAGE + 5;
    $range = array();
    $rangeWithSkipPage = array();
    $l = -1;

    for ($i = 1; $i <= $PAGE_NUM; $i++) {
      if ($i == 1 || $i == $PAGE_NUM || $i >= $left && $i < $right) {
        array_push($range, $i);
      }
    }

    for ($i = 0; $i < count($range); $i++) {
      if ($l != -1) {
        if ($range[$i] - $l === 2) {
          array_push($rangeWithSkipPage, $l + 1);
        } else if ($range[$i] - $l !== 1) {
          array_push($rangeWithSkipPage, 'skipPage');
        }
      }

      array_push($rangeWithSkipPage, $range[$i]);
      $l = $range[$i];
    }

    $PAGE_GET = '?page=';
    if ($_GET['product_category_id'] != '') {
      $PAGE_GET = '?product_category_id='.$_GET['product_category_id'].'&page=';
    } else if ($_GET['media_category_id'] != '') {
      $PAGE_GET = '?media_category_id='.$_GET['media_category_id'].'&page=';
    }
    ?>
    <div class="">
      <? if ($PAGE_NUM > 1 && $PAGE > 1) { ?>
        <button type="button" class="page-change-btn ease-in-out" onclick="location.href='<?=$PAGE_GET . ($PAGE - 1);?>';">←</button>
      <? } ?>
      <? foreach($rangeWithSkipPage as $key) { ?>
        <? if ($key == 'skipPage') { echo '⋯'; } else { ?>
          <button type="button" class="page-btn ease-in-out" <?=$PAGE == $key ? 'disabled': '';?> <?=$key == '...' ? 'disabled': '';?> onclick="location.href='<?=$PAGE_GET . $key;?>';"><?=$key;?></button>
        <? } ?>
      <? } ?>
      <? if ($PAGE_NUM != $PAGE) { ?>
        <button type="button" class="page-change-btn ease-in-out" onclick="location.href='<?=$PAGE_GET . ($PAGE + 1);?>';">→</button>
      <? } ?>
    </div>
  <? }

  public function BACK($ROUTER = false) {
    if (!$ROUTER) {
      return '<i class="material-icons vertical-middle back-evt-btn ease-in-out pointer">keyboard_arrow_left</i>';
    } else {
      return '<i class="material-icons vertical-middle ease-in-out pointer" onclick="location.href=\'' . $ROUTER . '\'">keyboard_arrow_left</i>';
    }
  }

  public function ADD($ROUTER, $STRING = '') {
    return '<button onclick="location.href=\'' . $ROUTER . '\'; return false;" style="right: -12px;" class="pointer translate-without-left border-0 ease-in-out add-btn"><i class="material-icons vertical-bottom font-20">add</i> ' . $STRING . '</button>';
  }

  public function BLACK_ADD($ROUTER, $STRING = '') {
    return '<button onclick="location.href=\'' . $ROUTER . '\'; return false;" style="right: 0px;" class="pointer translate-without-left border-0 ease-in-out general-black-btn">＋ ' . $STRING . '</button>';
  }
}
