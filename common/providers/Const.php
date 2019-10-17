<?
/**
 * @global const 
 */
?>

<script>
    const TIMEOUT = '60000';
    const ROUTER = '<?=ROUTER;?>';
    const HOST_URL = '<?=$SYSTEM_VARIABLE['HOST_URL'];?>';
    const REDIRECT = '<?=$_GET['redirect'];?>';
    const ADMIN = '<?=preg_match("/admin/i", ROUTER) === 1 ? 'true' : 'false'; ?>';
</script>
