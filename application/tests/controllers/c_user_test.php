<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_ervina_test
 *
 * @author Dina
 */
class c_user_test extends TestCase {

	
   public function test_index()
	{
		$_SESSION['username'] = "ervina";
		$_SESSION['level'] = "user";
		$output = $this->request('GET', 'c_user/index');
		$this->assertContains('<title>Sistem Monitoring KP - Sisfor ITS</title>', $output); //yg dituju ... index.html
		//$this->assertRedirect('auth');
	}
        
        public function test_lapor()
	{
		$_SESSION['username'] = "ervina";
		$_SESSION['level'] = "user";
		$output = $this->request('GET', 'c_user/lapor');
		$this->assertContains('<title>Laporan Kerja Praktik</title>', $output); //yg dituju ... index.html
	}
	
	public function test_logout(){ 
           $_SESSION['username'] = "ervina"; 
           $_SESSION['level'] = "user"; 
           $_SESSION['logged_in'] = TRUE; 
           $output = $this->request('GET','c_user/logout'); 
           $this->assertRedirect('auth'); 
		   }
	
}
