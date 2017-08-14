<?php 

/**
 * 
 */
 class UserController extends AppController
 {
 	
 	public function view_active()
 	{
        $this->layout = 'default_small_ad';
        $this->set('title_for_layout', 'View Active Users');
 	}

 } ?>