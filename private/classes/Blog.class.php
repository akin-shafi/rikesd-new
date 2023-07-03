<?php
class Blog extends DatabaseObject
{
  protected static $table_name = "blogs";
  protected static $db_columns = ['id', 'title','category_id', 'summary', 'description', 'thumbnail', 'main', 'status', 'featured', 'duration', 'created_at',  'deleted'];

  public $id;
  public $title;
  public $category_id;
  public $summary;
  public $description;
  public $thumbnail;
  public $main;
  public $status;
  public $featured;
  public $duration;
  public $created_at;
  public $deleted;

  public $counts;

  public function __construct($args = [])
  {
    $this->title            = $args['title'] ?? '';
    $this->category_id      = $args['category_id'] ?? '';
    $this->summary          = $args['summary'] ?? '';
    $this->description      = $args['description'] ?? '';
    $this->thumbnail        = $args['thumbnail'] ?? 'https://via.placeholder.com/150';
    $this->main             = $args['main'] ?? 'https://via.placeholder.com/1000x400';
    $this->status           = $args['status'] ?? '';
    $this->featured           = $args['featured'] ?? 0;
    $this->duration           = $args['duration'] ?? '';
    $this->created_at       = $args['created_at'] ?? date('Y-m-d H:i:s');
    $this->deleted          = $args['deleted'] ?? '';
  }

  protected function validate()
  {
    $this->errors = [];

    if (is_blank($this->title)) {
      $this->errors[] = "Kindly enter title field";
    }


    if (is_blank($this->category_id)) {
      $this->errors[] = "Kindly select a category";
    }

    if (is_blank($this->summary)) {
      $this->errors[] = "summary field is required";
    }

    return $this->errors;
  }

  public static function get_blogs()
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= " WHERE (deleted IS NULL OR deleted = 0 OR deleted = '') ";

    $sql .= "ORDER BY created_at DESC";
    return static::find_by_sql($sql);
  }

  public static function find_featured_post($featured)
  { 
      $status = 2;
      $sql = "SELECT * FROM " . static::$table_name . " ";
      $sql .= " WHERE (deleted IS NULL OR deleted = 0 OR deleted = '') ";
      $sql .= "AND featured=" . self::$database->escape_string($featured) ." ";
      $sql .= "AND status=" . self::$database->escape_string($status) ."";
      // echo $sql;
      $obj_array = static::find_by_sql($sql);
      if (!empty($obj_array)) {
          return array_shift($obj_array);
      } else {
          return false;
      }
  }

  public static function find_by_status($options=[])
    {
        $status = $options['status'] ?? false;
        $sql = "SELECT * FROM " . static::$table_name . " ";
        

        if ($status) {
          $sql .= "WHERE status ='" . self::$database->escape_string($status) . "'";
        }else{
            $sql .= "WHERE (deleted IS NULL OR deleted = 0 OR deleted = '') ";
        }
        $sql .= " AND (deleted IS NULL OR deleted = 0 OR deleted = '') ";
        $sql .= " ORDER BY id DESC ";
        $obj_array = static::find_by_sql($sql);
        return $obj_array;
    }

  
    public static function find_by_category($options=[])
    {
        $category_id = $options['category_id'] ?? false;
        $limit  = $options['limit'] ?? 0;
        $status = 2;

        $sql = "SELECT * FROM " . static::$table_name . " ";
        
        if ($category_id) {
          $sql .= "WHERE category_id ='" . self::$database->escape_string($category_id) . "'";
        }else{
            $sql .= "WHERE (deleted IS NULL OR deleted = 0 OR deleted = '') ";
        }
        $sql .= " AND (deleted IS NULL OR deleted = 0 OR deleted = '') ";
        $sql .= "AND status=" . self::$database->escape_string($status) ."";

        if ($limit) {
         $sql .= " ORDER BY id DESC LIMIT ". $limit;
        }else{
          $sql .= " ORDER BY id DESC";
        }
        $obj_array = static::find_by_sql($sql);
        return $obj_array;
    }
  public static function find_by_summary($cId)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE summary='" . self::$database->escape_string($cId) . "'";
    $sql .= " AND (deleted IS NULL OR deleted = 0 OR deleted = '') ";
    $obj_array = static::find_by_sql($sql);
    if (!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }
}