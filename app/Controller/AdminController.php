<?php 

/**
 * 
 */
 class AdminController extends AppController
 {
 	
 	public function login()
 	{
 		$this->layout='Admin\login';

 	}

 	public function index()
 	{
 		$this->layout='admin_view';
 	}



 } ?>