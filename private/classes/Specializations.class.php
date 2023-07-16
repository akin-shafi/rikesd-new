<?php
class Specializations extends DatabaseObject
{
    protected static $table_name = "specialization";
    protected static $db_columns = ['id', 'sub_profession', 'category', 'created_at', 'deleted'];

    public $id;
    public $sub_profession;
    public $category;
    public $created_at;
    public $deleted;


    public $counts; 

    public function __construct($args=[])
    {
    $this->sub_profession = $args['sub_profession'] ?? '';
    $this->category = $args['category'] ?? '';
    $this->created_at = $args['created_at'] ?? '';
    $this->deleted = $args['deleted'] ?? '';
    }

    public static function find_by_category($options=[])
    {
        $category = $options['category'] ?? false;
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE (deleted IS NULL OR deleted = 0 OR deleted = '') ";

        if ($category) {
          $sql .= " AND category='" . self::$database->escape_string($category) . "'";
        }
        
        $sql .= " AND (deleted IS NULL OR deleted = 0 OR deleted = '') ";
        $sql .= " ORDER BY id ASC ";
        // echo $sql;
        $obj_array = static::find_by_sql($sql);
        return $obj_array;
    }
 

}
