<?php

class Commercialisation extends DatabaseObject {

  protected static $table_name = "commercialisation";

  protected static $db_columns = ['id', 'firstname', 'lastname', 'email', 'phone',  
                                 'projectTitle', 'projectDescription', 'targetMarket', 
                                 'valueProposition', 'contactMethod', 'application_no',
                                 'created_at'];
   
  public $id;

  public $firstname;

  public $lastname;

  public $email;

  public $phone;

  public $projectTitle;

  public $projectDescription;

  public $targetMarket;

  public $valueProposition;

  public $contactMethod;

  public $application_no;

  public $created_at;

  public function __construct($args=[]) {
    $this->firstname = $args['firstname'] ?? '';
    $this->lastname = $args['lastname'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->phone = $args['phone'] ?? '';
    $this->projectTitle = $args['projectTitle'] ?? '';
    $this->projectDescription = $args['projectDescription'] ?? '';
    $this->targetMarket = $args['targetMarket'] ?? '';
    $this->valueProposition = $args['valueProposition'] ?? '';
    $this->contactMethod = $args['contactMethod'] ?? '';
    $this->application_no = $args['application_no'] ?? '';
    $this->created_at = $args['created_at'] ?? '';

  }

}