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
class test_auth_index extends TestCase {
    public function test_index()
	{
		$output = $this->request('GET', 'auth/index');
		$this->assertContains('index.html', $output); //yg dituju ... index.html
	}
}
