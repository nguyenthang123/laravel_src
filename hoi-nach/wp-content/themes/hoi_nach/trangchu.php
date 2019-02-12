<?php /* Template Name:trangchu */?>  
<?php
   if ( $detect->isMobile() ) {
        include "mobie/m_home.php";
   }
   else {
   	    include "home.php"; 
   }
 ?>