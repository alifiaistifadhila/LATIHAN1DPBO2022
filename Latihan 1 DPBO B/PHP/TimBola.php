<?php

class TimSepakbola{

	private $nama;
	private $negara;
	private $tahun;
	private $pemain;

	public function __construct(){
	}

	public function setNama($nama)
	{
		$this->nama = $nama;
	}

	public function getNama()
	{
		return $this->nama;
	}

	public function setNegara($negara)
	{
		$this->negara = $negara;
	}

	public function getNegara()
	{
		return $this->negara;
	}

	public function setTahun($tahun)
	{
		$this->tahun = $tahun;
	}

	public function getTahun()
	{
		return $this->tahun;
	}

	public function setPemain($pemain)
	{
		$this->pemain = $pemain;
	}

	public function getPemain()
	{
		return $this->pemain;
	}

}

?>