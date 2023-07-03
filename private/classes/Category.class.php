<?php
class Category extends DatabaseObject
{
  protected static $table_name = "categories";
  protected static $db_columns = ['id', 'name', 'created_at', 'deleted'];

  public $id;
  public $name;
  public $created_at;
  public $deleted;

  public $counts;

  public function __construct($args = [])
  {
    $this->name        = $args['name'] ?? '';
    $this->created_at   = $args['created_at'] ?? date('Y-m-d H:i:s');
    $this->deleted      = $args['deleted'] ?? '';
  }

  protected function validate()
  {
    $this->errors = [];

    if (is_blank($this->name)) {
      $this->errors[] = "Category name is required.";
    }

    return $this->errors;
  }

  static public function find_all_categories()
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= " WHERE (deleted IS NULL OR deleted = 0 OR deleted = '') ";
    $sql .= " ORDER BY name ASC ";
    return static::find_by_sql($sql);
  }
}