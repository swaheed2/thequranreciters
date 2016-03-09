		<script>  
			function videos(){
									var urlJ = "https://archive.org/embed/" + name; 
									function functionName() {
										var url = "https://www.googleapis.com/youtube/v3/videos?part=id%2Csnippet&key=AIzaSyAvYkGoXMvEsxIOp2ICmL9vgdI7xsupXDg&id="; 
										for(var i=0; i < videosURL.length; i++){
											url = url + videosURL[i] + ","; 
										}
										url = url.substring(0, url.length - 1);
										var output = ' ';
										console.log(url);
										function jsonpCallback(response) {
											//after success some staff 
											items = response.items;    
											
											var output = ''; 
											if(typeof items != 'undefined'){
												for(var i=0; i < items.length; i++) {
													 output+= '<div class="col-md-4 col-sm-6 video-div"><div class="col-md-12 archive-playlist-title youtube-title"><p class="reciters"><strong>' + items[i].snippet.title + '</strong></p></div> <iframe width="100%" height="250" src="//www.youtube.com/embed/' + videosURL[i] + '?rel=0&modestbranding=1&autohide=1&showinfo=0" frameborder="0" allowfullscreen></iframe> <a href="http://www.yt-mp3.com/watch?v=' + videosURL[i] + '&logo=http://thequranreciters.com/img/logo/logo.png"  onClick="return YoutubeMp3Script(this)" class="btn btn-black btn-lg btn-block" role="button"><i class="fa fa-music"> Download Mp3</i></a> </div>';  	 
												}   
											}
											document.getElementById("youtube-videos").innerHTML = output;
											//console.log(output);
										}
					 
										$.ajax({
											url: url,
											dataType: 'jsonp',
											error: function(xhr, status, error) {
												alert(error.message);
											},
											success: jsonpCallback
										});
										return false;
									}
									functionName();  
			}
			videos();
		</script>  
 