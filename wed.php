<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="wed.css">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="icon" type="image/png" href="images/logo.png"/>
        <title>Wedding Invitation</title>
    </head>
    <body>
        <header>
            <a href="#" class="logo">
                <img src="images/logo.png">
                Wedding Invitation
            </a>

            <ul class="nav">
                <li><a href="#couple">The Couple</a></li>
                <li><a href="#location">Location</a></li>
                <li><a href="#albums">Albums</a></li>
                <li><a href="#gift">Send a Gift</a></li>
                <li><a href="#contact">Send Love & Wishes</a></li>                
            </ul>

            <div class="right-nav">
                <a href="#" class="right-btn">To Top <i class="ri-arrow-up-line"></i></a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>

        <div id="musicButton" onclick="toggleMusic()">
            <i id="musicIcon" class="fas fa-music"></i>
        </div>

        <audio id="backgroundMusic" autoplay loop>
            <source src="music/home.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

        <section class="home" id="home">
            <div class="home-text">
                <h2>🕊️ You're invited to</h2>
                <h1>The <span>WEDDING OF</span> <br> Jay & Disha</h1>

                <ul class="count">
                    <li><span>Save</span> The <br> Date </li>
                    <li><span>Sunday</span> 31 Des <br> 2023 </li>
                </ul>
            </div>
        </section>

        <section class="couple" id="couple">
            <div class="middle-text">
                <h2>🤵🏻The Couple👰🏻</h2>
            </div>
            <div class="couple-content">
            <div class="groom">
                <h3>Jay</h3>
                <img src="images/groom.jpeg">
                <p>Son of</p>
                <h4>Mrs. Jenny Lim</h4>
                <h5>&</h5>
                <h4>Mr. Johnny Lim</h4>
            </div>

            <div class="couple-text">
                <h2><span><i class="ri-double-quotes-l"></i></span>Once in awhile, right in the middle of an ordinary life, love gives us a fairy tale.<span><i class="ri-double-quotes-r"></i></span></h2>
            </div>

            <div class="bride">
                <h3>Disha</h3>
                <img src="images/bride.jpg">
                <p>Daughter of</p>
                <h4> Mrs. Maria Pohan</h4>
                <h5>&</h5>
                <h4>Mr. Kris Pohan</h4>
            </div>
            </div>
        </section>

        <section class="location" id="location">
            <div class="locationceremony-img">
                <img src="images/ring.png">
            </div>

            <div class="location-ceremony">
                <h2>Wedding</h2>
                <h2> --- <span> Ceremony </span></h2>
                <h4>09:00 - 10:00 WIB</h4>
                <h5>Minggu, 31 Desember 2021</h5>
                <p><i class="ri-map-pin-fill"></i> InterContinental Bandung Dago Pakar Hotel <i class="ri-map-pin-fill"></i></p>
                <p>Jalan Resor Dago Pakar Raya 2B Resor Dago Pakar, Mekarsaluyu, Kec. Cimenyan, Kota Bandung, Jawa Barat 40198, Indonesia</p>
            </div>

            <div class="location-reception">
                <h2>Wedding</h2>
                <h2> --- <span> Reception </span></h2>
                <h4>13:00 - 15:00 WIB</h4>
                <h5>Minggu, 31 Desember 2021</h5>
                <p><i class="ri-map-pin-fill"></i> InterContinental Bandung Dago Pakar Hotel <i class="ri-map-pin-fill"></i></p>
                <p>Jalan Resor Dago Pakar Raya 2B Resor Dago Pakar, Mekarsaluyu, Kec. Cimenyan, Kota Bandung, Jawa Barat 40198, Indonesia</p>
            </div>
            <div class="locationreception-img">
                <img src="images/wine.png">
            </div>
        </section>

        <section class="albums" id="albums">
            <div class="middle-text">
                <h2>💐Our Album💐</h2>
            </div>
            <div class="albums-content">
            <div class="col-1">
                <h3>2017</h3>
                <p>The first time we met!</p>
            
            </div>
            <div class="col-2">
                <h3>2019</h3>
                <p>We were engaged!</p>
                </a>
            </div>

            <div class="col-3">
                <h3>2023</h3>
                <p>Now we're married</p>
            </div>
            </div>
        </section>

        <section class="cta">
            <div class="cta-content">
                <div class="cta-text">
                    <h4>Potraits of Love</h4>
                    <p>Love is when imperfection being perfection</p>
                </div>

                <div class="cta-btn">
                    <a href="#albums" class="cta-btn1">More Photos</a>
                    <a href="#albums" class="cta-btn2">
                        <i class="ri-camera-3-fill"></i>
                        Our Footage
                    </a>
                </div>

                <div class="slider-container">
				<div class="galeri">
					<img src="https://images.pexels.com/photos/13470051/pexels-photo-13470051.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load">
				</div>
				<div class="galeri2">
					<img src="https://images.pexels.com/photos/712651/pexels-photo-712651.jpeg?auto=compress&cs=tinysrgb&w=600">
				</div>
				<div class="galeri3">
					<img src="https://images.pexels.com/photos/13204650/pexels-photo-13204650.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load">
				</div>
				<div class="galeri4">
					<img src="https://images.pexels.com/photos/11585002/pexels-photo-11585002.jpeg?auto=compress&cs=tinysrgb&w=600">
				</div>
			</div>
            </div>
        </section>

        <section class="gift" id="gift">
            <div class="middle-text">
                <h2>🔔Send a Gift🔔</h2>
            </div>
             <div class="gift-content">
            <div class="gift-text1">
                <h4>Catatan kado atau kata kata terimakasih untuk yang memberikan hadiah.</h4>
                <h5>Direct Transfer</h5>
                <p>💌 Transfer langsung ke rekening yang tertera</p>
                <h5>Kirim Kado</h5>
                <p>📬 Kirim kado ke alamat yang tertera</p>
            </div>
            <div class="gift-text2">
                <h4>Transfer langsung ke rekening di bawah ini:</h4>
                <h5>BCA</h5>
                <h4>0660580697</h4>
                <p>👧🏻 A/N Our Wedding</p>
                <h5>Bank Central Asia (BCA)</h5>
                <h4>42849248783</h4>
                <p>👧🏻 A/N Our Wedding</p>
                </a>
            </div>
             </div>
        </section>

        <section class="contact" id="contact">
            <div class="contact-text">
                <h5>Thank you!</h5>
                <h2>Let's Send Love & Wishes</h2>
                <div class="contact-icons">
                    <h2>💍👰🏻🤵🏻🕊️𓍢ִ໋🌷͙֒</h2>
                </div>
            </div>

            <div class="contact-form">
                <form action="process.php" method="post">
                    <input placeholder="Your Name" type="text" id="nama" name="nama"><br>
                    <textarea name="pesan" id="pesan" cols="30" rows="10" placeholder="Your Message" required></textarea>
                    <input type="submit" value="Send a message" class="contact-btn">
                </form>
            </div>
        </section>

        <section class="footer">
            <p>©2023 Kelompok 3, All Rights Reserved • Credits</p>
        </section>

        <script src="wed.js"></script>
    </body>
</html>