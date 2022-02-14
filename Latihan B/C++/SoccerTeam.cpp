#include <iostream>
#include <string>
using namespace std;

class SoccerTeam {

	private:
		string nameteam, country, est, nickname , player[50];

	public:
		//konstruksi
		SoccerTeam(){

		}

		//get dan set semua variabel
 
		void setNameTeam(string nameteam){
				this->nameteam = nameteam;
		}
		
		void setCountry(string country){
				this->country = country;
		}

		void setEst(string est){
				this->est= est;
		}

		void setNickname(string nickname){
				this->nickname = nickname;
		}

		void setPlayer(string player, int idx){
				this->player[idx] = player;
		}

		string getNameTeam(){
				return this->nameteam;
		}
		
		string getCountry(){
				return this->country;
		}

		string getEst(){
				return this->est;
		}

		string getNickname(){
				return this->nickname;
		}

		string getPlayer(int idx){
				return this->player[idx];
		}

		//destruktor
		~SoccerTeam(){

		}
};