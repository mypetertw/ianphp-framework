<?
/**
 * READ MORE
 *
 * @param String
 * @return string
 */
function READ_MORE($STRING, $NUM, $DISPLAY) {
    $str = mb_strimwidth(strip_tags($STRING), 0, $NUM, $DISPLAY, 'UTF-8');
    return $str;
}
