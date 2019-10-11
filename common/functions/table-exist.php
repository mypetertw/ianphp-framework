<?
/**
 * Check if a table exists in the current database.
 *
 * @param PDO $PDO PDO instance connected to a database.
 * @param string $table Table to search for.
 * @return bool TRUE if table exists, FALSE if no table found.
 */
function TABLE_EXIST($table) {
    GLOBAL $PDO;

    // Try a select statement against the table
    // Run it in try/catch in case PDO is in ERRMODE_EXCEPTION.
    try {
        $result = $PDO->query("SELECT 1 FROM $table LIMIT 1");
    } catch (Exception $e) {
    // We got an exception == table not found
        return FALSE;
    }

    // Result is either boolean FALSE (no table found) or PDOStatement Object (table found)
    return $result !== FALSE;
}
