var images = [
  { id: "askin", audio: "audio/5.mp3" },
  { id: "madrigal", audio: "audio/3.mp3" },
  { id: "mabel", audio: "audio/2.mp3" },
  { id: "semicenk", audio: "audio/ab.mp3" },
  { id: "gunes", audio: "audio/1.mp3" },
  { id: "masterPlay", audio: "audio/4.mp3" },
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