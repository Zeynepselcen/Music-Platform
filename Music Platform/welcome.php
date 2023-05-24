<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Music Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body>
    <header>
        <div class="menu_side">
            <h2>Playlist</h2>
            <div class="playlist">
                 <h4 class="active"><span></span><i class="bi bi-music-note-list"> TOP 5</i></h4>
                <h4 class="active"><span></span><i class="bi bi-music-note-list"> ÖNERİLER</i></h4>
                <h4 class="active"><span></span><i class="bi bi-music-note-list"> FAVORİLER</i></h4>
              </div> 
              <div class="menu_song">
                <li class="songItem">
                   <span>01</span>
                   <img src="img/1.jpg" alt="">
                   <h5> Aşkın Olayım <br>
                     <div class="subtitle">Simge Sağın</div>
                   </h5>
                   <i class="bi playListPlay bi-play-circle-fill" id="1"></i> 
                </li>
                <li class="songItem">
                  <span>02</span>
                  <img src="img/6.jpeg" alt="">
                  <h5> Seni Dert Etmeler <br>
                    <div class="subtitle">Madrigal</div>
                  </h5>
                  <i class="bi playListPlay bi-play-circle-fill" id="2"></i> 
               </li>
               <li class="songItem">
                <span>03</span>
                <img src="img/4.jpeg" alt="">
                <h5> Fırtınadayım <br>
                  <div class="subtitle">Mabel Matiz</div>
                </h5>
                <i class="bi playListPlay bi-play-circle-fill" id="3"></i> 
             </li>
             <li class="songItem">
              <span>04</span>
              <img src="img/5.jpeg" alt="">
              <h5>Canın Sağ Olsun <br>
                <div class="subtitle">Semicenk</div>
              </h5>
              <i class="bi playListPlay bi-play-circle-fill" id="4"></i> 
           </li>
           <li class="songItem">
            <span>05</span>
            <img src="img/indir.jpeg" alt="">
            <h5> NKBİ <br>
              <div class="subtitle">GÜNEŞ-LVBEL C5</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="5"></i> 
         </li>
      </div>  
     </div>  
                
        <div class="song_side">
            <nav>
                <ul>
                    <li>Discover<span></span></li>
                    <li>MY LIBRARY</li>
                    <li>RADIO</li>
                </ul>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Müzik ara...">
                </div>
                <div class="user">
                  <img src="img/kullanıcı.png" alt="">
                  <a href="logout.php" title="Logout"><i class="bi bi-box-arrow-right"></i> </a>
                </div>
            </nav>
            <div class="content">
              <h1> New Empire-A Little Braver</h1>
               <p>We moved together like a silver lock and key</p>
               <p> But now that your lock has changed</p>
                <p>I know I can't fit that way</p>
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
                    <img src="img/sezenaksu.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i> 
                  </div>
                  <h5>FİRUZE<br>
                    <div class="subtitle">Sezen Aksu</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/edis.jpeg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="7"></i> 
                  </div>
                  <h5>MARTILAR<br>
                    <div class="subtitle">Edis</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/emircan.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="8"></i> 
                  </div>
                  <h5>KOR<br>
                    <div class="subtitle">Emircan İğrek</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/samsmıth.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="9"></i> 
                  </div>
                  <h5>FIRE ON FIRE<br>
                    <div class="subtitle">Sam Smith</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/melikesahin.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="10"></i> 
                  </div>
                  <h5>NASIR<br>
                    <div class="subtitle">Melike Şahin</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/muslumgurses.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="11"></i> 
                  </div>
                  <h5>TUTAMIYORUM ZAMANI<br>
                    <div class="subtitle">Müslüm Gürses</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/nilü.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="12"></i> 
                  </div>
                  <h5>SON ARZUM<br>
                    <div class="subtitle">Nilüfer</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/newampire.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="13"></i> 
                  </div>
                  <h5>A LITTLE BRAVER<br>
                    <div class="subtitle">New Empaire</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/serdarortac.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="14"></i> 
                  </div>
                  <h5>DANSÖZ<br>
                    <div class="subtitle">Serdar Ortaç</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/jamesarthur.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="15"></i> 
                  </div>
                  <h5>CAR'S OUTSIDE<br>
                    <div class="subtitle">James Arthur</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/gazapizm.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="16"></i> 
                  </div>
                  <h5>OLUR MU<br>
                    <div class="subtitle">Gazapizm-Melike Şahin</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/kahramandeniz.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="17"></i> 
                  </div>
                  <h5>GAREZİ VAR<br>
                    <div class="subtitle">Kahraman Deniz</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/canbonomo.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="18"></i> 
                  </div>
                  <h5>TASTAMAM<br>
                    <div class="subtitle">Can Bonomo</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/coldplay.jpeg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="19"></i> 
                  </div>
                  <h5>COLD PLAY<br>
                    <div class="subtitle">Yellow</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/adamlar.jpeg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="20"></i> 
                  </div>
                  <h5>Koca YaşlI Şişko Dünya<br>
                    <div class="subtitle">Adamlar</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/hakanpeker.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="21"></i> 
                  </div>
                  <h5>KARAM<br>
                    <div class="subtitle">Hakan Peker</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/b.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="22"></i> 
                  </div>
                  <h5>BONES<br>
                    <div class="subtitle">Imagine Dragons</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/ImagineDragons.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="23"></i> 
                  </div>
                  <h5>THUNDER<br>
                    <div class="subtitle">Imagine Dragons</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/yalın.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="24"></i> 
                  </div>
                  <h5>Kİ SEN<br>
                    <div class="subtitle">Yalın</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/kenandogulu.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="25"></i> 
                  </div>
                  <h5>TENCERE KAPAK<br>
                    <div class="subtitle">Kenan Doğulu</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/lewis.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="26"></i> 
                  </div>
                  <h5>BEFORE YOU GO<br>
                    <div class="subtitle">Lewis Capaldi</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/84.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="27"></i> 
                  </div>
                  <h5>HAYIR OLAMAZ<br>
                    <div class="subtitle">SeksenDört</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/tarkan.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="28"></i> 
                  </div>
                  <h5>KUZU KUZU<br>
                    <div class="subtitle">Tarkan</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/yalın.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="29"></i> 
                  </div>
                  <h5>CUMHURİYET<br>
                    <div class="subtitle">Yalın</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                    <img src="img/Yaşar.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="30"></i> 
                  </div>
                  <h5>KUMRALIM<br>
                    <div class="subtitle">Yaşar</div>
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
              <div class="item Artists_bx">
                <li>
                  <img src="img/sezen.jpeg" alt="">
                </li>
                <li>
                  <img src="img/adamlar.jpeg" alt="">
                </li>
                <li>
                  <img src="img/edis.jpeg" alt="">
                </li>
                <li>
                  <img src="img/karsu.jpeg" alt="">
                </li>
                <li>
                  <img src="img/coldplay.jpeg" alt="">
                </li>
                <li>
                  <img src="img/melek.jpeg" alt="">
                </li>
                <li>
                  <img src="img/melike.jpeg" alt="">
                </li>
                <li>
                  <img src="img/one republic.jpeg" alt="">
                </li>
                <li>
                  <img src="img/jamesarthur.jpg" alt="">
                </li>
                <li>
                  <img src="img/tarkan.jpg" alt="">
                </li>
                <li>
                  <img src="img/serdarortac.jpg" alt="">
                </li>
                <li>
                  <img src="img/kenandogulu.jpg" alt="">
                </li>
                <li>
                  <img src="img/semicenk.jpg" alt="">
                </li>
                <li>
                  <img src="img/muslumgurses.jpg" alt="">
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

          <img src="img/yalın.jpg" alt="" id="poster_master_play">
          <h5 id="title">

            Natural

            <div class="subtitle">Imagine Dragons</div>

          </h5>

          <div class="icon">
            <i class="bi shuffle bi-music-note-beamed">next</i>
            <i class="bi bi-skip-start-fill" id="back"></i>
            <i class="bi bi-playpfill" id="masterPlay"></i>
            <i class="bi bi-skip-end-fill" id="next" ></i>
            <i class="bi bi-cloud-arrow-down-fill" id="download_music"></i>

          </div>
          <span id="currentStart">0 :00</span>
          <div class="bar">
            <input type="range"  id="seek" min="0" max="100">
            <div class="bar2" id="bar2"></div>
            <div class="dot"></div>
          </div>
          <span id="currentEnd">0 :30</span>
          <div class="vol">
            <i class="bi bi-volume-up-fill" id="vol_icon"></i>
            <input type="range" min="0" max="100" id="vol">
            <div class="vol_bar"></div>
            <div class="dot" id="vol_dot"></div>
            
          </div>
        </div>
    </header>
        <script src="app.js"></script>

  </body>
</html>