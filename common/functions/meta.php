<?
function GET_TITLE($URL) {
    $title = preg_match('/<title[^>]*>(.*?)<\/title>/ims', file_get_contents($URL), $matches) ? $matches[1] : null;
    return $title;
}

function GET_META($URL, $TYPE) {

    require_once __DIR__ . '/metadata.php';

    if (sizeof(MetaData::fetch($URL)) === 0) {
        return false;
    }

    foreach (MetaData::fetch($URL) as $key => $value) {

        if ($TYPE == 'description') {
            if ($key == 'og:description') {
                $fetch = $value;
            } else if ($key == '') {
                $tags = get_meta_tags($URL);
                $fetch = $tags['description'];
            }
        }

        if ($key == $TYPE) {
            $fetch = $value;
        }
    }
    return $fetch;
}
