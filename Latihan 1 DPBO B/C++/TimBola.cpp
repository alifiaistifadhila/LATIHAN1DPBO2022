class TimBola{
	
	private:
		string nama;
		string negara;
		string tahun;
		string pemain;

	public:
		TimBola(){
		}

		void setNama(string nama){
			this->nama = nama;
		}

		string getNama(){
			return this->nama;
		}

		void setNegara(string negara){
			this->negara = negara;
		}

		string getNegara(){
			return this->negara;
		}

		void setTahun(string tahun){
			this->tahun = tahun;
		}

		string getTahun(){
			return this->tahun;
		}

		void setPemain(string pemain){
			this->pemain = pemain;
		}

		string getPemain(){
			return this->pemain;
		}

		~TimBola(){
		}
};