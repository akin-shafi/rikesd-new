<?php
class ResearchNeed extends DatabaseObject
{
    protected static $table_name = "research_need";
    protected static $db_columns = ['id', 'need',  'created_at', 'deleted'];

    public $id;
    public $need;
    public $created_at;
    public $deleted;


    public $counts; 

    public function __construct($args=[])
    {
    $this->need = $args['need'] ?? '';
    $this->created_at = $args['created_at'] ?? '';
    $this->deleted = $args['deleted'] ?? '';
    }
 


   
}
