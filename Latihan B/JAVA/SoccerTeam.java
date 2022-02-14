public class SoccerTeam {

	private String nameteam, country, est, nickname; 
	private String player[] = new String[50];

	//konstruksi
	public SoccerTeam(){

	}

	
	public void setNameTeam(String nameteam){
			this.nameteam = nameteam;
	}
		
	public void setCountry(String country){
			this.country = country;
	}

	public void setEst(String est){
			this.est= est;
	}

	public void setNickname(String nickname){
			this.nickname = nickname;
	}

	public void setPlayer(String player, int idx){
			this.player[idx] = player;
	}

	public String getNameTeam(){
			return this.nameteam;
	}
		
	public String getCountry(){
			return this.country;
	}

	public String getEst(){
			return this.est;
	}

	public String getNickname(){
			return this.nickname;
	}

	public String getPlayer(int idx){
			return this.player[idx];
	}
}