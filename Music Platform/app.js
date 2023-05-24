var images = [
  { id: "askin", audio: "audio/5.mp3" },
  { id: "madrigal", audio: "audio/3.mp3" },
  { id: "mabel", audio: "audio/2.mp3" },
  { id: "semicenk", audio: "audio/ab.mp3" },
  { id: "gunes", audio: "audio/1.mp3" },
  { id: "masterPlay", audio: "audio/4.mp3" },
  { id: "6",audio:"audio/sezenfiruze.mp3"},
  { id: "7",audio:"audio/EdisMartılar.mp3"},
  { id: "8",audio:"audio/EmirCanIgrekKor.mp3"},
  { id: "9",audio:"audio/FireOnFire.mp3"},
  { id: "10",audio:"audio/melikenasir.mp3"},
  { id: "11",audio:"audio/muslumgtutamiyorumzamani.mp3"},
  { id: "12",audio:"audio/NilüferSonArzum.mp3"},
  { id: "13",audio:"audio/NewEmpireAlittleBraver.mp3"},
  { id: "14",audio:"audio/SerdarOrtaçDansöz.mp3"},
  { id: "15",audio:"audio/JamesArthur.mp3"},
  { id: "16",audio:"audio/gazapizmolurmu.mp3"},
  { id: "17",audio:"audio/kahramandenizgarezivar.mp3"},
  { id: "18",audio:"audio/CanBonomoTastamam.mp3"},
  { id: "19",audio:"audio/coldplayyellow.mp3"},
  { id: "20", audio: "audio/adamlar.mp3" },
  { id: "21", audio: "audip/HakanPekerKaram.mp3" },
  { id: "22", audio: "audio/ImagineDragonsBones.mp3" },
  { id: "23", audio: "audio/ImagineDragonsThunder.mp3" },
  { id: "24", audio: "audio/yalinkisen.mp3" },
  { id: "25", audio: "audio/KenandoguluTencereKapak.mp3" },
  { id: "26", audio: "audio/lewiscapaldibeforeyougo.mp3" },
  { id: "27", audio: "audio/SeksendörHayirOlamaz.mp3" },
  { id: "28", audio: "audio/tarkan-kuzukuzu.mp3" },
  { id: "29", audio: "audio/yalincumhuriyet.mp3" },
  { id: "30", audio: "audio/yasarkumralım.mp3" }

];
var audio = new Audio();
var isPlaying = false;

images.forEach(function(image) {
  var imgElement = document.getElementById(image.id);

  imgElement.addEventListener("click", function() {
    toggleAudio(image.audio);
  });
});

function toggleAudio(audioSrc) {
  if (isPlaying) {
    audio.pause();
    isPlaying = false;
  } else {
    audio.src = audioSrc;
    audio.play();
    isPlaying = true;
  }
}

let masterPlay = document.getElementById('masterPlay');
let wave = document.getElementById('wave');

masterPlay.addEventListener('click',()=>{
    if(audio.paused || audio.currentTime<= 0) {
       audio.play();
       wave.classList.add('active1');
       masterPlay.classList.remove('bi-play-fill');
       masterPlay.classList.add('bi-pause-fill');
    } else{
        audio.pause();
        wave.classList.remove('active1');
        masterPlay.classList.add('bi-play-fill');
        masterPlay.classList.remove('bi-pause-fill');

    }
});

const makeAllBackground =() =>{
  Array.from(document.getElementsByClassName('songItem')).forEach((e)=> {
      e.style.background = 'rgb(105,105,105, .0';
  })
}
const makeAllplays =() =>{
  Array.from(document.getElementsByClassName('playListPlay')).forEach((e)=> {
      e.classList.remove('bi-play-fill');
      e.classList.add('bi-pause-fill');
  })
}


let pop_song_left = document.getElementById('pop_song_left');
let pop_song_right = document.getElementById('pop_song_right');
let pop_song = document.getElementsByClassName('pop_song')[0];


pop_song_right.addEventListener('click', ()=>{
    pop_song.scrollLeft +=330;
});


pop_song_left.addEventListener('click', ()=>{
    pop_song.scrollLeft -=330;
});


let pop_art_left = document.getElementById('pop_art_left');
let pop_art_right = document.getElementById('pop_art_right');
let Artists_bx = document.getElementsByClassName('Artists_bx')[0];


pop_art_right.addEventListener('click', ()=>{
    Artists_bx.scrollLeft +=330;
});


pop_art_left.addEventListener('click', ()=>{
    Artists_bx.scrollLeft -=330;
});