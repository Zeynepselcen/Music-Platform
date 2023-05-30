const music = new Audio('audio/9.mp3');

// create Array 

const songs = [
    {
        id:'1',
        songName:` NKBİ <br>
        <div class="subtitle">GÜNEŞ</div>`,
        poster: "img/indir.jpeg",
    },
    {
        id:'2',
        songName:` FIRTINADAYIM <br>
        <div class="subtitle">Mabel Matiz</div>`,
        poster: "img/4.jpeg",
    },
    // all object type 
    {
        id:"3",
        songName: `SENİ DERT ETMELER <br><div class="subtitle"> Madrigal</div>`,
        poster: "img/6.jpeg",
    },
    {
        id:"4",
        songName: `CANIN SAĞ OLSUN <br><div class="subtitle">Semicenk</div>`,
        poster: "img/5.jpeg",
    },
    {
        id:"5",
        songName: `AŞKIN OLAYIM <br><div class="subtitle">Simge</div>`,
        poster: "img/1.jpg",
    },
    {
        id:"6",
        songName: `YANA YANA <br><div class="subtitle">Semicenk</div>`,
        poster: "img/semicenk.jpg",
    },
    {
        id:"7",
        songName: `Koca Yaşlı Şişko Dünya <br><div class="subtitle">Adamlar</div>`,
        poster: "img/adamlar.jpeg",
    },
    {
        id:"8",
        songName: ` Tastamam <br><div class="subtitle">Can Bonomo</div>`,
        poster: "img/canbonomo.jpg",
    },
    {
        id:"9",
        songName: `Yellow <br><div class="subtitle">Coldplay</div>`,
        poster: "img/yellow.jpg",
    },
    {
        id:"10",
        songName: `Martılar <br><div class="subtitle">Edis</div>`,
        poster: "img/edis.jpeg",
    },
    {
        id:"11",
        songName: `Kor <br><div class="subtitle">Emir Can İğrek</div>`,
        poster: "img/emircan.jpg",
    },
    {
        id:"12",
        songName: `Fire On Fire <br><div class="subtitle">Sam Smith</div>`,
        poster: "img/samsmıth.jpg",
    },
    {
        id:"13",
        songName: `Olur Mu? <br><div class="subtitle">Gazapizm</div>`,
        poster: "img/gazapizm.jpg",
    },
    {
        id:"14",
        songName:`A Little Braver <br><div class="subtitle">New Empire</div>`,
        poster: "img/newampire.jpg",
    },
    {
        id:"15",
        songName: `Karam <br><div class="subtitle">Hakan Peker</div>`,
        poster: "img/hakanpeker.jpg",
    },
    {
        id:"16",
        songName: `Bones <br><Imagine class="subtitle">Imagine Dragons</div>`,
        poster: "img/b.jpg",
    },
    {
        id:"17",
        songName: `Thunder <br><div class="subtitle">Imagine Dragons></div>`,
        poster: "img/ImagineDragons.jpg",
    },
    {
        id:"18",
        songName: `Car's Outside <br><div class="subtitle">James Arthur</div>`,
        poster: "img/jamesarthur.jpg",
    },
    {
        id:"19",
        songName: `Garezi Var <br><div class="subtitle">Kahraman Deniz</div>`,
        poster: "img/kahramandeniz.jpg",
    },
    {
        id:"20",
        songName: `Tencere Kapak <br><div class="subtitle">Kenan Doğulu</div>`,
        poster: "img/kenandogulu.jpg",
    },
    {
        id:"21",
        songName: `Before You Go <br><div class="subtitle">Lewis Capaldi</div>`,
        poster: "img/lewis.jpg",
    },
    {
        id:"22",
        songName: `Fırtınadayım <br><div class="subtitle">Mabel Matiz</div>`,
        poster: "img/4.jpeg",
    },
    {
        id:"28",
        songName: `Nasır <br><div class="subtitle">Melike Şahin</div>`,
        poster: "img/melikesahin.jpg",
    },
    {
        id:"24",
        songName: `Tutamıyorum Zamanı <br><div class="subtitle">Müslüm Gürses</div>`,
        poster: "img/muslumgurses.jpg",
    },
    {
        id:"25",
        songName: `Son Arzum <br><div class="subtitle">Nilüfer</div>`,
        poster: "img/nilü.jpg",
    },
    {
        id:"26",
        songName: `Hayır Olamaz <br><div class="subtitle">SeksenDört</div>`,
        poster: "img/84.jpg",
    },
    {
        id:"27",
        songName: `Dansöz<br><div class="subtitle">Serdar Ortaç</div>`,
        poster: "img/serdarortac.jpg",
    },
    {
        id:"29",
        songName: `Firuze<br><div class="subtitle">Sezen Aksu</div>`,
        poster: "img/sezenaksu.jpg",
    },
    {
        id:"30",
        songName: `Kuzu Kuzu<br><div class="subtitle">Tarkan</div>`,
        poster: "img/tarkan.jpg",
    },
    {
        id:"31",
        songName: `Cumhuriyet<br><div class="subtitle">Yalın</div>`,
        poster: "img/yalın.jpg",
    },
    {
        id:"32",
        songName: `Ki Sen<br><div class="subtitle">Yalın</div>`,
        poster: "img/yalın.jpg",
    },
    {
        id:"33",
        songName: `Kumralım<br><div class="subtitle">Yaşar</div>`,
        poster: "img/yaşar.jpg",
    },

]

Array.from(document.getElementsByClassName('songItem')).forEach((element, i)=>{
    element.getElementsByTagName('img')[0].src = songs[i].poster;
    element.getElementsByTagName('h5')[0].innerHTML = songs[i].songName;
});
 
  //search data start

  let search_result=document.getElementsByClassName('search_result')[0];

  songs.forEach(element => {
    const { id, songName, poster}=element;
    let card = document.createElement('a');
    card.classList.add('card');
    card.href ='#' + id;
    card.innerHTML=`
    <img src="${poster}" alt="">
    <div class="content">
       ${songName}
    </div>
    `;
    search_result.appendChild(card);


  });
  let input =document.getElementsByTagName('input')[0];
  input.addEventListener('keyup',()=>{
    let input_value=input.value.toUpperCase();
    let items = search_result.getElementsByTagName('a');

    for(let i=0;i<items.length;i++){
        let as =items[i].getElementsByClassName('content')[0];
        let text_value =as.textContent || as.innerText;

        if(text_value.toUpperCase().indexOf(input_value)> -1){
            items[i].style.display="flex";

        }else{
            items[i].style.display="none";

        }
        if(input.value ==0){
            search_result.style.display ="none";
        }else{
            search_result.style.display ="";

        }
    }

   })



  //search data end


let masterPlay = document.getElementById('masterPlay');
let wave = document.getElementsByClassName('wave')[0];

masterPlay.addEventListener('click',()=>{
    if (music.paused || music.currentTime <=0) {
        music.play();
        masterPlay.classList.remove('bi-play-fill');
        masterPlay.classList.add('bi-pause-fill');
        wave.classList.add('active2');
    } else {
        music.pause();
        masterPlay.classList.add('bi-play-fill');
        masterPlay.classList.remove('bi-pause-fill');
        wave.classList.remove('active2');
    }
} )


const makeAllPlays = () =>{
    Array.from(document.getElementsByClassName('playListPlay')).forEach((element)=>{
            element.classList.add('bi-play-circle-fill');
            element.classList.remove('bi-pause-circle-fill');
    })
}
const makeAllBackgrounds = () =>{
    Array.from(document.getElementsByClassName('songItem')).forEach((element)=>{
            element.style.background = "rgb(105, 105, 170, 0)";
    })
}

let index = 0;
let poster_master_play = document.getElementById('poster_master_play');
let title = document.getElementById('title');

Array.from(document.getElementsByClassName('playListPlay')).forEach((element)=>{
    element.addEventListener('click', (e)=>{
        index = e.target.id;
        makeAllPlays();
        e.target.classList.remove('bi-play-circle-fill');
        e.target.classList.add('bi-pause-circle-fill');
        music.src = `audio/${index}.mp3`;
        /*poster_master_play.src =`img/${index}.jpeg`;*/
        music.play();
        let song_title = songs.filter((ele)=>{
            return ele.id == index;
        })

        song_title.forEach(ele =>{
            let {songName,poster} = ele;
            title.innerHTML = songName;
            poster_master_play.src=poster;
        })
        masterPlay.classList.remove('bi-play-fill');
        masterPlay.classList.add('bi-pause-fill');
        wave.classList.add('active2');
        music.addEventListener('ended',()=>{
            masterPlay.classList.add('bi-play-fill');
            masterPlay.classList.remove('bi-pause-fill');
            wave.classList.remove('active2');
        })
        makeAllBackgrounds();
        Array.from(document.getElementsByClassName('songItem'))[`${index-1}`].style.background = "rgb(105, 105, 170, .1)";
    })
})


let currentStart = document.getElementById('currentStart');
let currentEnd = document.getElementById('currentEnd');
let seek = document.getElementById('seek');
let bar2 = document.getElementById('bar2');
let dot = document.getElementsByClassName('dot')[0];

music.addEventListener('timeupdate',()=>{
    let music_curr = music.currentTime;
    let music_dur = music.duration;

    let min = Math.floor(music_dur/60);
    let sec = Math.floor(music_dur%60);
    if (sec<10) {
        sec = `0${sec}`
    }
    currentEnd.innerText = `${min}:${sec}`;

    let min1 = Math.floor(music_curr/60);
    let sec1 = Math.floor(music_curr%60);
    if (sec1<10) {
        sec1 = `0${sec1}`
    }
    currentStart.innerText = `${min1}:${sec1}`;

    let progressbar = parseInt((music.currentTime/music.duration)*100);
    seek.value = progressbar;
    let seekbar = seek.value;
    bar2.style.width = `${seekbar}%`;
    dot.style.left = `${seekbar}%`;
})

seek.addEventListener('change', ()=>{
    music.currentTime = seek.value * music.duration/100;
})

music.addEventListener('ended', ()=>{
    masterPlay.classList.add('bi-play-fill');
    masterPlay.classList.remove('bi-pause-fill');
    wave.classList.remove('active2');
})


let vol_icon = document.getElementById('vol_icon');
let vol = document.getElementById('vol');
let vol_dot = document.getElementById('vol_dot');
let vol_bar = document.getElementsByClassName('vol_bar')[0];

vol.addEventListener('change', ()=>{
    if (vol.value == 0) {
        vol_icon.classList.remove('bi-volume-down-fill');
        vol_icon.classList.add('bi-volume-mute-fill');
        vol_icon.classList.remove('bi-volume-up-fill');
    }
    if (vol.value > 0) {
        vol_icon.classList.add('bi-volume-down-fill');
        vol_icon.classList.remove('bi-volume-mute-fill');
        vol_icon.classList.remove('bi-volume-up-fill');
    }
    if (vol.value > 50) {
        vol_icon.classList.remove('bi-volume-down-fill');
        vol_icon.classList.remove('bi-volume-mute-fill');
        vol_icon.classList.add('bi-volume-up-fill');
    }

    let vol_a = vol.value;
    vol_bar.style.width = `${vol_a}%`;
    vol_dot.style.left = `${vol_a}%`;
    music.volume = vol_a/100;
})



let back = document.getElementById('back');
let next = document.getElementById('next');

back.addEventListener('click', ()=>{
    index -= 1;
    if (index < 1) {
        index = Array.from(document.getElementsByClassName('songItem')).length;
    }
    music.src = `audio/${index}.mp3`;
    poster_master_play.src =`img/${index}.jpg`;
    music.play();
    let song_title = songs.filter((ele)=>{
        return ele.id == index;
    })

    song_title.forEach(ele =>{
        let {songName} = ele;
        title.innerHTML = songName;
    })
    makeAllPlays()

    document.getElementById(`${index}`).classList.remove('bi-play-fill');
    document.getElementById(`${index}`).classList.add('bi-pause-fill');
    makeAllBackgrounds();
    Array.from(document.getElementsByClassName('songItem'))[`${index-1}`].style.background = "rgb(105, 105, 170, .1)";
    
})
next.addEventListener('click', ()=>{
    index -= 0;
    index += 1;
    if (index > Array.from(document.getElementsByClassName('songItem')).length) {
        index = 1;
        }
    music.src = `audio/${index}.mp3`;
    poster_master_play.src =`img/${index}.jpg`;
    music.play();
    let song_title = songs.filter((ele)=>{
        return ele.id == index;
    })

    song_title.forEach(ele =>{
        let {songName} = ele;
        title.innerHTML = songName;
    })
    makeAllPlays()

    document.getElementById(`${index}`).classList.remove('bi-play-fill');
    document.getElementById(`${index}`).classList.add('bi-pause-fill');
    makeAllBackgrounds();
    Array.from(document.getElementsByClassName('songItem'))[`${index-1}`].style.background = "rgb(105, 105, 170, .1)";
    
})


let left_scroll = document.getElementById('left_scroll');
let right_scroll = document.getElementById('right_scroll');
let pop_song = document.getElementsByClassName('pop_song')[0];

left_scroll.addEventListener('click', ()=>{
    pop_song.scrollLeft -= 330;
})
right_scroll.addEventListener('click', ()=>{
    pop_song.scrollLeft += 330;
})


let left_scrolls = document.getElementById('left_scrolls');
let right_scrolls = document.getElementById('right_scrolls');
let item = document.getElementsByClassName('item')[0];

left_scrolls.addEventListener('click', ()=>{
    item.scrollLeft -= 330;
})
right_scrolls.addEventListener('click', ()=>{
    item.scrollLeft += 330;
})