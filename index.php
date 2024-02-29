<body>
	<h1>silahkan pilih batu, gunting, kertas</h1>
	
		<h1>
			<label>masukkan pilihan anda</label>
			<input type="text" id="player">
			<input type="submit" onclick="mulai()">
		</h1>

	<h1><div id="game"></div></h1>
	
<script type="text/javascript">
	function mulai() {

		var p = document.getElementById('player').value;

		var bot = Math.random();

		
		if (bot <= 0.34) {
			bot = "batu";
		}
		else if(bot > 0.34 && bot < 0.67) {
			bot = "gunting";
		}
		else{
			bot = "kertas";
		}
		

		if (p == bot) {
			document.getElementById('game').innerHTML = "Anda : "+p+", Bot : "+bot+"<br>Hasilnya Seri <br> <br> <button onclick='hapus()'>hapus</button>";
		}
		else if(p == "batu"){
			if (bot == "gunting") {
				document.getElementById('game').innerHTML = "Anda : "+p+", Bot : "+bot+"<br>Selamat Anda Menang <br> <br> <button onclick='hapus()'>hapus</button>";
			}
			else{
				document.getElementById('game').innerHTML = "Anda : "+p+", Bot : "+bot+"<br>Anda kalah <br> <br> <button onclick='hapus()'>hapus</button>";
			}
		}
		else if(p == "gunting"){
			if (bot == "kertas") {
				document.getElementById('game').innerHTML = "Anda : "+p+", Bot : "+bot+"<br>Selamat Anda Menang <br> <br> <button onclick='hapus()'>hapus</button>";
			}
			else{
				document.getElementById('game').innerHTML = "Anda : "+p+", Bot : "+bot+"<br>Anda kalah <br> <br> <button onclick='hapus()'>hapus</button>";
			}
		}
		else if(p == "kertas"){
			if (bot == "batu") {
				document.getElementById('game').innerHTML = "Anda : "+p+", Bot : "+bot+"<br>Selamat Anda Menang <br> <br> <button onclick='hapus()'>hapus</button>";		}
			else{
				document.getElementById('game').innerHTML = "Anda : "+p+", Bot : "+bot+"<br>Anda kalah <br> <br> <button onclick='hapus()'>hapus</button>";
			}
		}

		else{
			document.getElementById('game').innerHTML = "pilihan yang anda masukan salah <br> <br> <button onclick='hapus()'>hapus</button>";

		}

		
	}
	
	function hapus(){
		var del = confirm('mulai dari awal??');

		if (del == true) {
			document.getElementById('game').innerHTML = "";
		}
	}


</script>

</body>