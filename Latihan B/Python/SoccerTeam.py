class SoccerTeam:

	#private
	nameteam = "0"
	country = "0"
	est = "0"
	nickname = "0"
	player = []

	#konstruksi
	def __init__(self):
		self.nameteam = "0"
		self.country = "0"
		self.est = "0"
		self.nickname = "0"
		self.player = []

	#get set untuk semua variable
	def setNameTeam(self, nameteam):
		self.nameteam = nameteam

	def setCountry(self, country):
		self.country = country

	def setEst(self, est):
		self.est = est

	def setNickname(self, nickname):
		self.nickname = nickname

	def setPlayer(self,  player, idx):
		self.player.insert(idx, player)
		

	

	def getNameTeam(self):
		return self.nameteam
	
	def getCountry(self):
		return self.country

	def getEst(self):
		return self.est
	
	def getPlayer(self, idx):
		return self.player[idx]

	def getNickname(self):
		return self.nickname