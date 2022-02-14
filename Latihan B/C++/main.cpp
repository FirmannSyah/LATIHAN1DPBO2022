#include <iostream>
#include <string>
#include "SoccerTeam.cpp"

using namespace std;

int main(){
	int n; //jumlah tim yang ingin di tambahkan
	
	cout << "===SELAMAT DATANG DI PUSAT PENGUMPULAN DATA TIM SEPAKBOLA 1.0===" << endl;
	cout << endl << "Masukan banyaknya tim : ";
	cin >> n;
	

	SoccerTeam team[n];
	int countPlayer[n];

	string nameteam, country, nickname, est , player;

	int i;
	int j;
	for(i = 0; i < n; i++){
		cout << endl << "Tim ke " << i+1 << endl;

		cout << "Masukan Nama Tim : ";
		cin >> nameteam;
		cout << "Masukan Asal Negara : ";
		cin >> country;
		cout << "Masukan Tahun Berdiri : ";
		cin >> est;
		cout << "Masukan Julukan : ";
		cin >> nickname;

		team[i].setNameTeam(nameteam);
		team[i].setCountry(country);
		team[i].setEst(est);
		team[i].setNickname(nickname);


		cout << "Masukan Banyaknya Pemain : ";
		cin >> countPlayer[i];
		cout << "Masukan Nama - Nama Pemain : " << endl ;
		
		for(j = 0; j < countPlayer[i]; j++){
			cout << j+1 << ". ";
			cin >> player;
			team[i].setPlayer(player, j);
		}
	}
	cout << "MASUKAN DATA SELESAI, BERIKUT ADALAH HASILNYA :" << endl;

	for(i = 0; i < n; i++){
		cout << endl << "======= TIM KE " << i+1 << " =========" << endl;
		cout << "Nama Tim       :" << team[i].getNameTeam() <<endl;
		cout << "Negara         :" << team[i].getCountry() <<endl;
		cout << "Tahun Berdiri  :" << team[i].getEst() <<endl;
		cout << "Nama Julukan   :" << team[i].getNickname() <<endl;
		cout << "List Pemain    :" << endl;
		for(j = 0; j < countPlayer[i]; j++){
			cout << j+1 << ". " << team[i].getPlayer(j) << endl;
		}
	}

	cout << endl << " PROGRAM SELESAI" << endl;
}