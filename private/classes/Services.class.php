<?php
class Services extends DatabaseObject
{
    protected static $table_name = "services";
    protected static $db_columns = ['id', 'item',  'page', 'description', 'category', 'sub_category', 'created_at', 'deleted'];

    public $id;
    public $item;
    public $page;
    public $description;
    public $category;
    public $sub_category;
    public $created_at;
    public $deleted;


    public $counts; 

    public function __construct($args=[])
    {
        $this->item = $args['item'] ?? '';
        $this->page = $args['page'] ?? '';
        $this->description = $args['description'] ?? '';
        $this->category = $args['category'] ?? '';
        $this->sub_category = $args['sub_category'] ?? '';
        $this->created_at = $args['created_at'] ?? '';
        $this->deleted = $args['deleted'] ?? '';
    }

    public static function find_by_category($options=[])
    {
        $category = $options['category'] ?? '';
        $sub_category = $options['sub_category'] ?? '';
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE (deleted IS NULL OR deleted = 0 OR deleted = '') ";

        if ($category) {
          $sql .= " AND category='" . self::$database->escape_string($category) . "'";
        }

        if ($sub_category) {
            $sql .= " AND sub_category='" . self::$database->escape_string($sub_category) . "'";
          }
        
        $sql .= " ORDER BY id ASC ";
        // echo $sql;
        $obj_array = static::find_by_sql($sql);
        return $obj_array;
    }
 


   
}
