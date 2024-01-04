<?php
class AimInstitution extends DatabaseObject
{
  protected static $table_name = "aim_institution";
  protected static $db_columns = ['id', 'institutionName', 'institutionType', 'email', 'phone', 'address', 'country', 'city', 'description', 'goals', 'contactPerson', 'contactPersonRole', 'created_at'];

  public $id;
  public $institutionName;
  public $institutionType;
  public $email;
  public $phone;
  public $address;
  public $country;
  public $city;
  public $description;
  public $goals;
  public $contactPerson;
  public $contactPersonRole;
  public $created_at;

  public function __construct($args = [])
  {
    $this->institutionName = $args['institutionName'] ?? '';
    $this->institutionType = $args['institutionType'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->phone = $args['phone'] ?? '';
    $this->address = $args['address'] ?? '';
    $this->country = $args['country'] ?? '';
    $this->city = $args['city'] ?? '';
    $this->description = $args['description'] ?? '';
    $this->goals = $args['goals'] ?? '';
    $this->contactPerson = $args['contactPerson'] ?? '';
    $this->contactPersonRole = $args['contactPersonRole'] ?? '';
    $this->created_at = $args['created_at'] ?? date('Y-m-d H:i:s');
  }

  protected function validate()
  {
    $this->errors = [];

    if (is_blank($this->institutionName)) {
      $this->errors[] = "Institution Name field is required";
    }

    if (is_blank($this->institutionType)) {
      $this->errors[] = "Institution Type field is required";
    }

    if (is_blank($this->email)) {
      $this->errors[] = "Email field is required";
    }

    if (is_blank($this->email)) {
      $this->errors[] = "Email cannot be blank.";
    } elseif (!has_valid_email_format($this->email)) {
      $this->errors[] = "Email must be a valid format.";
    } elseif (!has_unique_email_aim_institution($this->email, $this->id ?? 0)) {
      $this->errors[] = "You have already completed the registration process.";
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