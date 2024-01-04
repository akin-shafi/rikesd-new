<?php
class AimAcademicApplicants extends DatabaseObject
{
  protected static $table_name = "aim_academic_applicants";
  protected static $db_columns = ['id', 'application_no', 'firstname', 'lastname', 'email', 'phone', 'institution', 'country', 'city', 'expertise', 'interests', 'motivation', 'availability', 'created_at'];

  public $id;
  public $application_no;
  public $firstname;
  public $lastname;
  public $email;
  public $phone;
  public $institution;
  public $country;
  public $city;
  public $expertise;
  public $interests;
  public $motivation;
  public $availability;
  public $created_at;
  public $counts;

  public function __construct($args = [])
  {
    $this->application_no    = $args['application_no'] ?? '';
    $this->firstname    = $args['firstname'] ?? '';
    $this->lastname     = $args['lastname'] ?? '';
    $this->email        = $args['email'] ?? '';
    $this->phone        = $args['phone'] ?? '';
    $this->institution  = $args['institution'] ?? '';
    $this->country      = $args['country'] ?? '';
    $this->city         = $args['city'] ?? '';
    $this->expertise    = $args['expertise'] ?? '';
    $this->interests    = $args['interests'] ?? '';
    $this->motivation   = $args['motivation'] ?? '';
    $this->availability = $args['availability'] ?? '';
    $this->created_at   = $args['created_at'] ?? date('Y-m-d H:i:s');
  }

  protected function validate()
  {
    $this->errors = [];

    if (is_blank($this->firstname)) {
      $this->errors[] = "Firstname field is required";
    }


    if (is_blank($this->lastname)) {
      $this->errors[] = "Lastname field is required";
    }

    if (is_blank($this->email)) {
      $this->errors[] = "Email field is required";
    }

    if (is_blank($this->email)) {
        $this->errors[] = "Email cannot be blank.";
    }  elseif (!has_valid_email_format($this->email)) {
        $this->errors[] = "Email must be a valid format.";
    }elseif (!has_unique_email_aim_academic($this->email, $this->id ?? 0)) {
      $this->errors[] = "You have already completed the registration process.";
    }


    return $this->errors;
  }
  public function full_name()
  {
      return $this->firstname . " " . $this->lastname;
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

  public static function find_by_application_no($application_no)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE application_no='" . self::$database->escape_string($application_no) . "'";
    $sql .= " AND (deleted IS NULL OR deleted = 0 OR deleted = '') ";
    $obj_array = static::find_by_sql($sql);
    if (!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }
}