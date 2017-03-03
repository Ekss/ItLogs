<?php


namespace App\Http\Controllers;

class PagesController extends Controller
{
	
    public function getLogs(){
    	return view ('pages.homelogs');
    }
    
    public function getAddLogs(){
    	return view ('pages.addlogs');
    }  
    
    public function edittLogs(){

    }
  

    public function destroyLogs(){

    }

}