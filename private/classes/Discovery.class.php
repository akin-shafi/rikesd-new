<?php
class Discovery extends DatabaseObject
{
    protected static $table_name = "discoveries";

    protected static $db_columns = ['id', 'discovery_name', 'theme', 'image_url', 'date', 'topic', 'deleted'];

    public $id;
    public $discovery_name;
    public $theme;
    public $image_url;
    public $date;
    public $topic;
    public $deleted;

    public function __construct($args = []) {
        $this->id             = $args['id'] ?? '';
        $this->discovery_name = $args['discovery_name'] ?? '';
        $this->theme          = $args['theme'] ?? '';
        $this->image_url          = $args['image_url'] ?? '';
        $this->date           = $args['date'] ?? '';
        $this->topic          = $args['topic'] ?? '';
        $this->deleted          = $args['deleted'] ?? '';
    }
}
?>