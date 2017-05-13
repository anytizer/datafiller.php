<?php
/**
 * Data generator and migrator
 */
class datafiller
{
    private $table;

    public function __construct(string $table)
    {
        $this->table = $table;
		echo "\r\n";
        #echo "\r\n", "SET FOREIGN_KEY_CHECKS = FALSE;";
        echo "\r\n", "TRUNCATE TABLE `{$this->table}`;";
    }

    public function __destruct()
    {
        #echo "\r\n", "SET FOREIGN_KEY_CHECKS = TRUE;";
    }

    /**
     * Enter a row data
     */
    public function row()
    {
        $values = array_map(array($this, "wrap"), func_get_args());
        $values_csv = implode(", ", $values);
        $sql = "INSERT INTO {$this->table} VALUES ({$values_csv});";
        echo "\r\n", $sql;
        return $this;
    }

    private function wrap($value)
    {
        return "'".addslashes($value)."'";
    }
}