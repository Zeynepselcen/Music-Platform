<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Music Platform</title>
</head>

<body>
<header>
   
    <div class="menu_side">
        <h1>♡SM CLOUD♡</h1>
        <div class="playlist">
            <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Playlist</h4>
            <h4 ><span></span><i class="bi bi-music-note-beamed"></i> Popular Songs</h4>
            <h4 ><span></span><i class="bi bi-music-note-beamed"></i> Popular Artists</h4>
        </div>
        <div class="menu_song">
            <li class="songItem">
                <span>01</span>
                <img src="img/indir.jpeg" alt="guneş">
                <h5>
                    NKBI
                    <div class="subtitle">Güneş</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                    <button type="button" class="bi bi-heart-pulse" onclick="openWindow('https://www.azlyrics.com/lyrics/gunes/nkbi.html')" ></button>
                      
            </li>
          
            <li class="songItem">
                <span>02</span>
                <img src="img/6.jpeg" alt="Madrigal">
                <h5>
                    SENİ DERT ETMELER
                    <div class="subtitle">Madrigal</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                    <button type="button" class="bi bi-heart-pulse" onclick="openWindow('https://www.azlyrics.com/lyrics/deeperise/senidertetmeler.html')" ></button>
            </li>
            <li class="songItem">
                <span>03</span>
                <img src="img/5.jpeg" alt="semicenk">
                <h5>
                    CANIN SAĞOLSUN
                    <div class="subtitle">Semicenk</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                    <button type="button" class="bi bi-heart-pulse" onclick="openWindow('https://www.azlyrics.com/lyrics/semicenk/cannsagolsun.html')" ></button>
            </li>
            <li class="songItem">
                <span>04</span>
                <img src="img/1.jpg" alt="simge">
                <h5>
                    AŞKIN OLAYIM
                    <div class="subtitle">Simge</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                    <button type="button" class="bi bi-heart-pulse" onclick="openWindow('https://www.azlyrics.com/lyrics/simge/aknolaym.html')" ></button>
            </li>
            <li class="songItem">
                <span>05</span>
                <img src="img/5.jpeg" alt="semicenk">
                <h5>
                    YANA YANA 
                    <div class="subtitle">Semicenk</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="6">

                    </i><button type="button" class="bi bi-heart-pulse" onclick="openWindow('https://www.azlyrics.com/lyrics/semicenk/yanayana.html')" ></button>
            </li>
        </div>
    </div>


    <div class="song_side">
        <nav>
            <ul>
                <li>Discover <span></span></li>
               
                <li>RADIO
                 
        
                </li>
            </ul>
            <div class="search">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="Search Music...">
                <div class="search_result"></div>
                  <!-- <a href= "#" class="card">
                         <img src="img/1.jpg" alt="">
                         <div class="context">
                            AŞKIN OLAYIM 
                            <div class="subtitle">Simge</div>
                         </div>
                    </a> -->
            </div>
            <div class="user">
                <img src="img/user.png" alt="User" title="Profil">
            </div>
        </nav>
        <div class="content">
            <h2>!Popular Song Alert!</h2>
            <p>
            <h6>
                This week's favorite songs are in the popular song section!! <br>
                Click and don't miss the fun
            </h6>  
            </p>
            <div class="buttons">
                <button>PLAY</button>
                <button>FOLLOW</button>
            </div>
        </div>
        <div class="popular_song">
            <div class="h4">
                <h4>Popular Songs</h4>
                <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="pop_song">
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/adamlar.jpeg" alt="adamlar">
                        <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                    </div>
                    <h5>Koca Yaşlı Şişko Dünya
                       
                        <br>
                        <div class="subtitle">Adamlar</div>
                        
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/canbonomo.jpg" alt="Can bonomo">
                        <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                        <!-- change All id  -->
                    </div>
                    <h5>Tastamam
                        <br>
                        <div class="subtitle">Can Bonomo</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/yellow.jpg" alt="coldplay">
                        <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                    </div>
                    <h5>Yellow
                        <br>
                        <div class="subtitle">Coldplay</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/edis.jpeg" alt="edis">
                        <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                    </div>
                    <h5>Martılar
                        <br>
                        <div class="subtitle">Edis</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/emircan.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                    </div>
                    <h5>Kor
                        <br>
                        <div class="subtitle">Emir Can İğrek</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/samsmıth.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                    </div>
                    <h5>FirE On Fire
                        <br>
                        <div class="subtitle">Sam Smith</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/gazapizm.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                    </div>
                    <h5>Olur Mu?
                        <br>
                        <div class="subtitle">gazapizm</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/newampire.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                    </div>
                    <h5>A Little Braver
                        <br>
                        <div class="subtitle">New Empire</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/hakanpeker.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                    </div>
                    <h5>Karam
                        <br>
                        <div class="subtitle">Hakan Peker</div>
                    </h5>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/ImagineDragons.jpg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="16"></i>
                        </div>
                        <h5>Bones
                            <br>
                            <div class="subtitle">Imagine Dragons</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/ImagineDragons.jpg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="17"></i>
                        </div>
                        <h5>Thunder
                            <br>
                            <div class="subtitle">Imagine Dragons</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/jamesarthur.jpg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="18"></i>
                        </div>
                        <h5>Car's Outside 
                            <br>
                            <div class="subtitle">James Arthur</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/kahramandeniz.jpg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="19"></i>
                        </div>
                        <h5>Garezi Var
                            <br>
                            <div class="subtitle">Kahraman Deniz</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/kenandogulu.jpg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="20"></i>
                        </div>
                        <h5>Tencere Kapak
                            <br>
                            <div class="subtitle">Kenan Doğulu</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/lewis.jpg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="21"></i>
                        </div>
                        <h5>Before You Go
                            <br>
                            <div class="subtitle">Lewis Capaldi</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/4.jpeg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="22"></i>
                        </div>
                        <h5>Fırtınadayım
                            <br>
                            <div class="subtitle">Mabel Matiz</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/melikesahin.jpg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="28"></i>
                        </div>
                        <h5>Nasır
                            <br>
                            <div class="subtitle">Melike Şahin</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/muslumgurses.jpg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="24"></i>
                        </div>
                        <h5>Tutamıyorum Zamanı
                            <br>
                            <div class="subtitle">Müslüm Gürses</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/nilü.jpg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="25"></i>
                        </div>
                        <h5>Son Arzum
                            <br>
                            <div class="subtitle">Nilüfer</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/84.jpg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="26"></i>
                        </div>
                        <h5>Hayır Olamaz
                            <br>
                            <div class="subtitle">SeksenDört</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/serdarortac.jpg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="27"></i>
                        </div>
                        <h5>Dansöz
                            <br>
                            <div class="subtitle">Serdar Ortaç</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/sezenaksu.jpg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="29"></i>
                        </div>
                        <h5>Firuze
                            <br>
                            <div class="subtitle">Sezen Aksu</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/tarkan.jpg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="30"></i>
                        </div>
                        <h5>Kuzu Kuzu
                            <br>
                            <div class="subtitle">Tarkan</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/yalın.jpg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="31"></i>
                        </div>
                        <h5>Cumhuriyet
                            <br>
                            <div class="subtitle">Yalın</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/yalın.jpg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="32"></i>
                        </div>
                        <h5>Ki Sen
                            <br>
                            <div class="subtitle">Yalın</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/Yaşar.jpg" alt="alan">
                            <i class="bi playListPlay bi-play-circle-fill" id="33"></i>
                        </div>
                        <h5>Kumralım
                            <br>
                            <div class="subtitle">Yaşar</div>
                        </h5>
                    </li>
                </li>
            </div>
        </div>
        <div class="popular_artists">
            <div class="h4">
                <h4>Popular Artists</h4>
                <div class="btn_s">
                    <i id="left_scrolls" class="bi bi-arrow-left-short"></i>
                    <i id="right_scrolls" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="item">
                <li>
                    <img src="img/semicenk.jpg" alt="semicenk" title="semicenk">
                </li>
                <li>
                    <img src="img/sezen.jpeg "alt="sezen aksu" title="sezen aksu">
                </li>
                <li>
                    <img src="img/tarkan.jpg" alt="tarkan" title="tarkan">
                </li>
                <li>
                    <img src="img/one republic.jpeg" alt="one republic" title="one republic">
                </li>
                <li>
                    <img src="img/melikesahin.jpg" alt="melike şahin" title="melike şahin">
                </li>
                <li>
                    <img src="img/muslumgurses.jpg" alt="müslüm gürses" title="müslüm gürses">
                </li>
                <li>
                    <img src="img/nilü.jpg" alt="nilüfer" title="nilüfer">
                </li>
                <li>
                    <img src="img/jamesarthur.jpg" alt="james arthur" title="james arthur">
                </li>
                <li>
                    <img src="img/karsu.jpeg" alt="karsu" title="karsu">
                </li>
                <li>
                    <img src="img/edis.jpeg" alt="edis" title="edis">
                </li>
                <li>
                    <img src="img/kenandogulu.jpg" alt="kenan doğulu" title="kenan doğulu">
                </li>
                <li>
                    <img src="img/adamlar.jpeg" alt="adamlar" title="adamlar">
                </li>
                <li>
                    <img src="img/serdarortac.jpg" alt="serdar ortaç" title="serdar ortaç">
                </li>
                <li>
                    <img src="img/emircan.jpg" alt="emir can iğrek" title="emir can iğrek">
                </li>
                <li>
                    <img src="img/yalın.jpg" alt="yalın" title="yalın">
                </li>
                <!-- change all img  -->
            </div>
        </div>
    </div>


    <div class="master_play">
        <div class="wave">
            <div class="wave1"></div>
            <div class="wave1"></div>
            <div class="wave1"></div>
        </div>
        <img src="img/adamlar.jpg"alt="coldplay"  id="poster_master_play">
        <h5 id="title">Yellow<br>
            <div class="subtitle">Coldplay </div>
        </h5>
        <div class="icon">
            <i class="bi shuffle bi-music-note-beamed">next</i>
            <i class="bi bi-skip-start-fill" id="back"></i>
            <i class="bi bi-play-fill" id="masterPlay"></i>
            <i class="bi bi-skip-end-fill" id="next"></i>
            <a href="" download id="download_music"><i class="bi bi-cloud-arrow-down-fill"></i></a>
        </div>
        <span id="currentStart">0:00</span>
        <div class="bar">
            <input type="range" id="seek" min="0" value="0" max="100">
            <div class="bar2" id="bar2"></div>
            <div class="dot"></div>
        </div>
        <span id="currentEnd">0:00</span>

        <div class="vol">
            <i class="bi bi-volume-down-fill" id="vol_icon"></i>
            <input type="range" id="vol" min="0" value="30" max="100">
            <div class="vol_bar"></div>
            <div class="dot" id="vol_dot"></div>
        </div>
    </div>
</header>
    <script src="app.js"></script>
</body>

</html>