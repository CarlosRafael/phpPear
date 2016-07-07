<?php
/**
 * Table Definition for disciplina
 */
require_once 'DB/DataObject.php';

class Disciplina extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'disciplina';                      // table name
    public $codigo;                          // int(4)  primary_key not_null
    public $nome;                            // varchar(70)   not_null
    public $professor_codigo;                // int(4)   not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('Disciplina',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
