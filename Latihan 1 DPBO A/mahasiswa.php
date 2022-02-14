<?php

class Mahasiswa{

	private $nim;
	private $nama;
	private $jenisKelamin;
	private $programStudi;
	private $semester;
	private $tahunAngkatan;

	public function __construct(){
	}

	public function setNim($nim)
	{
		$this->nim = $nim;
	}

	public function getNim()
	{
		return $this->nim;
	}

	public function setNama($nama)
	{
		$this->nama = $nama;
	}

	public function getNama()
	{
		return $this->nama;
	}

	public function setJenisKelamin($jenisKelamin)
	{
		$this->jenisKelamin = $jenisKelamin;
	}

	public function getJenisKelamin()
	{
		return $this->jenisKelamin;
	}

	public function setProgramStudi($programStudi)
	{
		$this->programStudi = $programStudi;
	}

	public function getProgramStudi()
	{
		return $this->programStudi;
	}

	public function setSemester($semester)
	{
		$this->semester = $semester;
	}

	public function getSemester()
	{
		return $this->semester;
	}

	public function setTahunAngkatan($tahunAngkatan)
	{
		$this->tahunAngkatan = $tahunAngkatan;
	}

	public function getTahunAngkatan()
	{
		return $this->tahunAngkatan;
	}
}

?>