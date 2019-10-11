<?
namespace Image;

class LazyLoad {

  public function RADIUS_USER($field, $class, $key) {
    $source = $key[''.$field.''] != '' ? $key[''.$field.''] : '/images/user.png';
    $EDIT_TIME = '?v=' . $key['edit_time'];
    return '
    <div data-href="' . $source . $EDIT_TIME . '" class="' . $class . ' clear-font-size lazy-load replace">
      <img class="preview" src="' . $source . $EDIT_TIME . '">
    </div>';
  }

  public function GENERAL($field, $class, $key) {
    $source = $key[''.$field.''] ? $key[''.$field.''] : '/images/30.png';
    $EDIT_TIME = '?v=' . $key['edit_time'];
    return '
    <div data-href="' . $source . $EDIT_TIME . '" class="' . $class . ' clear-font-size lazy-load replace">
      <img class="preview" src="' . $source . $EDIT_TIME . '">
    </div>';
  }
}

class Image_Upload_Layout {

  public function GENERAL($no, $field, $class, $string, $source = false, $class_50 = '') {
    $_SOURCE = $source[''.$field.''] ? $source[''.$field.''] : '/images/30.png';
    $EDIT_TIME = '?v=' . $source['edit_time'];
    return '<div class="'.$class.' relative">
      <div class="crop-image-upload-layout '.$class_50.'">
        <input data-file_id="'. $no .'" type="file" id="file'. $no .'" name="'.$field.'" class="crop-input" accept="image/jpeg, image/png, image/jpg">
        <input type="hidden" id="crop-result-'. $no .'" name="crop_result_'.$no.'">
        <img src="' . $_SOURCE . $EDIT_TIME . '" id="pre'. $no .'" class="crop-image-upload-preview '.$class_50.'">
        <div class="crop-icon center">
          <img src="/images/camera.png" style="width: 23px;">
          <div class="gray image-upload-note top-5">拖曳或點擊此處<br>' . $string . '</div>
        </div>
      </div>
    </div>';
  }

  public function LOGO($no, $field, $class, $string, $source) {
    $_SOURCE = $source[''.$field.''] ? $source[''.$field.''] : '/images/30.png';
    $crop_icon = $source[''.$field.''] ? '' : '<div class="crop-icon center">
      <img src="/images/camera.png" style="width: 23px;">
      <div class="gray top-5">拖曳或點擊此處<br>' . $string . '</div>
    </div>';
    $EDIT_TIME = '?v=' . $source['edit_time'];
    return '<div class="'.$class.' relative">
      <div class="crop-image-upload-layout-for-logo">
        <input type="file" id="file'. $no .'" name="'.$field.'" class="crop-input" accept="image/jpeg, image/png, image/jpg">
        <img src="' . $_SOURCE . $EDIT_TIME . '" id="pre'. $no .'" class="crop-image-upload-preview-for-logo">
        ' . $crop_icon . '
      </div>
    </div>';
  }
}

class Upload {

  public function BASE64($field, $id, $location) {
    GLOBAL $SYSTEM_VARIABLE, $SYSTEM_CACHE;
    preg_match('/^(data:\s*image\/(\w+);base64,)/', $_POST[''.$field.''], $result);
    file_put_contents($SYSTEM_VARIABLE['UPLOAD_ROOT_DIR'] . '/' . $location . $id . '.' . strtolower($result[2]), base64_decode(str_replace($result[1], '', $_POST[''.$field.''])));
    return $SYSTEM_VARIABLE['HOST_URL'] . $location . $id . '.' . strtolower($result[2]);
  }

  public function COMPRESS_SIZE($field, $id, $location, $sourse_location, $width_size) {
    GLOBAL $SYSTEM_VARIABLE, $SYSTEM_CACHE, $RANDOM_ID;

    $type = strtolower(strrchr($_FILES[''.$field.'']['name'], '.'));
    $imgSource = $SYSTEM_VARIABLE['UPLOAD_ROOT_DIR'] . $sourse_location . $id . $type;
    $imgReader = $SYSTEM_VARIABLE['UPLOAD_ROOT_DIR'] . $location . $id . $type;
    list($width, $height, $type_no) = getimagesize($imgSource);

    if ($width > $width_size) {
      $ratio = $width / $height;
      if ($ratio > 1) {
        $newWidth = $width_size;
        $newHeight = $width_size / $ratio;
      } else {
        $newWidth = $width_size * $ratio;
        $newHeight = $width_size;
      }
    } else {
      $newWidth = $width;
      $newHeight = $height;
    }

    switch ($type_no) {
      case 2:
        header('Content-Type:image/jpeg');
        $imageWp = imagecreatetruecolor($newWidth, $newHeight);
        $image = imagecreatefromjpeg($imgSource);
        imagecopyresampled($imageWp, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
        imagejpeg($imageWp, $imgReader, 100);
        imagedestroy($imageWp);
      break;

      case 3:
        header('Content-Type:image/png');
        $imageWp = imagecreatetruecolor($newWidth, $newHeight);
        $image = imagecreatefrompng($imgSource);
        imagecopyresampled($imageWp, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
        imagejpeg($imageWp, $imgReader, 100);
        imagedestroy($imageWp);
      break;
    }

    return $SYSTEM_VARIABLE['HOST_URL'] . $location . $id . $type;
  }

  public function CHECK_SIZE($field, $limit_size_mb, $limit_width, $limit_height) {

    if ($_FILES[''.$field.'']['size'] > $limit_size_mb * 1024 * 1024) {
      return '為避免影響網頁效能，照片請控制在 '.$limit_size_mb.' MB 內。';
    }

    list($width, $height) = getimagesize($_FILES[''.$field.'']['tmp_name']);
    if ($width <= $limit_width) {
      return '寬度至少 '.$limit_width.' 像素。';
    }

    if ($width <= $limit_height) {
      return '高度至少 '.$limit_height.' 像素。';
    }

    return true;
  }

  public function GENERAL($field, $id, $location) {
    GLOBAL $SYSTEM_CACHE_VARIABLE, $SYSTEM_CACHE;

    $type = strtolower(strrchr($_FILES[''.$field.'']['name'], '.'));
    $imgSource = $SYSTEM_VARIABLE['UPLOAD_ROOT_DIR'] . $location . $id . $type;
    if (move_uploaded_file($_FILES[''.$field.'']['tmp_name'], $imgSource)) {
      return $SYSTEM_VARIABLE['HOST_URL'] . $location . $id . $type;
    } else {
      return false;
    }
  }
}
