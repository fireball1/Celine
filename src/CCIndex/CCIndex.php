<?php
/**
* Standard controller layout.
* 
* @package CelineCore
*/
class CCIndex implements IController {

    /**
    * Implementing interface IController. All controllers must have an index action.
    */
    public function Index() {   
        global $ce;
        $ce->data['title'] = "The Index Controller";
        $ce->data['main'] = "<h1>The Index Controller</h1>";
   }

}
?>
