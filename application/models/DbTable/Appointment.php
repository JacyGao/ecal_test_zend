<?php

class Application_Model_DbTable_Appointment extends Zend_Db_Table_Abstract
{

    public function __construct()
    {
        $connection = new Mongo("mongodb://jacy:temp@localhost"); // connect
        $db = $connection->selectDB("ecal");
    }

    public $_name = 'appointment';
}

