<?
namespace Queries;

class Insert {

  public function LAST_INSERT_ID($stmt, $array) {
    GLOBAL $PDO;
    $stmt->execute($array);
    return $PDO->lastInsertId();;
  }
}

class Select {

  public function FETCH_ALL($stmt, $array) {
    $stmt->execute($array);
    return $stmt->fetchAll();
  }

  public function FETCH($stmt, $array) {
    $stmt->execute($array);
    return $stmt->fetch();
  }
}
