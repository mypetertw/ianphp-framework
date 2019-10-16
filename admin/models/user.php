<?
namespace User;

class Get {

    public function LIST($PAGINATION) {
        GLOBAL $PDO, $PAGE_OFFSET, $PAGE_AMOUNT;
        $LIMIT = $PAGINATION ? "LIMIT $PAGE_OFFSET, $PAGE_AMOUNT" : '';

        $stmt = $PDO->prepare(
            "SELECT * FROM `user`
            WHERE `permission_id` = :target_id
            ORDER BY `online_status` DESC
            $LIMIT "
        );
        $stmt->execute([
            'target_id' => 1
        ]);

        return $stmt->fetchAll();
    }
}
