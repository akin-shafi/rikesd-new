<?php

class Researcher extends DatabaseObject
{
    protected static $table_name = "researcher";

    protected static $db_columns = ['id', 'researcher_id', 'firstname', 'lastname', 'email', 'phone', 'preferred_contact_method', 'created_at', 'deleted', 'profile_img'];

    public $id;
    public $researcher_id;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $preferred_contact_method;
    public $created_at;
    public $deleted;
    public $profile_img;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? '';
        $this->researcher_id = $args['researcher_id'] ?? '';
        $this->firstname = $args['firstname'] ?? '';
        $this->lastname = $args['lastname'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->phone = $args['phone'] ?? '';
        $this->preferred_contact_method = $args['preferred_contact_method'] ?? '';
        $this->created_at = $args['created_at'] ?? date('Y-m-d H:i:s');
        $this->deleted = $args['deleted'] ?? '';
        $this->profile_img = $args['profile_img'] ?? '';
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

    public static function find_by_researcher_id($researcher_id)
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE researcher_id='" . self::$database->escape_string($researcher_id) . "'";
        $obj_array = static::find_by_sql($sql);
        if (!empty($obj_array)) {
            return array_shift($obj_array);
        } else {
            return false;
        }
    }
}

?>