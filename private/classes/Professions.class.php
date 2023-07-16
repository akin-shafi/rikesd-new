<?php
class Professions extends DatabaseObject
{
    protected static $table_name = "professions";
    protected static $db_columns = ['id', 'profession',  'created_at', 'deleted'];

    public $id;
    public $profession;
    public $created_at;
    public $deleted;


    public $counts; 

    public function __construct($args=[])
    {
    $this->profession = $args['profession'] ?? '';
    $this->created_at = $args['created_at'] ?? '';
    $this->deleted = $args['deleted'] ?? '';
    }
 


   
}
