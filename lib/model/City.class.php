<?php
/*
   Represents a single row for the City table. 
   
   This a concrete implementation of the Domain Model pattern.
 */
class City extends DomainObject
{  
   
   static function getFieldNames() {
      return array('GeoNameID','AsciiName','CountryCodeISO','Latitude','Longitude','Population','Elevation');
   }

   public function __construct(array $data, $generateExc)
   {
      parent::__construct($data, $generateExc);
   }
   
   // implement any setters that need input checking/validation
}

?>