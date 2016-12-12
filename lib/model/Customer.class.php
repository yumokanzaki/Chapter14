<?php
/*
   Represents a single row for the Customer table. 
   
   This a concrete implementation of the Domain Model pattern.
 */
class Customer extends DomainObject
{  
   
   static function getFieldNames() {
      return array('ID','FirstName','LastName','Email','University','Address','City','Region','Country','Postal','Phone');
   }

   public function __construct(array $data, $generateExc)
   {
      parent::__construct($data, $generateExc);
   }
   
   // implement any setters that need input checking/validation
   
   public function getFullName($commaDelimited)
   {
      if ($commaDelimited)
         return $this->LastName . ', ' . $this->FirstName;
      else
         return $this->FirstName . ' ' . $this->LastName;
   }
}

?>