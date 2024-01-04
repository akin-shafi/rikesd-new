<?php

class States extends DatabaseObject {

  protected static $table_name = "states";
  
  protected static $db_columns = ['id', 'name', 'country_id', 'country_code', 'fips_code', 
                                 'iso2', 'type', 'latitude', 'longitude', 'created_at',
                                 'updated_at', 'flag', 'wikiDataId'];

  public $id;
  
  public $name;
  
  public $country_id;
  
  public $country_code;
  
  public $fips_code;
  
  public $iso2;
  
  public $type;
  
  public $latitude;
  
  public $longitude;

  public $created_at;

  public $updated_at;
  
  public $flag;
  
  public $wikiDataId;

  public function __construct($args=[]) {

    $this->id = $args['id'] ?? 0;
    $this->name = $args['name'] ?? '';
    $this->country_id = $args['country_id'] ?? 0;
    $this->country_code = $args['country_code'] ?? '';
    $this->fips_code = $args['fips_code'] ?? '';
    $this->iso2 = $args['iso2'] ?? '';
    $this->type = $args['type'] ?? '';
    $this->latitude = $args['latitude'] ?? 0.0;
    $this->longitude = $args['longitude'] ?? 0.0;
    $this->created_at = $args['created_at'] ?? '';
    $this->updated_at = $args['updated_at'] ?? '';
    $this->flag = $args['flag'] ?? 0;
    $this->wikiDataId = $args['wikiDataId'] ?? '';

  }

}