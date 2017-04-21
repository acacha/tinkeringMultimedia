var video = videojs('awesome_video').ready(function(){
  var player = this;

  player.on('ended', function() {
    alert('video is done!');
  });
});