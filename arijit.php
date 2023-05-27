<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="style.css">
	<title>Music Website</title>
	<style>
		header .song_side::before {
    	background: url('arijit_bg.jpg');
}
	</style>
</head>

<body>
	<header>

		<div class="menu_side">
			<h1>Playlist</h1>
			<div class="playlist">
				<h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i>Playlist</h4>
				<h4><span></span><i class="bi bi-music-note-beamed"></i>Last Listened</h4>
				<h4><span></span><i class="bi bi-music-note-beamed"></i>Recommended</h4>
			</div>
			<div class="menu_song">
				<li class="songItem">
					<span>01</span>
					<img src="img/arijit/1.jpg" alt="">
					<h5>Naina Ashq Na Ho<br>
						<div class="subtitle">Arijit Singh</div>
					</h5>
					<i class="bi playListPlay bi-play-circle-fill" id="1"></i>
				</li>
				<li class="songItem">
					<span>02</span>
					<img src="img/arijit/2.jpg" alt="">
					<h5>Khairiyat (Sad)<br>
						<div class="subtitle">Arijit Singh</div>
					</h5>
					<i class="bi playListPlay bi-play-circle-fill" id="2"></i>
				</li>
				<li class="songItem">
					<span>03</span>
					<img src="img/arijit/3.jpg" alt="">
					<h5>Desh Mere<br>
						<div class="subtitle">Arijit Singh</div>
					</h5>
					<i class="bi playListPlay bi-play-circle-fill" id="3"></i>
				</li>
				<li class="songItem">
					<span>04</span>
					<img src="img/arijit/4.jpg" alt="">
					<h5>Dhokha<br>
						<div class="subtitle">Arijit Singh</div>
					</h5>
					<i class="bi playListPlay bi-play-circle-fill" id="4"></i>
				</li>
				<li class="songItem">
					<span>05</span>
					<img src="img/05.jpg" alt="">
					<h5>Tera Yaar Hoon Main<br>
						<div class="subtitle">Arijit Singh</div>
					</h5>
					<i class="bi playListPlay bi-play-circle-fill" id="5"></i>
				</li>
				<li class="songItem">
					<span>06</span>
					<img src="img/arijit/6.jpg" alt="">
					<h5>Chunar<br>
						<div class="subtitle">Arijit Singh</div>
					</h5>
					<i class="bi playListPlay bi-play-circle-fill" id="6"></i>
				</li>
			</div>
		</div>


		<div class="song_side">
			<nav>
				<ul>
					<li>Discover <span></span></li>
					<li>MY LIBRARY</li>
					<li>RADIO</li>
				</ul>
				<div class="search">
					<i class="bi bi-search"></i>
					<input type="text" placeholder="Search Music...">
				</div>
				<div class="user">
					<img src="img/user.jpg" alt="">
				</div>
			</nav>
			<div class="content">
				<h1>Arijit Singh</h1>
				<p>Mehfil mein teri
				   Hum na rahein jo<br>
                   Gham toh nahi hai
				   Gham toh nahi hai
				</p>
				<div class="buttons">
					<button>PLAY</button>
					<button>FOLLOW</button>
				</div>
			</div>

			<div class="popular_song">
				<div class="h4">
					<h4>Popular Song</h4>
					<div class="btn_s">
						<i class="bi bi-arrow-left-short" id="pop_song_left"></i>
						<i class="bi bi-arrow-right-short" id="pop_song_right"></i>
					</div>
				</div>
				<div class="pop_song">
					<li class="songItem">
						<div class="img_play">
							<img src="img/arijit/7.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="7"></i>
						</div>
					    <h5>Galti Se Mistake<br>
							<div class="subtitle">Arijit Singh . Pritam . Amit</div>
					    </h5>
				    </li>
				    <li class="songItem">
						<div class="img_play">
							<img src="img/arijit/8.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="8"></i>
						</div>
					    <h5>Humari Adhuri Kahani<br>
							<div class="subtitle">Arijit Singh</div>
					    </h5>
				    </li>
				    <li class="songItem">
						<div class="img_play">
							<img src="img/arijit/9.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="9"></i>
						</div>
					    <h5>Neki Ki Raah<br>
							<div class="subtitle">Mithoon . Arijit Singh</div>
					    </h5>
				    </li>
				    <li class="songItem">
						<div class="img_play">
							<img src="img/arijit/10.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="10"></i>
						</div>
					    <h5>Humdard<br>
							<div class="subtitle">Mithoon . Arijit Singh</div>
					    </h5>
				    </li>
				    <li class="songItem">
						<div class="img_play">
							<img src="img/arijit/11.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="11"></i>
						</div>
					    <h5>Mere Yaaraa<br>
							<div class="subtitle">Arijit Singh . Neeti Mohan</div>
					    </h5>
				    </li>
				    <li class="songItem">
						<div class="img_play">
							<img src="img/arijit/12.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="12"></i>
						</div>
					    <h5>Nashe Si Chadh Gayi<br>
							<div class="subtitle">Arijit Singh</div>
					    </h5>
				    </li>
				    <li class="songItem">
						<div class="img_play">
							<img src="img/arijit/13.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="13"></i>
						</div>
					    <h5>Ae Watan (Male)<br>
							<div class="subtitle">Arijit Singh</div>
					    </h5>
				    </li>
				    <li class="songItem">
						<div class="img_play">
							<img src="img/arijit/14.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="14"></i>
						</div>
					    <h5>Agar Tum Saath Ho<br>
							<div class="subtitle">Arijit Singh . Alka Yagnik</div>
					    </h5>
				    </li>
				    <li class="songItem">
						<div class="img_play">
							<img src="img/arijit/15.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="15"></i>
						</div>
					    <h5>Pachtaoge<br>
							<div class="subtitle">Jaani . Arijit Singh</div>
					    </h5>
				    </li>
				</div>
			</div>
			<div class="popular_artists">
				<div class="h4">
					<h4>Popular Artists</h4>
					<div class="btn_s">
						<i class="bi bi-arrow-left-short" id="pop_art_left"></i>
						<i class="bi bi-arrow-right-short" id="pop_art_right"></i>
					</div>
				</div>
				<div class="item">
					<li>
						<img src="img/arijit.jpg" alt="">
					</li>
					<li>
						<img src="img/billie.jpeg" alt="">
					</li>
					<li>
						<img src="img/atif.jpg" alt="">
					</li>
					<li>
						<img src="img/shreya.jpg" alt="">
					</li>
					<li>
						<img src="img/justin.jpg" alt="">
					</li>
					<li>
						<img src="img/honey.jpg" alt="">
					</li>
					<li>
						<img src="img/rihanna.jpg" alt="">
					</li>
					<li>
						<img src="img/taylor.jpg" alt="">
					</li>
					<li>
						<img src="img/usha.jpg" alt="">
					</li>
					<li>
						<img src="img/eminem.jpg" alt="">
					</li>
					<li>
						<img src="img/adele.jpg" alt="">
					</li>
					<li>
						<img src="img/badshah.jpg" alt="">
					</li>
					<li>
						<img src="img/sonu.jpg" alt="">
					</li>
					<li>
						<img src="img/lata.jpg" alt="">
					</li>
					<li>
						<img src="img/jubin.jpg" alt="">
					</li>
					<li>
						<img src="img/sunidhi.jpg" alt="">
					</li>
					<li>
						<img src="img/papon.jpg" alt="">
					</li>
					<li>
						<img src="img/monali.jpg" alt="">
					</li>
					<li>
						<img src="img/shankar.jpg" alt="">
					</li>
				</div>
			</div>
		</div>


		<div class="master_play">
			<div class="wave" id="wave">
				<div class="wave1"></div>
				<div class="wave1"></div>
				<div class="wave1"></div>
			</div>
			<img src="img/arijit/1.jpg" alt="" id="poster_master_play">
			<h5 id="title">
				Naina Ashq Na Ho
				<div class="subtitle">Arijit Singh</div>
			</h5>
			<div class="icon">
				<i class="bi shuffle bi-music-note-beamed">next</i>
				<i class="bi bi-skip-start-fill" id="back"></i>
				<i class="bi bi-play-fill" id="masterPlay"></i>
				<i class="bi bi-skip-end-fill" id="next"></i>
				<a href="" download id="download_music"><i class="bi bi-cloud-arrow-down-fill"></i></a>
		    </div>
		    <span id="currentStart"> 0:00 </span>
		    <div class="bar">
		    	<input type="range" id="seek" min="0" max="100">
		    	<div class="bar2" id="bar2"></div>
		    	<div class="dot"></div>
		    </div>
		    <span id="currentEnd"> 0:30 </span>
		    <div class="vol">
		    	<i class="bi bi-volume-down-fill" id="vol_icon"></i>
		    	<input type="range" min="0" max="100" id="vol">
		    	<div class="vol_bar"></div>
		    	<div class="dot" id="vol_dot"></div>
		    </div>
        </div>
	</header>
    <script src="arijit.js"></script>
</body>

</html>