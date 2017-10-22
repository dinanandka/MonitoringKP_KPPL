
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_admin_test
 *
 * @author Dina
 */
class c_admin_test extends TestCase {

   public function test_index()
	{
		$_SESSION['username'] = "admin";
		$_SESSION['level'] = "admin";
		$output = $this->request('GET', 'c_admin/index');
		$this->assertContains('<title>SISFOR KP - Admin Dashboard</title>', $output); //yg dituju ... index.html
	}
	
	public function test_index_bukanadmin()
    {
			$_SESSION['level'] != "admin";
            $output = $this->request('GET', 'c_admin/index');
            $this->assertFalse( isset($_SESSION['level'], $output) );
			$this->assertRedirect('auth');
    }	
        public function test_activity()
	{
		$_SESSION['username'] = "admin";
		$_SESSION['level'] = "admin";
		$output = $this->request('GET', 'c_admin/activity');
		$this->assertContains('<title>SISFOR KP - Admin Activity</title>', $output); //yg dituju ... index.html
	}
        public function test_mahasiswa()
	{
		$_SESSION['username'] = "admin";
		$_SESSION['level'] = "admin";
		$output = $this->request('GET', 'c_admin/mahasiswa');
		$this->assertContains('<title>SISFOR KP - Daftar Mahasiswa</title>', $output); //yg dituju ... index.html
	}
	
		public function test_logout(){ 
           $_SESSION['username'] = "admin"; 
           $_SESSION['level'] = "admin"; 
           $_SESSION['logged_in'] = TRUE; 
           $output = $this->request('GET','c_admin/logout'); 
           $this->assertRedirect('auth'); 
		   } 
}
