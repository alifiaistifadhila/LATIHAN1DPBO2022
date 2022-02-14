#include <string>
#include <iostream>

using namespace std;

#include "TimBola.cpp"

int main(){

	TimBola tim;
	TimBola tim2;

	tim.setNama("Real Madrid C.F.");
	tim.setNegara("Spanyol");
	tim.setTahun("1902");
	tim.setPemain("\n - Karim Benzema \n - Mariano Diaz \n - Toni Fuidias Ribera");

	cout << "DAFTAR TIM SEPAKBOLA" << endl;
	cout << "--------------------" << endl;
	cout << "\nTim 1" << endl;
	cout << "Nama Tim 	: " << tim.getNama() << endl;
	cout << "Negara Asal 	: " << tim.getNegara() << endl;
	cout << "Tahun Berdiri 	: " << tim.getTahun() << endl;
	cout << "Pemain 		: " << tim.getPemain() << endl;

	tim2.setNama("Arsenal F.C.");
	tim2.setNegara("Inggris");
	tim2.setTahun("1886");
	tim2.setPemain("\n - Bukayo Saka \n - Takehiro Tomiyasu \n - Arthur Okonkwo");

	cout << "\nTim 2" << endl;
	cout << "Nama Tim 	: " << tim2.getNama() << endl;
	cout << "Negara Asal 	: " << tim2.getNegara() << endl;
	cout << "Tahun Berdiri 	: " << tim2.getTahun() << endl;
	cout << "Pemain 		: " << tim2.getPemain() << endl;

	return 0;	
}