<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
namespace Admin;

class Get {

    public function INFORMATION() {
        GLOBAL $_SESSION, $PDO;

        $stmt = $PDO->prepare(
            "SELECT
            u.*,
            p.*
            FROM `user` as u
            JOIN `permission` as p ON p.permission_id = u.permission_id
            WHERE u.id = :target_id
            AND u.permission_id > :permission_id
            AND u.block = :block "
        );
        $stmt->execute([
            'target_id' => $_SESSION['admin-id'],
            'permission_id' => 1,
            'block' => 0
        ]);

        return $stmt->fetch();
    }
}
