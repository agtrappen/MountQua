<?php
  /**
  * redirect method
  * @deprecated Simple page redirect, puts the $page variable in the URLROOT
  * @param string $page
  * @return $page into the url
  **/
  function redirect($page){
    header('location: '.URLROOT.'/'.$page);
  }
