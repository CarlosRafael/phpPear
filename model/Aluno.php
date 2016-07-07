<?php
/**
 * Table Definition for aluno
 */
require_once 'DB/DataObject.php';

class Aluno extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'aluno';                           // table name
    public $codigo;                          // int(4)  primary_key not_null
    public $nome;                            // varchar(70)   not_null
    public $telefone;                        // varchar(20)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('Aluno',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    
    public function lista(){
		
			$tpl = new HTML_Template_Sigma(VIEW_DIR.'/aluno');
			$tpl->loadTemplateFile('listar_alunos.html');
			
			while($this->fetch()){
					$tpl->setVariable('codigo',$this->codigo);
					$tpl->setVariable('nome',$this->nome);
					
					$tpl->parse('linha');
					
			}
			
			return $tpl->get();
			
	}
}
