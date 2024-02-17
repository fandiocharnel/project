<?php 
    /**
     * 
     */
    class Package
    {
        
       public function getErreur($error)
        {
           $msg= strtoupper($error['type']). '!!!!! \n';
           $msg= $msg.'*****************';
           $msg= $msg.$error['message'].'\n';

           echo '<script type="text/javascript">';
           echo 'alert("'.$msg.'");';
           echo '</script>';
        }
    }
 ?>