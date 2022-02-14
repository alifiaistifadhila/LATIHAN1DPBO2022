class Main{

public static void main(String[] args){
	TimBola tim = new TimBola();
	tim.setNama("Real Madrid C.F.");
	tim.setNegara("Spanyol");
	tim.setTahun("1902");
	tim.setPemain("\n - Karim Benzema \n - Mariano Diaz \n - Toni Fuidias Ribera");

	System.out.println("DAFTAR TIM SEPAKBOLA");
	System.out.println("--------------------");
	System.out.println("\nTim 1");
	System.out.println("Nama Tim 	: " + tim.getNama());
	System.out.println("Negara Asal 	: " + tim.getNegara());
	System.out.println("Tahun Berdiri 	: " + tim.getTahun());
	System.out.println("Pemain 		: " + tim.getPemain());

	TimBola tim2 = new TimBola();
	tim2.setNama("Arsenal F.C.");
	tim2.setNegara("Inggris");
	tim2.setTahun("1886");
	tim2.setPemain("\n - Bukayo Saka \n - Takehiro Tomiyasu \n - Arthur Okonkwo");

	System.out.println("\nTim 2");
	System.out.println("Nama Tim 	: " + tim2.getNama());
	System.out.println("Negara Asal 	: " + tim2.getNegara());
	System.out.println("Tahun Berdiri 	: " + tim2.getTahun());
	System.out.println("Pemain 		: " + tim2.getPemain());
}
		
}