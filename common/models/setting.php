<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
namespace Common_Setting;

class Get {

    public function INFORMATION($SETTING_TYPE) {
        GLOBAL $PDO;

        $stmt = $PDO->prepare(
            "SELECT * FROM `setting`
            WHERE `setting_type` = :setting_type "
        );
        $stmt->execute([
            'setting_type' => $SETTING_TYPE
        ]);

        return $stmt->fetch();
    }
}
