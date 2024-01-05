<?php
class ResearchNeed extends DatabaseObject
{
    protected static $table_name = "research_need";
    protected static $db_columns = ['id', 'need', 'created_at', 'deleted'];

    public $id;
    public $need;
    public $created_at;
    public $deleted;


    public $counts;

    public function __construct($args = [])
    {
        $this->need = $args['need'] ?? '';
        $this->created_at = $args['created_at'] ?? '';
        $this->deleted = $args['deleted'] ?? '';
    }

    static public function find_by_research_needed($options = [])
    {

        $order = $options['order'] ?? '';

        $sql = "SELECT * FROM " . static::$table_name . " ";
        //   $sql .= "WHERE deleted = 0 ";
        $sql .= " WHERE (deleted IS NULL OR deleted = 0 OR deleted = '') ";

        if ($order) {
            $sql .= " ORDER BY need " . self::$database->escape_string($order) . " ";
        } else {
            $sql .= " ORDER BY need ASC ";
        }
        // echo $sql;

        return static::find_by_sql($sql);
    }
}
