<?php 
class Product extends DatabaseObject
{
    protected static $table_name = "product";

    protected static $db_columns = ['id', 'ref_no', 'project_title', 'target_market', 'value_proposition', 'description', 'researcher_id', 'image', 'other_image', 'created_at', 'deleted'];

    public $id;
    public $ref_no;
    public $project_title;
    public $target_market;
    public $value_proposition;
    public $description;
    public $researcher_id;
    public $image;
    public $other_image;
    public $created_at;
    public $deleted;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? '';
        $this->ref_no = $args['ref_no'] ?? '';
        $this->project_title = $args['project_title'] ?? '';
        $this->target_market = $args['target_market'] ?? '';
        $this->value_proposition = $args['value_proposition'] ?? '';
        $this->description = $args['description'] ?? '';
        $this->researcher_id = $args['researcher_id'] ?? '';
        $this->image = $args['image'] ?? '';
        $this->other_image = $args['other_image'] ?? '';
        $this->created_at = $args['created_at'] ?? date('Y-m-d H:i:s');
        $this->deleted = $args['deleted'] ?? '';
    }
}


?>