//
let previous = document.querySelector('#pre');
let play = document.querySelector('#play');
let title = document.querySelector('#title');
let title2 = document.querySelector('#title2');
let recent_volume = document.querySelector('#volume');
let volume_show = document.querySelector('#volume_show');
let slider = document.querySelector('#duration_slider');
let show_duration = document.querySelector('#show_duration');
let track_image = document.querySelector('#track_image');
let auto_play = document.querySelector('#auto');
let present = document.querySelector('#present');
let total= document.querySelector('#total');
let artist = document.querySelector('#artist');
let genre = document.querySelector('#Genre');

let timer;
let autoplay = 0;

let index_no= 0;
let playing_song = false;

//created a audio element

let track = document.createElement('audio');

let ALL_song =
	[
		{
			name:"Hey Dj",
			name2:"Hey Dj",
			path:"music/Hey Dj.mp3 ",
			img:"images/Blind2.jpg",
			singer:"CNCO",
			genre:"Pop"
		},	
		{
			name:"Perfect",
			name2:"Perfect",
			path:"music/Perfect.mp3 ",
			img:"images/Beauty.jpg",
			singer:"One Direction",
			genre:"Classical"
		},
		{
			name:"Shower",
			name2:"Shower",
			path:"music/Shower.mp3 ",
			img: "images/Dragon2.jpg",
			singer:"Becky G",
			genre:"Pop"
		},
		
		{
			name:"Taki Taki",
			name2:"Taki Taki",
			path:"music/Taki Taki.mp3 ",
			img: "images/joker2.jpg",
			singer:"David Guetta",
			genre:"Urban Latin"
		},
		{
			name:"Touch",
			name2:"Touch",
			path:"music/Touch.mp3 ",
			img: "images/leg4.jpg",
			singer:"Little Mix",
			genre:"Pop"
		},
		
	];


//All function

//loading the track

function load_track(index_no)
{
	clearInterval(timer);
	reset_slider();
	track.src = ALL_song[index_no].path;
	title.innerHTML = ALL_song[index_no].name;
	track_image.src = ALL_song[index_no].img;
	artist.innerHTML = ALL_song[index_no].singer;
	title2.innerHTML = ALL_song[index_no].name2;
	Genre.innerHTML = ALL_song[index_no].genre;
	track.load();
	
	total.innerHTML = ALL_song.length;
	present.innerHTML = index_no + 1;
}
    total.innerHTML = ALL_song.length;
    present.innerHTML = index_no + 1;
    timer = setInterval(range_slider , 1000);

load_track(index_no);


//Mute Sound
function mute_sound()
{
	track.volume = 0;
	volume.value = 0;
	volume_show.innerHTML = 0;
}

//reset Song Slider
function reset_slider()
{
	slider.value = 0;
}


//Checking the song is playing or not
function justplay()
{
	if(playing_song==false)
		{
			playsong();
		}
	else
		{
			pausesong();
		}
}

//play song
function playsong()
{
	track.play();
	playing_song = true;
	play.innerHTML='<i class="fa fa-pause"></i>';
}

//pause song
function pausesong()
{
	track.pause();
	playing_song = false;
	playing_song = false;
	play.innerHTML = '<i class="fa fa-play"></i>';
}

///Next Song
function next_song()
{
	if (index_no <ALL_song.length - 1)
		{
			index_no += 1;
			load_track(index_no);
			playsong();
		}
	else
		{
			index_no = 0;
			load_track(index_no);
			playsong(); 
		}
}

//previous Song
function previous_song()
{
	if(index_no > 0)
		{
			index_no -= 1;
			load_track(index_no);
			playsong();
		}
	
	else
		{
			index_no = ALL_song.length;
			load_track(index_no);
			playsong();
		}
}


// cjange volume
function volume_change()
{
	volume_show.innerHTML = recent_volume.value;
	track.volume = recent_volume.value/100;
	
}

//change slider position
function change_duration()
{
	slider_position = track.duration * (slider.value / 100);
	track.currentTime = slider_position;
}


//autoplay function
function autoplay_switch()
{
	if (autoplay==1)
		{
			autoplay=0;
			autoplay.style.background= "rgba(255,255,255,0.2)";
		}
	else{
		autoplay = 1;
		autoplay.style.background= "#FF8A65";
	}
}


function range_slider()
{
	let position = 0;
	
	//update Slider Position
	if(!isNaN(track.duration))
		{
			position = track.currentTime * (100 / track.duration);
			slider.value = position;
		}
//function will run when the song is over
	if(track.ended)
		{
			play.innerHTML = '<i class="fa fa-headphones"></i>';
			if (autoplay==1)
				{
					index_no +=1;
					load_track(index_no);
					playsong();
				}
		}
}





