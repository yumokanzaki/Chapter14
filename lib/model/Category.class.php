<?php
/*
   Represents a single row for the Category table. 
   
   This a concrete implementation of the Domain Model pattern.
 */
class Category extends DomainObject
{  
   
   static function getFieldNames() {
      return array('ID','CategoryName');
   }

   public function __construct(array $data, $generateExc)
   {
      parent::__construct($data, $generateExc);
   }
   
   // implement any setters that need input checking/validation
}

?>