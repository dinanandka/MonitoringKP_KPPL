<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */
class Crud_test extends TestCase
{	
   

	public function test_sukses()
	{
		$output = $this->request('GET', 'crud/sukses');
		$this->assertContains('<title>Sistem Monitoring KP - Sisfor ITS</title> ', $output);
	}
	
	public function test_gagal()
	{
		$output = $this->request('GET', 'crud/gagal');
	}

	public function test_tambah_aksi()
	{	
		//$this->assertFalse( isset($_SESSION['eo']) );
		$this->request(
			'POST',
			'crud/tambah_aksi',
				[
					'tanggal' => '02/11/1997',
					'topik' => 'topik hangat',
					'isi' => 'laporan KP mingguan ini',
					'dospem' => 'Bu wiwik',
					'nama' => 'ervina'
				]
		);
		$this->assertRedirect('crud/sukses');
	}


	public function test_hapus()
	{	
		
		$this->request(
			'POST',
			'crud/hapus',
				[
					'tanggal' => '02/11/1997',
					'topik' => 'topik hangat',
					'isi' => 'laporan KP mingguan ini',
					'nama' => 'ervina'
				]
		);
		
	}
}