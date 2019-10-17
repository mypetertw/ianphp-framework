<?
/**
 * GET IP ADDRESS
 *
 * @return $IP
 */
$IP = 'Unknown';
if (isset($_SERVER['HTTP_CLIENT_IP'])) {
  $IP = $_SERVER['HTTP_CLIENT_IP'];
} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $IP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
  $IP = $_SERVER['HTTP_X_FORWARDED'];
} elseif (isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
  $IP = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
} elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
  $IP = $_SERVER['HTTP_FORWARDED_FOR'];
} elseif (isset($_SERVER['HTTP_FORWARDED'])) {
  $IP = $_SERVER['HTTP_FORWARDED'];
} elseif (isset($_SERVER['REMOTE_ADDR'])) {
  $IP = $_SERVER['REMOTE_ADDR'];
}

/**
 * GET UNIQUE IP
 *
 * @return $UNIQUE_IP
 */
$UNIQUE_IP = str_replace('.', '', $IP);

/**
 * GET SESSION ID (UNIQUE)
 *
 * @return $SESSION
 */
$SESSION = hash('sha256', $UNIQUE_IP . time() . rand(1, 9999999999));
