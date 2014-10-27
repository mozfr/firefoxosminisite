/*
* Youtube player embedded on homepage
* videoId: is the Youtube link to the video
*/

var tag = document.createElement('script');
tag.src = "http://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubePlayerAPIReady() {
  player = new YT.Player('player', {
    height: '290',
    width: '610',
    videoId: 'xquMr3zYGTw',
    playerVars: {
      'autoplay': 0,
      'hd': 1,
      'showinfo': 0,
      'rel': 0,
      'modesbranding': 1,
      'autohide': 1,
      'cc_load_policy': 1,
    },
    events: {
      'onReady': onPlayerReady,
    }
  });
}

function onPlayerReady(event) {
  event.target.player.pauseVideo();
}

var done = false;
