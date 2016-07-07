<?php
/**
 * Table Definition for matricula
 */
require_once 'DB/DataObject.php';

class Matricula extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'matricula';                       // table name
    public $aluno_codigo;                    // int(4)  primary_key not_null
    public $disciplina_codigo;               // int(4)  primary_key not_null
    public $semestre;                        // int(4)  primary_key not_null
    public $ano;                             // int(4)  primary_key not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('Matricula',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
