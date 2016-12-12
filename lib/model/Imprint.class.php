<?php
/*
   Represents a single row for the Imprint table. 
   
   This a concrete implementation of the Domain Model pattern.
 */
class Imprint extends DomainObject
{  
   
   static function getFieldNames() {
      return array('ID','Imprint');
   }

   public function __construct(array $data, $generateExc)
   {
      parent::__construct($data, $generateExc);
   }
   
   // implement any setters that need input checking/validation
}

?>