from SoccerTeam import SoccerTeam

print("===SELAMAT DATANG DI PUSAT PENGUMPULAN DATA TIM SEPAKBOLA 1.0===")
n = int(input("\nMasukkan banyaknya tim sepak bola: "))

team = [SoccerTeam() for i in range(n)]


i = 0
j = 0

countplayer = []

for i in range(n):
	print("\nTim ke ", i+1)

	nameteam = str(input("Masukan Nama Tim : "))
	country = str(input("Masukan Asal Negara : "))
	est = str(input("Masukan Tahun Berdiri : "))
	nickname = str(input("Masukan Julukan : "))

	idx = int(input("Masukan Banyaknya Pemain : "))

	team[i].setNameTeam(nameteam)
	team[i].setEst(est)
	team[i].setCountry(country)
	team[i].setNickname(nickname)
	
	countplayer.insert(i, idx)
	print("Masukan Nama- Nama Pemain : ")

	for j in range(countplayer[i]):
		player = str(input())
		team[i].setPlayer(player, j)
	

i = 0
j = 0
for i in range(n):
	print("\n======= TIM KE ", (i+1)," =========")
	print("Nama Tim       :", str(team[i].getNameTeam()))
	print("Negara         :", str(team[i].getCountry()))
	print("Tahun Berdiri  :",str(team[i].getEst()))
	print("Nama Julukan   :",str(team[i].getNickname()))
	print("List Pemain    :")
	for j in range(countplayer[i]):
		print((j+1), ". ", str(team[i].getPlayer(j)))

print("\n PROGRAM SELESAI")