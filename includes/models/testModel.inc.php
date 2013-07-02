<?php

/*
 * Test Class
 * 
 * This class handles all the database saving and retrieval for the cardsort tests
 * 
 * @author Michael Weslander
 */

class TestModel extends BaseModel
{
    // Static Parameters
    protected static $table_name = 'usort_tests';
    protected static $db_fields = array('id', 'ts_id', 'cs_finished');
    
    // Public Parameters
    public $id; // Database ID for usort_tests
    public $ts_id; // Test subject ID
    public $cs_finished; // Datetime for when the test is completed

    // Construtor Method
    public function __construct() 
    {
        // Instantiates BaseModel
        parent::__construct();
    }
    
    // Create Method
    
    // Update Method
    
    // Delete Method
    
}