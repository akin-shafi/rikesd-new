<?php
class AimIndustryApplicants extends DatabaseObject
{


  protected static $table_name = "aim_industry_applicants";
  protected static $db_columns = ['id', 'application_no', 'name', 'email', 'phone', 'company', 'country', 'city', 'problem', 'expertise', 'requirements', 'industry', 'created_at'];

  
  public $id;
  public $application_no;
  public $name;
  public $email;
  public $phone;
  public $company;
  public $country;
  public $city;
  public $problem;
  public $expertise;
  public $requirements;
  public $industry;
  public $created_at;
  public $counts;

  public function __construct($args = [])
  {
    $this->application_no = $args['application_no'] ?? '';
    $this->name           = $args['name'] ?? '';
    $this->email          = $args['email'] ?? '';
    $this->phone          = $args['phone'] ?? '';
    $this->company        = $args['company'] ?? '';
    $this->country        = $args['country'] ?? '';
    $this->city           = $args['city'] ?? '';
    $this->problem        = $args['problem'] ?? '';
    $this->expertise      = $args['expertise'] ?? '';
    $this->requirements   = $args['requirements'] ?? '';
    $this->industry       = $args['industry'] ?? '';
    $this->created_at     = $args['created_at'] ?? date('Y-m-d H:i:s');
    
  }

  protected function validate()
  {
    $this->errors = [];

    if (is_blank($this->name)) {
      $this->errors[] = "Fullname field is required";
    }

    if (is_blank($this->email)) {
      $this->errors[] = "Email field is required";
    }

    if (is_blank($this->email)) {
        $this->errors[] = "Email cannot be blank.";
    }  elseif (!has_valid_email_format($this->email)) {
        $this->errors[] = "Email must be a valid format.";
    }elseif (!has_unique_email_aim_industry($this->email, $this->id ?? 0)) {
      $this->errors[] = "You have already completed the registration process.";
    }

    if (is_blank($this->phone)) {
      $this->errors[] = "Phone field is required";
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