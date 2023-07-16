<?php
class Programs extends DatabaseObject
{
  protected static $table_name = "programs";

    protected static $db_columns = ['id', 'name', 'topic', 'theme', 'date', 'image_url', 'created_at', 'created_by', 'deleted'];

    public $id;
    public $name;
    public $topic;
    public $theme;
    public $date;
    public $image_url;
    public $created_at;
    public $created_by;
    public $deleted;

    public function __construct($args = []) {
        $this->id         = $args['id'] ?? '';
        $this->name       = $args['name'] ?? '';
        $this->topic      = $args['topic'] ?? '';
        $this->theme      = $args['theme'] ?? '';
        $this->date       = $args['date'] ?? '';
        $this->image_url  = $args['image_url'] ?? '';
        $this->created_at = $args['created_at'] ?? date('Y-m-d H:i:s');
        $this->created_by = $args['created_by'] ?? '';
        $this->deleted    = $args['deleted'] ?? '';
    }


  protected function validate()
  {
    $this->errors = [];

    if (is_blank($this->name)) {
      $this->errors[] = "name is required.";
    }

    return $this->errors;
  }

  // static public function find_all_categories()
  // {
  //   $sql = "SELECT * FROM " . static::$table_name . " ";
  //   $sql .= " WHERE (deleted IS NULL OR deleted = 0 OR deleted = '') ";
  //   $sql .= " ORDER BY name ASC ";
  //   return static::find_by_sql($sql);
  // }
}