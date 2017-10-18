<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test_auth_index
 *
 * @author Dina
 */
class auth_test extends TestCase {
    public function test_index()
	{
		$output = $this->request('GET', 'auth/index');
		$this->assertContains('index.html', $output); //yg dituju ... index.html
	}
        public function test_index_login_user()
    {
        $sess_['username'] = "ervina";
        $sess_['password'] = "ervina";
        $_SESSION['level'] = "user";
        
        $output = $this->request('GET', 'auth/cek_login');
        $this->assertRedirect('c_user');
    }
    
    public function test_index_login_bukanuser()
    {
        $_SESSION['username'] = "ojan";
        $_SESSION['password'] = "ojan";
        $_SESSION['level'] = "user";
        
        $output = $this->request('GET', 'auth/cek_login');
        $this->assertRedirect('c_user');
    }
    
    public function test_index_login_dosen()
    {
        $_SESSION['username'] = "dosen";
        $_SESSION['level'] = "dosen";
        
        $output = $this->request('GET', 'auth/cek_login');
        $this->assertRedirect('c_dosen');
    }
    
    public function test_index_login_bukandosen()
    {
        $_SESSION['username'] = "dosen5";
        $_SESSION['level'] = "dosen";
        
        $output = $this->request('GET', 'auth/cek_login');
        $this->assertRedirect('c_dosen');
    }
    
    public function test_submit_masuk(){
        $this->assertFalse( isset($sess_data['username']) );
        $this->request('POST', 'auth/cek_login',
            [
                'username' => 'ervina',
                'password' => 'ervina',
            ]);
        $this->assertRedirect('');
		$this->assertTrue( isset($sess_data['username']) );
        $this->assertEquals('ervina', $sess_data['username']);
    }
    
    public function test_submit_masuk_dosen(){
        $this->assertFalse( isset($sess_data['username']) );
        $this->request('POST', 'auth/cek_login',
            [
                'username' => 'dosen',
                'password' => 'dosen',
            ]);
        $this->assertRedirect('');
		$this->assertTrue( isset($sess_data['username']) );
        $this->assertEquals('dosen', $sess_data['username']);
    }
    
    public function test_submit_masuk_admin(){
        $this->assertFalse( isset($sess_data['username']) );
        $this->request('POST', 'auth/cek_login',
            [
                'username' => 'admin',
                'password' => 'admin',
            ]);
        $this->assertRedirect('');
        $this->assertEquals('admin', $sess_data['username']);
    }
    
    public function test_submit_masuk_nousername(){
        $this->request('POST', 'auth/cek_login',
            [
                'username' => '',
                'password' => 'ervina',
            ]);
        $this->assertRedirect('auth/cek_login?fail=true');
        $this->assertFalse($sess_data['username']);
    }
}
