<?php
class AccidentReport extends DatabaseObject
{
    protected static $table_name = "accident_reports";
    protected static $db_columns = ['id', 'case_id', 'report_number', 'date', 'location', 'Responding_team', 'number_of_vehicles', 'number_of_casualties', 'severity', 'actions_taken', 'additional_notes', 'created_by', 'created_at', 'updated_at', 'deleted'];

    public $id;
    public $case_id;
    public $report_number;
    public $date;
    public $location;
    public $Responding_team;
    public $number_of_vehicles;
    public $number_of_casualties;
    public $severity;
    public $actions_taken;
    public $additional_notes;
    public $created_by;
    public $created_at;
    public $updated_at;
    public $deleted;

    public function __construct($args = [])
    {
        $this->case_id = $args['case_id'] ?? '';
        $this->report_number = $args['report_number'] ?? '';
        $this->date = $args['date'] ?? '';
        $this->location = $args['location'] ?? '';
        $this->Responding_team = $args['Responding_team'] ?? '';
        $this->number_of_vehicles = $args['number_of_vehicles'] ?? '';
        $this->number_of_casualties = $args['number_of_casualties'] ?? '';
        $this->severity = $args['severity'] ?? '';
        $this->actions_taken = $args['actions_taken'] ?? '';
        $this->additional_notes = $args['additional_notes'] ?? '';
        $this->created_by = $args['created_by'] ?? '';
        $this->created_at = $args['created_at'] ?? date('Y-m-d H:i:s');
        $this->updated_at = $args['updated_at'] ?? date('Y-m-d H:i:s');
        $this->deleted = $args['deleted'] ?? '';
    }

    protected function validate()
    {
        $this->errors = [];

        if (is_blank($this->case_id)) {
            $this->errors[] = "Case ID cannot be blank.";
        } // Add more validation rules for case_id if needed

        // Add validation rules for other fields as needed

        return $this->errors;
    }

    // Add other methods as needed for interacting with accident report records

    // For example, methods to insert, update, find by case ID, etc.

    public static function find_by_case_id($case_id)
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE case_id='" . self::$database->escape_string($case_id) . "'";
        $obj_array = static::find_by_sql($sql);
        if (!empty($obj_array)) {
            return array_shift($obj_array);
        } else {
            return false;
        }
    }
}
?>