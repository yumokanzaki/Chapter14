<?php
/*
   Represents a single row for the BindingType table. 
   
   This a concrete implementation of the Domain Model pattern.
 */
class BindingType extends DomainObject
{  
   
   static function getFieldNames() {
      return array('ID','BindingType');
   }

   public function __construct(array $data, $generateExc)
   {
      parent::__construct($data, $generateExc);
   }
   
   // implement any setters that need input checking/validation
}

?>