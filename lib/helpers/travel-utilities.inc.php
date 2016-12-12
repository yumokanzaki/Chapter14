<?php

function displayImagesThumbnails($images) {

   foreach ($images as $img) { 
            
      echo '<div class="col-md-3">';
      echo '<a href="single-image.php?id=' . $img->ImageID . '" class="thumbnail bottomspacing" >';
      echo '<img src="images/travel/square/' . $img->Path . '" alt="' . $img->Title . '" title="' . $img->Title . '">';
      echo '</a>';
      echo '</div>';

   }
}

function retrieveImages($imagesGate, $city, $country) {
   $images = null;
   if ($_SERVER['REQUEST_METHOD'] == 'GET' && ( isset($city) || isset($country))) {
      $parameters = Array();
      $where = "";
      
      if (isset($country) && $country != 'ZZZ') {
         $where = "CountryCodeISO=?";
         $parameters[] = $country;
      }
      if (isset($city) && $city != 0) {
         if (! empty($where) ) {
            $where .= " AND ";
         }
         $where .= " CityCode=?";
         $parameters[] = $city;   
      }  
      if (! empty($where)) {
         $images = $imagesGate->findBy($where, $parameters, 'Title');
      }
   }
   if (is_null($images)) {
      $images = $imagesGate->findAllSorted(true);
   }  
   return $images;
}

function generateUserLink($user) {
   $userEncoded =  utf8_encode($user->FirstName . ' ' . $user->LastName) ;
   return generateLink("single-user.php?id=" . $user->UID,$userEncoded,null);
}

function outputPostRow($post, $dbAdapter)  {
   
   // super inefficient (way too many database accesses) but clear to understand
   $imagesGate = new TravelImageTableGateway($dbAdapter);
   $imageForPost = $imagesGate->findById( $post->MainPostImage );
   
   
   $postLink = 'single-post.php?id='. $post->PostID;   
   $image = '<img src="images/travel/square/' . $imageForPost->Path . '" alt="' . $post->Title . '" class="img-thumbnail"/>';   


   echo '<div class="row">';
   echo '<div class="col-md-2">';   
   echo generateLink($postLink, $image, null);
   echo '</div>';
   echo '<div class="col-md-10">';
   echo '<h2>' . $post->Title . '</h2>';
   echo '<div class="details">'; 

   echo 'Posted by ' . generateUserLink($post);
   echo '<span class="pull-right">' . date("Y/m/d", strtotime($post->PostTime)) . '</span>';
   echo '</div>';
   echo '<p class="excerpt">';
   
   $excerpt = substr($post->Message, 0, 200);
   
   echo $excerpt . ' ...';
   echo '</p>';
   echo '<p>' . generateLink($postLink, 'Read more', 'btn btn-primary btn-sm') . '</p>';
   echo '</div>';
   echo '</div>';
}

function generateLink($url, $label, $class) {
   $link = '<a href="' . $url . '" class="' . $class . '">';
   $link .= $label;
   $link .= '</a>';
   return $link;
}


function ouputPagination($startNum, $currentNum) {
   echo '<ul class="pagination">';
   $disabled = '';
   if ($startNum <= 10) $disabled = ' class="disabled"';
   echo '<li' . $disabled . '>' . generateLink("#","&laquo;",null) . '</li>';
   
   $number = $startNum;
   for ($i=0; $i < 10; $i++) {
      $active = '';
      if ($number == $currentNum) $active = ' class="active"';
      echo '<li' . $active . '>';
      echo generateLink('#', $number,null);
      $number++;
   }

           
   echo '<li><a href="#">&raquo;</a></li>';
   echo '</ul>';
     
}


?>