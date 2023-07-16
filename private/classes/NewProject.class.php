<?php
class NewProject extends DatabaseObject
{
    protected static $table_name = "project_application";
    protected static $db_columns = ['id', 'need', 'email', 'otp', 'profession', 'specialization', 'firstname', 'lastname', 'phone', 'country', 'state', 'address', 'created_at', 'updated_at'];

    public $id;
    public $need;
    public $email;
    public $otp;
    public $profession;
    public $specialization;
    public $firstname;
    public $lastname;
    public $phone;
    public $country;
    public $state;
    public $address;

    public $created_at;
    public $updated_at;

    public $counts; 

    public function __construct($args=[])
    {
    $this->need = $args['need'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->otp = $args['otp'] ?? '';
    $this->profession = $args['profession'] ?? '';
    $this->specialization = $args['specialization'] ?? '';
    $this->firstname = $args['firstname'] ?? '';
    $this->lastname = $args['lastname'] ?? '';
    $this->phone = $args['phone'] ?? '';
    $this->country = $args['country'] ?? '';
    $this->state = $args['state'] ?? '';
    $this->address = $args['address'] ?? '';
    $this->created_at = $args['created_at'] ?? '';
    $this->updated_at = $args['updated_at'] ?? '';
    }
 

    public function full_name()
    {
        return $this->firstname . " " . $this->lastname;
    }


    
    protected function validate()
    {
        $this->errors = [];

        if (is_blank($this->firstname)) {
            $this->errors[] = "First name cannot be blank.";
        } elseif (!has_length($this->firstname, array('min' => 2, 'max' => 255))) {
            $this->errors[] = "First name must be between 2 and 255 characters.";
        }

        if (is_blank($this->lastname)) {
            $this->errors[] = "Last name cannot be blank.";
        } elseif (!has_length($this->lastname, array('min' => 2, 'max' => 255))) {
            $this->errors[] = "Last name must be between 2 and 255 characters.";
        }
        if (is_blank($this->email)) {
            $this->errors[] = "Email cannot be blank.";
        }  elseif (!has_valid_email_format($this->email)) {
            $this->errors[] = "Email must be a valid format.";
        }
        // elseif (!has_unique_applicant_email($this->email, $this->id ?? 0)) {
        //   $this->errors[] = "Email already exist. Try another.";
        // }

        if (is_blank($this->phone)) {
            $this->errors[] = "Phone number cannot be blank.";
        } 

        

        return $this->errors;
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

    public static function find_by_otp($otp)
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE otp='" . self::$database->escape_string($otp) . "'";
        $obj_array = static::find_by_sql($sql);
        if (!empty($obj_array)) {
            return array_shift($obj_array);
        } else {
            return false;
        }
    }
}
