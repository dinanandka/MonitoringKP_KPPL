<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_dosen_test
 *
 * @author Dina
 */
class c_dosen_test extends TestCase {

	
   public function test_index()
	{
		$_SESSION['username'] = "dosen";
		$_SESSION['level'] = "dosen";
		$output = $this->request('GET', 'c_dosen/index');
		$this->assertContains('<title>SISFOR KP - dosen Dashboard</title>', $output); //yg dituju ... index.html
		//$this->assertRedirect('auth');
	}
        public function test_activity()
	{
		$_SESSION['username'] = "dosen";
		$_SESSION['level'] = "dosen";
		$output = $this->request('GET', 'c_dosen/activity');
		$this->assertContains('<title>SISFOR KP - dosen Activity</title>', $output); //yg dituju ... index.html
	}
        public function test_laporan()
	{
		$_SESSION['username'] = "dosen";
		$_SESSION['level'] = "dosen";
		$output = $this->request('GET', 'c_dosen/laporan');
		$this->assertContains('<title>SISFOR KP - Daftar Mahasiswa</title>', $output); //yg dituju ... index.html
	}
	
		public function test_logout()
		{
		$_SESSION['username'] = "dosen";
        $_SESSION['level'] = "dosen";
        $this->assertTrue( isset($_SESSION['username']) );
        $this->request('GET', 'c_dosen/logout');
        $this->assertRedirect('');
        $this->assertFalse( isset($_SESSION['username']) );
		}
	
}
