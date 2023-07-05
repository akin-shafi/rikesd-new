<?php
class TeamCategory extends DatabaseObject
{
    protected static $table_name = "team_category";
    protected static $db_columns = ['id','name','created_at','updated_at','deleted'];

    public $id;
    public $name;
    public $created_at;
    public $updated_at;
    public $deleted;

    public $counts; 

    
    public function __construct($args=[])
    {
        $this->name = $args['name'] ?? '';

        $this->created_at = $args['created_at'] ?? date('Y-m-d H:i:s');
        $this->updated_at = $args['updated_at'] ?? '';
        $this->deleted = $args['deleted'] ?? '';
    }

    
    protected function validate()
    {
        $this->errors = [];

        if (is_blank($this->name)) {
            $this->errors[] = "Category name cannot be blank.";
        } elseif (!has_length($this->name, array('min' => 2, 'max' => 255))) {
            $this->errors[] = "Category name must be between 2 and 255 characters.";
        }

        return $this->errors;
    }

    public static function find_by_name($name)
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE name='" . self::$database->escape_string($name) . "'";
        $obj_array = static::find_by_sql($sql);
        if (!empty($obj_array)) {
            return array_shift($obj_array);
        } else {
            return false;
        }
    }

}
