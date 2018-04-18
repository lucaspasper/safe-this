<?php

class VwOcurrencesModel extends BaseModel {
    protected static $table = "VW_OCURRENCES_TABLE";
    protected static $primaryKey = "Id";
    protected $fields = array(
        'Id',
        'Description',
        'Place',
        'Status',
        'Priority',
        'Files',
        'Ocurrence_Priority_Id',
        'Ocurrence_Status_Id', 
        'Opening_Date'
    );
}

?>