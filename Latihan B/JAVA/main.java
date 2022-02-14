import java.util.Scanner;

public class main{

	public static void main(String[] args){

		
		int n = 0;

		//cara agar bisa input variable
		Scanner sc = new Scanner(System.in);

		//input banyaknya tim sepak bola
		System.out.print("===SELAMAT DATANG DI PUSAT PENGUMPULAN DATA TIM SEPAKBOLA 1.0===\n\n");
		System.out.print("Masukan banyaknya tim : ");

		try{
			n = sc.nextInt();
		}catch(Exception e){}

		
		SoccerTeam team[] = new SoccerTeam[n];
		String nameteam  = "", country = "", est = "", player = "", nickname = "";

		//iterator
		int i, j; 

		int countPlayer[] = new int[n]; 

		for(i = 0; i < n; i++){

			team[i] = new SoccerTeam();

			System.out.println("\nTim ke " + (i+1));
			System.out.print("Masukan Nama Tim : ");

			try{
				nameteam = sc.next();
			}catch(Exception e){}

			System.out.print("Masukan Asal Negara : ");

			try{
				country = sc.next();
			}catch(Exception e){}

			System.out.print("Masukan Tahun Berdiri : ");

			try{
				est = sc.next();
			}catch(Exception e){}
			System.out.print("Masukan Julukan : ");

			try{
				nickname = sc.next();
			}catch(Exception e){}

		
			team[i].setNameTeam(nameteam);
			team[i].setCountry(country);
			team[i].setEst(est);
			team[i].setNickname(nickname);

			//input banyaknya pemain
			System.out.print("Masukan Banyaknya Pemain : ");

			try{
				countPlayer[i] = sc.nextInt();
			}catch(Exception e){}

			

			//masukan list pemain
			System.out.println("Masukan Nama - Nama Pemain : ");
			for(j = 0; j < countPlayer[i]; j++){
				try{
					player = sc.next();
				}catch(Exception e){}

				team[i].setPlayer(player, j);
			}
		}

		
		System.out.println("MASUKAN DATA SELESAI, BERIKUT ADALAH HASILNYA :");
		for(i = 0; i < n; i++){

			System.out.println("\n======= TIM KE " + (i+1) + " =========");
			System.out.println("Nama Tim      :" + team[i].getNameTeam());
			System.out.println("Negara        :" + team[i].getCountry());
			System.out.println("Tahun Berdiri :" + team[i].getEst());
			System.out.println("Nama Julukan  :" + team[i].getNickname());
			System.out.println("List Pemain   :");
			for(j = 0; j < countPlayer[i]; j++){
				System.out.println((j+1) + ". " +  team[i].getPlayer(j));
			}

		}

		System.out.println("\n PROGRAM SELESAI");

	}

}