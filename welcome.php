<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="style.css">
	<title>Music Website</title>
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
					<img src="img/1.jpg" alt="">
					<h5>On My Way<br>
						<div class="subtitle">Alan Walker</div>
					</h5>
					<i class="bi playListPlay bi-play-circle-fill" id="1"></i>
				</li>
				<li class="songItem">
					<span>02</span>
					<img src="img/2.jpg" alt="">
					<h5>Pasoori<br>
						<div class="subtitle">Ali Sethi . Shae Gill</div>
					</h5>
					<i class="bi playListPlay bi-play-circle-fill" id="2"></i>
				</li>
				<li class="songItem">
					<span>03</span>
					<img src="img/3.jpg" alt="">
					<h5>Vande Mataram<br>
						<div class="subtitle">Bankim Chandra Chattopadhyay</div>
					</h5>
					<i class="bi playListPlay bi-play-circle-fill" id="3"></i>
				</li>
				<li class="songItem">
					<span>04</span>
					<img src="img/4.jpg" alt="">
					<h5>Lovely<br>
						<div class="subtitle">Billie Eilish . Khalid</div>
					</h5>
					<i class="bi playListPlay bi-play-circle-fill" id="4"></i>
				</li>
				<li class="songItem">
					<span>05</span>
					<img src="img/5.jpg" alt="">
					<h5>Moh Moh Ke Dhaage<br>
						<div class="subtitle">Monali Thakur</div>
					</h5>
					<i class="bi playListPlay bi-play-circle-fill" id="5"></i>
				</li>
				<li class="songItem">
					<span>06</span>
					<img src="img/6.jpg" alt="">
					<h5>Thousand Years<br>
						<div class="subtitle">Christina Perri</div>
					</h5>
					<i class="bi playListPlay bi-play-circle-fill" id="6"></i>
				</li>
				<li class="songItem">
					<span>07</span>
					<img src="img/7.jpg" alt="">
					<h5>Breathless<br>
						<div class="subtitle">Shankar Mahadevan</div>
					</h5>
					<i class="bi playListPlay bi-play-circle-fill" id="7"></i>
				</li>
				<li class="songItem">
					<span>08</span>
					<img src="img/8.jpg" alt="">
					<h5>Makhna<br>
						<div class="subtitle">Yasser Desai . Tanishk B</div>
					</h5>
					<i class="bi playListPlay bi-play-circle-fill" id="8"></i>
				</li>
				<li class="songItem">
					<span>09</span>
					<img src="img/9.jpg" alt="">
					<h5>Channa Mereya<br>
						<div class="subtitle">Arijit Singh</div>
					</h5>
					<i class="bi playListPlay bi-play-circle-fill" id="9"></i>
				</li>
				<li class="songItem">
					<span>10</span>
					<img src="img/10.jpg" alt="">
					<h5>Saami Saami<br>
						<div class="subtitle">Sunidhi Chauhan</div>
					</h5>
					<i class="bi playListPlay bi-play-circle-fill" id="10"></i>
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
					<div class="search_results">
						<!-- <a href="" class="card">
							<img src="img/01.jpg">
							<div class="content">
								On My Way
								<div class="subtitle">
									Alan Walker
								</div>
							</div>
						</a> -->
					</div>
				</div>
				<div class="user">
					<img src="img/user.jpg" alt="">
				</div>
			</nav>
			<div class="content">
				<h1>Alan Walker-Fade</h1>
				<p>You were the shadow to my light did you feel us Another start you fade <br> Away afraid our aim is out of sight Wanna see us Alive</p>
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
							<img src="img/11.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="11"></i>
						</div>
					    <h5>Tujhme Rab Dikhta Hain<br>
							<div class="subtitle">Shreya Goshal</div>
					    </h5>
				    </li>
				    <li class="songItem">
						<div class="img_play">
							<img src="img/12.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="12"></i>
						</div>
					    <h5>Manike<br>
							<div class="subtitle">Yohani</div>
					    </h5>
				    </li>
				    <li class="songItem">
						<div class="img_play">
							<img src="img/13.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="13"></i>
						</div>
					    <h5>Cold Hours<br>
							<div class="subtitle">Aleemrk . Umair</div>
					    </h5>
				    </li>
				    <li class="songItem">
						<div class="img_play">
							<img src="img/14.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="14"></i>
						</div>
					    <h5>Summer High<br>
							<div class="subtitle">A.P. Dhillon</div>
					    </h5>
				    </li>
				    <li class="songItem">
						<div class="img_play">
							<img src="img/15.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="15"></i>
						</div>
					    <h5>Kesariya<br>
							<div class="subtitle">Pritam . Arijit Singh</div>
					    </h5>
				    </li>
				    <li class="songItem">
						<div class="img_play">
							<img src="img/16.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="16"></i>
						</div>
					    <h5>Deva Deva<br>
							<div class="subtitle">Arijit . Jonita</div>
					    </h5>
				    </li>
				    <li class="songItem">
						<div class="img_play">
							<img src="img/17.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="17"></i>
						</div>
					    <h5>Varaha Roopam<br>
							<div class="subtitle">Ajneesh Loknath</div>
					    </h5>
				    </li>
				    <li class="songItem">
						<div class="img_play">
							<img src="img/18.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="18"></i>
						</div>
					    <h5>Ranjha<br>
							<div class="subtitle">B Praak . Jasleen . Anvita Dutt</div>
					    </h5>
				    </li>
				    <li class="songItem">
						<div class="img_play">
							<img src="img/19.jpg" alt="">
							<i class="bi playListPlay bi-play-circle-fill" id="19"></i>
						</div>
					    <h5>Doobey<br>
							<div class="subtitle">OAFF . Savera</div>
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
						<a href="arijit.php"><img src="img/arijit.jpg" alt=""></a>
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
			<img src="img/1.jpg" alt="" id="poster_master_play">
			<h5 id="title">
				On My Way
				<div class="subtitle">Alan Walker</div>
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
    <script src="app.js"></script>
</body>

</html>