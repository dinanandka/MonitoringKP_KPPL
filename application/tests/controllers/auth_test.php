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
		$this->assertContains('<title>Sistem Monitoring KP</title> ', $output); //yg dituju ... index.html
	}
        public function test_index_login_user()
    {
        $output = $this->request('POST', 'auth/cek_login',
                    [
                        'username' => 'ervina',
                        'password' => 'ervina',
                    ]
                    );
            $this->assertEquals('ervina', $_SESSION['username'], $output);
        }
    
    public function test_index_login_bukanuser()
    {
        
        $_SESSION['username'] != "username";
            $output = $this->request('POST', 'auth/cek_login',
                [
                    'username' => 'ojan',
                    'password' => 'ojan',
                ]);
            $this->assertFalse( isset($_SESSION['username'], $output) );
        //$_SESSION['username'] = "ojan";
        //$_SESSION['password'] = "ojan";
        //$_SESSION['level'] = "user";
        
        //$output = $this->request('GET', 'auth/cek_login');
        //$this->assertRedirect('c_user');
    }
    
    public function test_index_login_dosen()
    {
       $output = $this->request('POST', 'auth/cek_login',
                    [
                        'username' => 'dosen',
                        'password' => 'dosen',
                    ]
                    );
            $this->assertEquals('dosen', $_SESSION['username'], $output);
    }
    
    public function test_index_login_bukandosen()
    {
        $_SESSION['username'] != "username";
            $output = $this->request('POST', 'auth/cek_login',
                [
                    'username' => 'dosan',
                    'password' => 'dosan',
                ]);
            $this->assertFalse( isset($_SESSION['username'], $output) );
    }
    
     public function test_index_login_adminn()
    {
       $output = $this->request('POST', 'auth/cek_login',
                    [
                        'username' => 'admin',
                        'password' => 'admin',
                    ]
                    );
            $this->assertEquals('admin', $_SESSION['username'], $output);
    }
    
    public function test_index_login_bukanadmin()
    {
        $_SESSION['username'] != "username";
            $output = $this->request('POST', 'auth/cek_login',
                [
                    'username' => 'damin',
                    'password' => 'damin',
                ]);
            $this->assertFalse( isset($_SESSION['username'], $output) );
    }
    
    
    
    public function test_submit_masuk_noisiusernameuser(){
        $output = $this->request('POST', 'auth/cek_login',
                [
                    'username' => '',
                    'password' => 'ervina',
                ]);
            $this->assertFalse( isset($_SESSION['password'], $output) );
    }
    
     public function test_ceklogin_user_not_login_kosongsemua(){
            $output = $this->request('POST', 'auth/cek_login',
                [
                    'username' => '',
                    'password' => '',
                ]);
            $this->assertFalse( isset($_SESSION['username'], $output) );
	}
    public function test_submit_masuk_noisiusernameadmin(){
        $output = $this->request('POST', 'auth/cek_login',
                [
                    'username' => '',
                    'password' => 'admin',
                ]);
            $this->assertFalse( isset($_SESSION['password'], $output) );
    }
     public function test_submit_masuk_noisiusernamedosen(){
        $output = $this->request('POST', 'auth/cek_login',
                [
                    'username' => '',
                    'password' => 'dosen',
                ]);
            $this->assertFalse( isset($_SESSION['password'], $output) );
    }
        public function test_ceklogin_user_not_login_nopassword(){
            $output = $this->request('POST', 'auth/cek_login',
                [
                    'username' => 'ervina',
                    'password' => '',
                ]);
            $this->assertFalse( isset($_SESSION['username'], $output) );
        }
        public function test_ceklogin_admin_not_login_nopassword(){
            $output = $this->request('POST', 'auth/cek_login',
                [
                    'username' => 'admin',
                    'password' => '',
                ]);
            $this->assertFalse( isset($_SESSION['username'], $output) );
        }
        public function test_ceklogin_dosen_not_login_nopassword(){
            $output = $this->request('POST', 'auth/cek_login',
                [
                    'username' => 'dosen',
                    'password' => '',
                ]);
            $this->assertFalse( isset($_SESSION['username'], $output) );
        }
        public function test_ceklogin_user_not_login_nousername(){
            $output = $this->request('POST', 'admin/cek_login',
                [
                    'username' => 'ehehe',
                    'password' => 'ervina',
                ]);
            $this->assertFalse( isset($_SESSION['username'], $output) );
        }
        public function test_ceklogin_admin_not_login_nousername(){
            $output = $this->request('POST', 'admin/cek_login',
                [
                    'username' => 'ehehe',
                    'password' => 'admin',
                ]);
            $this->assertFalse( isset($_SESSION['username'], $output) );
        }
        public function test_ceklogin_dosen_not_login_nousername(){
            $output = $this->request('POST', 'admin/cek_login',
                [
                    'username' => 'ehehe',
                    'password' => 'dosen',
                ]);
            $this->assertFalse( isset($_SESSION['username'], $output) );
        }
}
