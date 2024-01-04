<?php
class Team extends DatabaseObject
{
    protected static $table_name = "team";
    protected static $db_columns = ['id', 'category', 'nda_status', 'fullname', 'gender', 'personality', 'position', 'head', 'email', 'phone', 'brief_biography', 'linkedIn', 'photo', 'created_at', 'updated_at', 'deleted'];


    public $id;
    public $category;
    public $nda_status;
    public $fullname;
    public $gender;
    public $personality;
    public $position;
    public $head;
    public $email;
    public $phone;
    public $brief_biography;
    public $linkedIn;
    public $photo;
    public $created_at;
    public $updated_at;
    public $deleted;


    public $counts;

    public function __construct($args = [])
    {

        $this->category = $args['category'] ?? '';
        $this->nda_status = $args['nda_status'] ?? '';
        $this->fullname = $args['fullname'] ?? '';
        $this->gender = $args['gender'] ?? '';
        $this->personality = $args['personality'] ?? '';
        $this->position = $args['position'] ?? '';
        $this->head = $args['head'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->phone = $args['phone'] ?? '';
        $this->brief_biography = $args['brief_biography'] ?? '';
        $this->linkedIn = $args['linkedIn'] ?? '';
        $this->photo = $args['photo'] ?? '';
        $this->created_at = $args['created_at'] ?? date('Y-m-d H:i:s');
        $this->updated_at = $args['updated_at'] ?? '';
        $this->deleted = $args['deleted'] ?? '';
    }



    protected function validate()
    {
        $this->errors = [];

        if (is_blank($this->fullname)) {
            $this->errors[] = "First name cannot be blank.";
        } elseif (!has_length($this->fullname, array('min' => 2, 'max' => 255))) {
            $this->errors[] = "First name must be between 2 and 255 characters.";
        }

        // if(is_blank($this->image)) {
        //    $this->errors[] = "Kindly Select a image.";
        // }

        if (is_blank($this->email)) {
            $this->errors[] = "Email cannot be blank.";
        } elseif (!has_valid_email_format($this->email)) {
            $this->errors[] = "Email must be a valid format.";
        } elseif (!has_unique_email_team($this->email, $this->id ?? 0)) {
            $this->errors[] = "Email already exist. Try another.";
        }

        if (is_blank($this->phone)) {
            $this->errors[] = "Phone number cannot be blank.";
        }



        return $this->errors;
    }

    public static function get_teams()
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= " WHERE (deleted IS NULL OR deleted = 0 OR deleted = '') ";

        $sql .= "ORDER BY created_at DESC";
        return static::find_by_sql($sql);
    }
    public static function find_by_email($email)
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE email='" . self::$database->escape_string($email) . "'";
        $obj_array = static::find_by_sql($sql);
        if (!empty($obj_array)) {
            return array_shift($obj_array);
        } else {
            return false;
        }
    }


    public static function find_by_category($options = [])
    {
        $nda_status = $options['nda_status'] ?? false;
        $category = $options['category'] ?? false;
        $position = $options['position'] ?? false;
        $head = $options['head'] ?? false;

        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE (deleted IS NULL OR deleted = 0 OR deleted = '') ";

        if ($category) {
            $sql .= " AND category='" . self::$database->escape_string($category) . "'";
        }

        if ($nda_status) {
            $sql .= " AND nda_status='" . self::$database->escape_string($nda_status) . "'";
        }

        if ($position) {
            $sql .= " AND position='" . self::$database->escape_string($position) . "'";
        }

        if (isset($head)) {
            $sql .= " AND head='" . self::$database->escape_string($head) . "'";
        }


        $sql .= " ORDER BY id ASC ";
        // echo $sql;
        $obj_array = static::find_by_sql($sql);
        // if(!empty($obj_array)) {
        //   return array_shift($obj_array);
        // } else {
        //   return false;
        // }
        return $obj_array;
    }
}