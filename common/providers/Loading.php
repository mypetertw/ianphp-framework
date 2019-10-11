<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
| ROUTER LIKE /public/templates/index
*/
$LOADING = [
  // '',
];

foreach ($LOADING as $key) {
    if (ROUTER == $key) { ?>
        <div class="loading-layout"><div class="loading-layout-image translate-middle"><img src="/images/loading-black.svg"></div></div>
    <? }
}
