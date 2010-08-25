<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
    	   $q = Doctrine_Query::create();
    	   $q->from('Offer o')
    	     ->where('o.id = ?', 1);
    	     
  
    	     
    	   /** 
    	    * @var $offer Offer
    	    */  
           $offer = $q->fetchOne();
           
           Zend_Debug::dump($offer->Company->name);
    }


}

