<div class=" archive-playlist-title">
	<p class="reciters">The Complete Holy Quran | القرآن الكريم</p> 
</div>
<div id="player-buttons" class="row btns-player-catagory">  
					<a href='#' class='btn  btn-success' role='button' onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#playlist1'}); return false;"><i class="fa fa-book"></i> Full Quran</a>	   
					
					<a href='#' class=" btn  " role="button" onClick="api_loadPlaylist(hap_players[0],{hidden: false, id: '#clear'}); return false;"><i class="fa fa-book"></i> Clear</a>
					 
					<script>
						$(function() {
						  $('.btn').click( function() {
							$(this).addClass('btn-success').siblings().removeClass('btn-success');
						  });
						});
					</script>
</div> 