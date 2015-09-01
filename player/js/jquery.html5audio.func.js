
/* START PLAYER API */

function api_playAudio(player){
	if(player)player.playAudio(); 
}
function api_pauseAudio(player){
	if(player)player.pauseAudio(); 
}
function api_toggleAudio(player){
	if(player)player.toggleAudio(); 
}
function api_stopAudio(player){
	if(player)player.stopAudio(); 
}
function api_checkAudio(player, action){
	if(player)player.checkAudio(action);
}
function api_nextAudio(player){
	if(player)player.nextAudio(); 
}
function api_previousAudio(player){
	if(player)player.previousAudio(); 
}
function api_loadAudio(player, id){
	if(player)player.loadAudio(id); 
}
function api_loadPlaylist(player, id){
	if(player)player.loadPlaylist(id); 
}
function api_addTrack(player, type, format, tracks, pos){
	if(player)player.addTrack(type, format, tracks, pos); 
}
function api_inputAudio(player, track){
	if(player)player.inputAudio(track); 
}
function api_removeTrack(player, id){
	if(player)player.removeTrack(id); 
}
function api_destroyAudio(player){
	if(player)player.destroyAudio(); 
}
function api_destroyPlaylist(player){
	if(player)player.destroyPlaylist(); 
}
function api_toggleShuffle(player){
	if(player)player.toggleShuffle(); 
}
function api_toggleLoop(player){
	if(player)player.toggleLoop(); 
}
function api_checkScroll(player){
	if(player)player.checkScroll(); 
}
function api_reinitScroll(player){
	if(player)player.reinitScroll(); 
}
function api_orderPlaylist(player, action, data){
	if(player)player.orderPlaylist(action, data); 
}


/* GETTERS - SETTERS */
function api_getVolume(player){
	if(player)return player.getVolume(); 
}
function api_setVolume(player, val){
	if(player)player.setVolume(val); 
}
function api_getAutoPlay(player){
	if(player)return player.getAutoPlay(); 
}
function api_setAutoPlay(player, val){
	if(player)player.setAutoPlay(val); 
}
function api_setTitle(player, val){
	if(player)player.setTitle(val); 
}
function api_getSetupDone(player){
	if(player)return player.getSetupDone(); 
}
function api_getPlaylistLoaded(player){
	if(player)return player.getPlaylistLoaded(); 
}
function api_getPlaylistTransition(player){
	if(player)return player.getPlaylistTransition(); 
}
function api_getMediaPlaying(player){
	if(player)return player.getMediaPlaying(); 
} 
function api_getAudioInited(player){
	if(player)return player.getAudioInited(); 
} 
function api_getMediaType(player){
	if(player)return player.getMediaType(); 
} 
function api_getActiveItem(player){
	if(player)return player.getActiveItem(); 
} 
function api_getPlaylistItems(player, value){
	if(player)return player.getPlaylistItems(value); 
} 
function api_getMediaCount(player){
	if(player)return player.getMediaCount(); 
}
function api_getPlaylistHidden(player){
	if(player)return player.getPlaylistHidden(); 
}
function api_getPlaylistList(player){
	if(player)return player.getPlaylistList();
}
function api_getPlaylistData(player){
	if(player)return player.getPlaylistData(); 
}   
function api_getSoundId(player){
	if(player)return player.getSoundId(); 
}  

/* END PLAYER API */


/* START PLAYER CALLBACKS */
			
function audioPlayerSetupDone(instance, sound_id){
	/* called when component is ready to use public API. Returns player instance, sound id. */
	//console.log('audioPlayerSetupDone: ', sound_id);

	if(sound_id == 'popup' || sound_id == 'classic_popup'){
		instance.find('.popup_open').css({cursor:'pointer', display:'block'}).bind('click', function(){
			open_popup(popup_url, popup_width, popup_height, resizable);
			return false;
		});
	}else if(sound_id == 'circle_slideshow' || sound_id == 'bg_slideshow'){
		loadImage();
	}
	
	//remove hover if touch
	if(sound_id == 'classic_single' || sound_id == 'classic' || sound_id == 'classic_white' || sound_id == 'classic_no_time' || sound_id == 'classic_full' || sound_id == 'classic_no_time_advance' || sound_id == 'classic_no_time_no_seekbar_advance' || sound_id == 'classic_min' || sound_id == 'classic_playlist' || sound_id == 'classic_popup' || sound_id == 'wall'|| sound_id == 'drag_to_play' || /wrap_multi/g.test(sound_id)){
		if(instance.getTouch()){
			instance.find('.controls_toggle').addClass('hap_no_hover');
			instance.find('.player_volume').addClass('hap_no_hover');
			instance.find('.controls_prev').addClass('hap_no_hover');
			instance.find('.controls_next').addClass('hap_no_hover');
			instance.find('.popup_open').addClass('hap_no_hover');
		}
	}
	
	
	//create audio after component init!
	if(typeof(hap_group) !== 'undefined'){
		if(hap_group == 'wrap_multi' || hap_group == 'wrap_multi2'){
			if(hap_group == 'wrap_multi2' && sound_id == 'wrap_multi2_selector') return;
			
			var track, type, mp3, ogg='', title, thumb, download, _item = jQuery(instance).closest('.playlistItem');
			if(_item.attr('data-type') != undefined) type = _item.attr('data-type');
			if(_item.attr('data-mp3') != undefined) mp3 = _item.attr('data-mp3');
			if(type && mp3){
				  if(_item.attr('data-ogg') != undefined) ogg = _item.attr('data-ogg');
				  if(_item.attr('data-title') != undefined) title = _item.attr('data-title');
				  if(_item.attr('data-thumb') != undefined) thumb = _item.attr('data-thumb');
				  if(_item.attr('data-download') != undefined) download = _item.attr('data-download');
				  
				  //since we process each track from playlist selector, we want all types to be 'local' when using api_addTrack! (otherwise process track would fail for non local type because we would be trying to process already processed track, and there is no point in doing it once again). So we set local type just for the api_addTrack so the track gets added into the playlist without processing, then afterwards switch types! (maybe local type could be left for all types except youtube, whose playback is treated differently but we bring back original type for all types nevertheless)
				  
				  track = [{type: 'local', origtype:type, mp3: mp3, ogg: ogg, title: title, thumb: thumb, download: download}];
				  //console.log(track);
				  instance.addTrack('visible', 'data', track[0]);
			}
		}
	}
}
function audioPlayerPlaylistLoaded(instance, sound_id){
	/* called when playlist is loaded. Returns player instance, sound id. */
	//console.log('audioPlayerPlaylistLoaded: ', sound_id);
	
	if(typeof(hap_group) !== 'undefined'){
		if(hap_group == 'wrap_multi2' && sound_id == 'wrap_multi2_selector'){
			makeHapPlayers(instance);
		}
	}
	
	if(sound_id == 'drag_text1' || sound_id == 'drag_thumb1'){
		//make draggable from playlist selector into player playlist
		instance.find("li[class*=hap_draggable]").draggable({
			connectToSortable: ".hap_sortable",
			helper: "clone",
			revert: "invalid"
		});
	}
	else if(sound_id == 'drag_text2' || sound_id == 'drag_thumb2'){
		//console.log(jQuery("#playlist2").hasClass('ui-droppable'));
		//action when item is dropped from playlist selector into player playlist
		jQuery("#playlist2").droppable({
			tolerance: "touch",
			drop: function(event, ui) {
			   //draggable item
			   //console.log(jQuery(ui.draggable));
			   var _item = jQuery(ui.draggable);
			   //remove locked
			   if(_item.hasClass('playlist_locked')){
				   _item.removeClass('playlist_locked');
			   }
		   }
		});
	}
	
	//enable selector
	if(jQuery("#hap_playlist").length)jQuery("#hap_playlist").selectbox("enable");
}
function audioPlayerPlaylistEnd(instance, sound_id){
	/* called when current playlists reaches end. Returns player instance, sound id. */
	//console.log('audioPlayerPlaylistEnd: ');
} 
function audioPlayerSoundEnd(instance, sound_id, counter){
	/* called when current playing sound ends. Returns player instance, sound id, media counter. */
	//console.log('audioPlayerSoundEnd: ');
}
function audioPlayerSoundStart(instance, sound_id, counter){
	/* called when current playing sound starts. Returns player instance, sound id, media counter. */
	//console.log('audioPlayerSoundStart: ', sound_id);
}
function audioPlayerSoundPlay(instance, sound_id, counter){
	/* called when sound is played. Returns player instance, sound id, media counter. */
	//console.log('audioPlayerSoundPlay: ');
	
	if(typeof(hap_group) !== 'undefined' && typeof(hap_players) !== 'undefined' && hap_players.length && typeof(soundArr) !== 'undefined' && soundArr.length){
		var i = 0, len = soundArr.length;
		for(i;i<len;i++){
			if(sound_id != soundArr[i].sound_id){
				//console.log('audioPlayerSoundPlay: ', sound_id, soundArr[i].sound_id);
				if(typeof api_checkAudio !== 'undefined')api_checkAudio(soundArr[i].player_id, 'pause');
			}
		}
	}
}
function audioPlayerSoundPause(instance, sound_id, counter){
	/* called when sound is paused. Returns player instance, sound id, media counter. */
	//console.log('audioPlayerSoundPause: ', sound_id);
}
function itemTriggered(instance, sound_id, counter){
	/* called when new sound is triggered. Returns player instance, sound_id, media counter. */
	//console.log('itemTriggered: ');
	
	if(sound_id == 'artwork1' || sound_id == 'basic' || sound_id == 'basic_h'){
		var player_thumb = instance.find('.player_thumb').find('img'),
			data = instance.getPlaylistData(),
			thumb = data[counter].thumb;
		if(player_thumb.length && thumb){
			//console.log(thumb);
			player_thumb.attr('src', instance.get_hap_source_path() + thumb);
		}
	}
}
function playlistItemEnabled(instance, sound_id, target, id){
	/* called on playlist item enable. Returns player instance, sound_id, playlist item (target), playlist item id (playlist items have data-id attributes starting from 0). */
	//console.log('playlistItemEnabled: ');
	
	if(sound_id == 'wall'){
		jQuery(target).find('p[class=hap_title]').remove();
	}
}
function playlistItemDisabled(instance, sound_id, target, id){
	/* called on playlist item disable. Returns player instance, sound_id, playlist item (target), playlist item id (playlist items have data-id attributes starting from 0). */
	//console.log('playlistItemDisabled: ');
	
	if(sound_id == 'wall'){
		var data = instance.getPlaylistData(),
			title = data[id].title;
		if(title){
			var p = jQuery('<p>"'+title+'"</p>').addClass('hap_title');
			p.appendTo(jQuery(target)).css('marginTop',-p.outerHeight(true)/2+'px');
		}
	}
}
function playlistItemRollover(instance, sound_id, target, id, active){
	/* called on playlist item mouseenter. Returns player instance, sound_id, playlist item (target), playlist item id (playlist items have data-id attributes starting from 0), active (is active playlist item, boolean). */
	//console.log('playlistItemRollover: ');
	if(sound_id == 'wall' && !active){
		var data = instance.getPlaylistData(),
			title = data[id].title;
		if(title){
			var p = jQuery('<p>"'+title+'"</p>').addClass('hap_title');
			p.appendTo(jQuery(target)).css('marginTop',-p.outerHeight(true)/2+'px');
		}
	}
	
}
function playlistItemRollout(instance, sound_id, target, id, active){
	/* called on playlist item mouseleave. Returns player instance, sound_id, playlist item (target), playlist item id (playlist items have data-id attributes starting from 0), active (is active playlist item, boolean). */
	//console.log('playlistItemRollout: ');
	if(sound_id == 'wall' && !active){
		jQuery(target).find('p[class=hap_title]').remove();
	}
	
}
function playlistEmpty(instance, sound_id){
	/* called when playlist becomes empty (no items in playlist after new playlist has been created or last playlist item removed from playlist). Returns player instance, sound_id. */
	//console.log('playlistEmpty: ', sound_id);
	if(sound_id == 'drag_text2' || sound_id == 'drag_thumb2'){
		instance.destroyAudio();
		if(instance.find('p[class=drag_info]').length==0){
			instance.find('.playlist_inner').prepend($('<p class="drag_info">DRAG THE SONGS IN HERE!</p>'));
			instance.loadPlaylist({hidden: false, id: '#playlist2'});
			
		}
	}
}
function dropReceive(instance, sound_id){
	/* called when item gets dropped into the playlist. Returns player instance, sound_id. */
	//console.log('dropReceive: ');
	if(sound_id == 'drag_text2' || sound_id == 'drag_thumb2'){
		instance.find('p[class=drag_info]').remove();
	}
}

/* END PLAYER CALLBACKS */


/* START TRACK LIST FOR PLAYER API */

/**** html formatted tracks ****/

 

/* database tracks in html form, but in data form in database! */
/*
var trackList_database = [
	"<li class= 'playlistItem' data-type='database_data' data-path='ap_hap' data-table='sound'/>"
];
var trackList_database2 = [
	"<li class= 'playlistItem' data-type='database_data' data-path='ap_hap' data-table='sound' data-limit='3'/>"
];
var trackList_database3 = [
	"<li class= 'playlistItem' data-type='database_data' data-path='ap_hap' data-table='sound' data-range='1,5'/>"
];*/

 
	
	
/**** tracks in form of data (objects) ****/	
/*
parameters:
required:
	type: local, podcast, soundcloud, folder, xml, youtube_single, youtube_playlist, ofm_single, ofm_playlist, ofm_project
	mp3: mp3 path to audio file (you can also use 'path' instead of 'mp3')
optional:
	for local type:
		ogg: path to the ogg audio file, NOTE: still required if ogg is used! (not if only mp3 audio format is used)
		title: add song title
		thumb: thumbnail path
	for folder type:
		thumb: thumbnail path (otherwise it will automatically assume thumbnail with the same name as mp3 file exist in the same folder, with 'jpg' extension)	
	for all types:
		thumb: backup thumbnail path (if this data type is missing a thumbnail)
		download (global download, activates global download button on active playlist item): 
				- for youtube: enter download url (required!)
				- for other types: enter download url or 'true' (true will take mp3 path for download)
		dlink: (individual download, creates download icon in playlist)
				- for youtube: enter download url (required!)
				- for other types: enter download url or 'true' (true will take mp3 path for download)
		plink: Enter url (creates url icon in playlist, which links to url, target _blank)		
*/
 
	
/* END TRACKS LIST FOR PLAYER API */	


/* DEFAULTS */

var audio = document.createElement('audio'), mp3Support, oggSupport, html5Support=false, hap_source_path='';
if (audio.canPlayType) {
	html5Support=true;
	mp3Support = !!audio.canPlayType && "" != audio.canPlayType('audio/mpeg');
	oggSupport = !!audio.canPlayType && "" != audio.canPlayType('audio/ogg; codecs="vorbis"');
}

var isMobile = (/Android|webOS|iPhone|iPad|iPod|sony|BlackBerry/i.test(navigator.userAgent));

var isIE = false, ieBelow9 = false, ieBelow8 = false;
var ie_check = getInternetExplorerVersion();
if (ie_check != -1){
	isIE = true;
	if(ie_check < 9)ieBelow9 = true;
	if(ie_check < 8)ieBelow8 = true;
} 
function getInternetExplorerVersion(){
  var rv = -1;
  if (navigator.appName == 'Microsoft Internet Explorer')
  {
	var ua = navigator.userAgent;
	var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
	if (re.exec(ua) != null)
	  rv = parseFloat( RegExp.$1 );
  }
  else if (navigator.appName == 'Netscape')
  {
	var ua = navigator.userAgent;
	var re  = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");
	if (re.exec(ua) != null)
	  rv = parseFloat( RegExp.$1 );
  }
  return rv;
}

/* END DEFAULTS */

/* FLASH EMBED PART (for non html5 browsers, youtube and flash audio) */

function checkFlash(dataArr, embed_circle){
	
	var i = 0, len = dataArr.length;
	
	if(!html5Support){//flash movies
			
		for(i;i<len;i++){
			
			var a_id = 'flashAudio' + i;
			var f_id = 'flashMain' + i;
			var c_id = 'circleMain' + i;
			
			dataArr[i].settings.flash_id = i;
			dataArr[i].settings.flashAudio = '#'+a_id;
			dataArr[i].settings.flashYoutube = '#'+f_id;
			dataArr[i].settings.circleMain = '#'+c_id;
			
			var flashAudioWrapper = jQuery('<div/>').addClass('flashAudio');
			var flashAudio = jQuery("<div id='"+a_id+"'><a href='http://www.adobe.com/go/getflashplayer'><img src='http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif' alt='Get Adobe Flash player' /></a></div>").appendTo(flashAudioWrapper);
			
			var flashMainWrapper = jQuery('<div/>').addClass('flashMain');
			var flashMain = jQuery("<div id='"+f_id+"'><a href='http://www.adobe.com/go/getflashplayer'><img src='http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif' alt='Get Adobe Flash player' /></a></div>").appendTo(flashMainWrapper);
			
			dataArr[i].holder.append(flashAudioWrapper);
			dataArr[i].holder.append(flashMainWrapper);
			
			if(embed_circle){
				var flashCircleWrapper = jQuery('<div/>').addClass('circleMain');
				var flashCircle = jQuery("<div id='"+c_id+"'><a href='http://www.adobe.com/go/getflashplayer'><img src='http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif' alt='Get Adobe Flash player'/></a></div>").appendTo(flashCircleWrapper);
				dataArr[i].holder.find('div[class=circlePlayer]').append(flashCircleWrapper);
			}
				
		}
	}else{

		i = 0;
		for(i;i<len;i++){
			
			if(dataArr[i].settings.useOnlyMp3Format && !mp3Support){//use flash to play mp3 on browsers that do not support mp3 
				
				var a_id = 'flashAudio' + i;
				
				dataArr[i].settings.flash_id = i;
				dataArr[i].settings.flashAudio = '#'+a_id;
				
				var flashAudioWrapper = jQuery('<div/>').addClass('flashAudio');
				var flashAudio = jQuery("<div id='"+a_id+"'><a href='http://www.adobe.com/go/getflashplayer'><img src='http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif' alt='Get Adobe Flash player' /></a></div>").appendTo(flashAudioWrapper);
				
				dataArr[i].holder.append(flashAudioWrapper);
					
			}
		}
	}	
}	
	
var hap_params = {
	quality: "high",
	scale: "noscale",
	salign: "tl",
	wmode: "transparent",
	bgcolor: "#111111",
	devicefont: "false",
	allowfullscreen: "true",
	allowscriptaccess: "always"	
};
function embedFlashMain(id){
	if(jQuery('.flashMain').length==0)return;
	jQuery('.flashMain').css('display','block');
	var flashvars = {},attributes = {id:id};
	swfobject.embedSWF("preview.swf", id, "320px", "240px", "9.0.0", "expressInstall.swf", flashvars, hap_params, attributes);
}
function embedFlashAudio(id){
	if(jQuery('.flashAudio').length==0)return;
	jQuery('.flashAudio').css('display','block');
	var flashvars = {},attributes = {id:id};
	swfobject.embedSWF("preview2.swf", id, "100px", "100px", "9.0.0", "expressInstall.swf", flashvars, hap_params, attributes);
}
function embedFlashCircle(id){
	if(jQuery('.circleMain').length==0)return;
	jQuery('.circleMain').css('display','block');
	var flashvars = {},attributes = {id:id};
	swfobject.embedSWF("circle.swf", id, "160px", "160px", "9.0.0", "expressInstall.swf", flashvars, hap_params, attributes);
}

//******** functions called from flash
var jsReady = false;
function isReady() {return jsReady;}

/* flash youtube callbacks */
function flashVideoEnd(data){
	if(hap_players[data.id])hap_players[data.id].flashVideoEnd();
}
function flashVideoStart(data){
	if(hap_players[data.id])hap_players[data.id].flashVideoStart();
}
function flashVideoPause(data){
	if(hap_players[data.id])hap_players[data.id].flashVideoPause();
}
function flashVideoResume(data){
	if(hap_players[data.id])hap_players[data.id].flashVideoResume();
}
function flashYoutubeData(data){
	if(hap_players[data.id])hap_players[data.id].flashYoutubeData(data.bl,data.bt,data.t,data.d);
}
/*flash audio callbacks*/
function flashAudioEnd(data){
	if(hap_players[data.id])hap_players[data.id].flashAudioEnd();
}
function flashAudioData(data){
	if(hap_players[data.id])hap_players[data.id].flashAudioData(data.bl,data.bt,data.t,data.d);
}
/*flash circle callbacks*/
function flashCircleToggle(data){
	if(hap_players[data.id])hap_players[data.id].flashCircleToggle();
}
function flashCircleOverLoader(data){
	if(hap_players[data.id])hap_players[data.id].flashCircleOverLoader(data.val);
}
function flashCircleOutLoader(data){
	if(hap_players[data.id])hap_players[data.id].flashCircleOutLoader();
}
function flashCircleSeek(data){
	if(hap_players[data.id])hap_players[data.id].flashCircleSeek(data.val);
}

/* END FLASH EMBED PART */




/* START POPUP RELATED CODE */

function notify_popup(){//called from popup window when popup window has opened!
	//console.log('notify_popup');
	if(hap_popup && hap_popup.initPopup != undefined){//dont do anything if we are not going to be able to open popup!
		if(hap_settings.autoUpdateWindowData)updatePlayerData();
	
		if(hap_players && hap_players[0]){
			if(hap_players[0].destroyPlaylist != undefined)hap_players[0].destroyPlaylist();
		}
		jQuery('#componentWrapper').css('display','none');//hide player in parent page (we cant clear html because we dont dynamically append componentWrapper html with jquery! Only if we save the player html prior to this action so we can reinstantiate it later.)
		
		try {
			if(hap_popup.initPopup != undefined)hap_popup.initPopup(hap_settings);
			if(hap_players[0])hap_players[0].find('.popup_open').css('display','none');
		}catch(e){
			alert('parent notify_popup error: ' + e.message);
			return false;
		}
	}
}

//called from popup window when popup is closed (opens player in parent window again, remove this function if you dont want this feature)
function open_player(player){
	//console.log('open_player');
	if(hap_settings.autoUpdateWindowData){
		if(player)hap_players[0] = player;//get player reference
		updatePlayerData(true);
	}
	hap_players[0] = jQuery('#componentWrapper').css('display','block').html5audio(hap_settings);//show player before init
	if(!html5Support)hap_players[0].embedFlash();
	hap_players[0].find('.popup_open').css('display','block');
}

function open_popup(url, w, h, resizable){//public api to open popup
	//console.log('open_popup');
	if(typeof(url) === 'undefined' || typeof(w) === 'undefined' || typeof(h) === 'undefined') return false;
	var cw = (window.screen.width - w) / 2, ch = (window.screen.height - h) / 2;//center popup in window
	
	//if popup window not already opened!
	if(!hap_popup || hap_popup.closed) {
		if(resizable){
			hap_popup=window.open(url,'hap_popup_window','menubar=no,toolbar=no,location=no,scrollbars=1,resizable,width='+w+',height='+h+',left='+cw+',top='+ch+'');
		}else{
			hap_popup=window.open(url,'hap_popup_window','menubar=no,toolbar=no,location=no,width='+w+',height='+h+',left='+cw+',top='+ch+'');
		}
		//hap_popup=window.open(url,'name','width=700,height=300');//opera doesnt want to open popup with vars in options (instead opens new tab)!
		if(!hap_popup) {
			alert("Music Player can not be opened in a popup window because your browser is blocking Pop-Ups. Please allow Pop-Ups in browser for this site to use the Music Player.");
			return false;
		}
		if (window.focus) {hap_popup.focus();}
	}else{
		//console.log('popup already opened!');	
	}
	return false;
}

function updatePlayerData(isPopup){
	//console.log('updatePlayerData');
	if(!hap_players[0] || !hap_settings)return false;
	//start update settings to pass between players in popup and parent window (remove these function calls if you want to start from initail settings every time player in popup/parent is opened). This will copy last volume, whole playlist and active item.
	if(!isNaN(hap_players[0].getVolume()))hap_settings.defaultVolume = hap_players[0].getVolume();//volume
	if(!isNaN(hap_players[0].getActiveItem()))hap_settings.activeItem = hap_players[0].getActiveItem();//active item
	
	//console.log(hap_players[0].getVolume(), hap_players[0].getActiveItem(), hap_players[0].getMediaPlaying());
	
	//active playlist
	var playlistLoaded = hap_players[0].getPlaylistLoaded();
	if(playlistLoaded){
		var hidden_playlist = hap_players[0].getPlaylistHidden();
		if(!hidden_playlist){ 
			var playlist = hap_players[0].find('.playlist_inner').find('ul');
			if(playlist.length > 0){
				var activePlaylist = playlist.attr('id');//get id attribute
				if(isPopup && isIE){
					var curr_playlist = jQuery(playlist.clone(true, true).wrap('<p>').parent().html());//used for popup in IE (HIERARCHY_REQUEST_ERROR)!! important!
				}else{
					var curr_playlist = playlist.clone(true, true);
				}
				jQuery(hap_settings.playlistList).find('#'+activePlaylist).remove();//remove playlist with active id from playlist_list, we are going to paste new version inside (with the same id attribute) in case playlist content has been changed (added/removed tracks/order etc...)
				curr_playlist.appendTo(jQuery(hap_settings.playlistList));//copy current playlist into playlist_list
				hap_settings.activePlaylist = {hidden: false, id:'#'+activePlaylist};//active playlist
			}
		}else{//hidden playlist
			var playlist = hap_players[0].get_hidden_playlist_holder().children();//hidden_playlist_holder doesnt have ul node, just li nodes
			if(playlist.length > 0){
				var activePlaylist = 'playlist' + Math.floor((Math.random()*9999));//get id attribute
				var curr_playlist = jQuery('<ul id='+activePlaylist+'/>');
				if(isPopup && isIE){
					jQuery(playlist.clone(true, true).wrap('<p>').parent().html()).appendTo(curr_playlist);//used for popup in IE (HIERARCHY_REQUEST_ERROR)!! important!
				}else{
					playlist.clone(true, true).appendTo(curr_playlist);
				}
				if(hap_players[0].getPlaylistList()){
					curr_playlist.appendTo(hap_players[0].getPlaylistList());//copy current playlist into playlist_list
					hap_settings.activePlaylist = {hidden: true, id:'#'+activePlaylist};//active playlist
					hap_players[0].get_hidden_playlist_holder().html('');//empty hidden_playlist_holder
				}
			}
		}
		var mediaPlaying = hap_players[0].getMediaPlaying();
		mediaPlaying ? hap_settings.autoPlay=true : hap_settings.autoPlay=false;
		//seek to?, cookies , remember time (double check for all media types + yt separatelly!)
	}else{
		hap_settings.activePlaylist='';
	}
	//end update settings */	
}

/* END POPUP RELATED CODE */

