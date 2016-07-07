<?php
/**
 * Table Definition for professor
 */
require_once 'DB/DataObject.php';

class Professor extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'professor';                       // table name
    public $codigo;                          // int(4)  primary_key not_null
    public $nome;                            // varchar(70)   not_null
    public $telefone;                        // varchar(20)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('Professor',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
