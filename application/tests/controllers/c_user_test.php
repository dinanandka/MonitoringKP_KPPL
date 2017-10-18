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
		$this->assertContains('<title>SISFOR KP - ervina Dashboard</title>', $output); //yg dituju ... index.html
		//$this->assertRedirect('auth');
	}
        
        public function test_lapor()
	{
		$_SESSION['username'] = "ervina";
		$_SESSION['level'] = "user";
		$output = $this->request('GET', 'c_user/lapor');
		$this->assertContains('<title>SISFOR KP - Daftar Mahasiswa</title>', $output); //yg dituju ... index.html
	}
	
		public function test_logout()
		{
		$_SESSION['username'] = "ervina";
        $_SESSION['level'] = "user";
        $this->assertTrue( isset($_SESSION['username']) );
        $this->request('GET', 'c_user/logout');
        $this->assertRedirect('');
        $this->assertFalse( isset($_SESSION['username']) );
		}
	
}
