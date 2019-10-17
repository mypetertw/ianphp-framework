<?
namespace User;

class Get {

    public function INFORMATION($USER_ID = false) {
        GLOBAL $_SESSION, $PDO;

        $USER_ID = $USER_ID ? $USER_ID : $_SESSION['user-id'];

        $stmt = $PDO->prepare(
            "SELECT * FROM `user`
            WHERE `id` = :target_id
            AND `block` = :block "
        );
        $stmt->execute([
            'target_id' => $USER_ID,
            'block' => 0
        ]);

        return $stmt->fetch();
    }
}
