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
   protected $backupGlobalsBlackList = array('_SESSION');
	public function test_tambah_aksi_berhasil()
	{	
            $_SESSION['username'] = 'ervina';
            $filename = 'outsourcing.pdf';
            $filepath = 'E:/'.$filename;
            $files = [
                            'file_up' => [
                                    'name'     => $filename,
                                    'tmp_name' => $filepath,
                            ],
                    ];
                $this->request->setFiles($files);
		$this->request(
			'POST',
			'crud/tambah_aksi',
				[
					'tanggal' => '11/22/2017',
					'topik' => 'topik hangat2',
					'isi' => 'laporan KP mingguan ini2',
					'dospem' => 'Bu wiwik2',
					'nama' => 'ervina'
				]
		);
                $this->assertEquals('Sukses Upload',$_SESSION['sukses']);
		//$this->assertRedirect('crud/sukses', $output);
                //$this->assertContains('<title>Sistem Monitoring KP - Sisfor ITS</title> ', $output);
	}
	
	public function test_tambah_aksi_gagaltanggal()
	{
		$this->request(
			'POST',
			'crud/tambah_aksi',
				[
					'tanggal' => '',
					'topik' => 'topik hangat',
					'isi' => 'laporan KP mingguan ini',
					'dospem' => 'Bu wiwik',
					'nama' => 'ervina'
				]
		);
		$this->assertFalse( isset($_SESSION['username']) );
	}
        
         public function test_do_upload_gagal(){
                $_SESSION['username'] = 'ervina';
                $filename = 'saasasas.pdf';
                $filepath = 'E:/'.$filename;
                $files = [
                                'file_up' => [
                                        'name'     => $filename,
                                        'type'     => 'doc/pdf/docx',
                                        'tmp_name' => $filepath,
                                ],
                        ];
		$this->request->setFiles($files);
                $this->request(
			'POST',
			'crud/tambah_aksi',
				[
					'tanggal' => '11/22/2017',
					'topik' => 'topik hangat2',
					'isi' => 'laporan KP mingguan ini2',
					'dospem' => 'Bu wiwik2',
					'nama' => 'ervina'
				]
		);
                $this->assertEquals('Gagal Cuy',$_SESSION['sukses']);
    }
	
	public function test_tambah_aksi_gagaltopik()
	{
		$this->request(
			'POST',
			'crud/tambah_aksi',
				[
					'tanggal' => '10/21/2017',
					'topik' => '',
					'isi' => 'laporan KP mingguan ini',
					'dospem' => 'Bu wiwik',
					'nama' => 'ervina'
				]
		);
		$this->assertFalse( isset($_SESSION['username']) );
	}
	
	public function test_tambah_aksi_gagalisi()
	{
		$this->request(
			'POST',
			'crud/tambah_aksi',
				[
					'tanggal' => '10/21/2017',
					'topik' => 'topik 1',
					'isi' => '',
					'dospem' => 'Bu wiwik',
					'nama' => 'ervina'
				]
		);
		$this->assertFalse( isset($_SESSION['username']) );
	}
	
	public function test_tambah_aksi_gagaldospem()
	{
		$this->request(
			'POST',
			'crud/tambah_aksi',
				[
					'tanggal' => '10/21/2017',
					'topik' => 'topik 1',
					'isi' => 'belum ada aktivitas',
					'dospem' => '',
					'nama' => 'ervina'
				]
		);
		$this->assertFalse( isset($_SESSION['username']) );
	}
	
	public function test_tambah_aksi_gagalnama()
	{
		$this->request(
			'POST',
			'crud/tambah_aksi',
				[
					'tanggal' => '10/21/2017',
					'topik' => 'topik 1',
					'isi' => 'belum ada aktivitas',
					'dospem' => 'Bu Tyas',
					'nama' => ''
				]
		);
		$this->assertFalse( isset($_SESSION['username']) );
	}
	
	public function test_tambah_aksi_gagalkosong()
	{
		$this->request(
			'POST',
			'crud/tambah_aksi',
				[
					'tanggal' => '',
					'topik' => '',
					'isi' => '',
					'dospem' => '',
					'nama' => ''
				]
		);
		$this->assertFalse( isset($_SESSION['username']) );
	}
	
	public function test_sukses()
	{
		$output = $this->request('GET', 'crud/sukses');
		$this->assertContains('<title>Sistem Monitoring KP - Sisfor ITS</title> ', $output);
	}
	
	public function test_gagal()
	{
		$output = $this->request('GET', 'crud/gagal');
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
