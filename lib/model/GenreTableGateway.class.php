<?php
/*
  Table Data Gateway for the Genre table.
 */
class GenreTableGateway extends TableDataGateway
{    
   public function __construct($dbAdapter) 
   {
      parent::__construct($dbAdapter);
   }
  
   protected function getDomainObjectClassName()  
   {
      return "Genre";
   } 
   protected function getTableName()
   {
      return "Genres";
   }
   protected function getOrderFields() 
   {
      return 'GenreName';
   }
  
   protected function getPrimaryKeyName() {
      return "GenreID";
   }


   public function findForArtWork($artWorkId) {
      $sql = "SELECT Genres.GenreID as GenreID, GenreName, Era, Description, Link FROM Genres INNER JOIN ArtWorkGenres ON Genres.GenreID = ArtWorkGenres.GenreID WHERE ArtWorkGenres.ArtWorkID=?";

      $result = $this->dbAdapter->fetchAsArray($sql, Array($artWorkId));    

      return $this->convertRecordsToObjects($result); 
   }
}

?>