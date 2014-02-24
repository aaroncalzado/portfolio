<?php 

class kirbytextExtended extends kirbytext {
  
  function __construct($text, $markdown=true) {
    
    parent::__construct($text, $markdown);
    
    /*   

    // define custom tags
    $this->addTags('mynewtag', 'anothertag');
    
    // define custom attributes
    $this->addAttributes('mynewattribute', 'anotherattribute');    
    
    */
                
  }  

  /*
  
  // define a function for each new tag you specify  
  
  function mynewtag($params) {
    // do something with the passed params here.
  }
  
  */
  
}

?>