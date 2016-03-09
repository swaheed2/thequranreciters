<?php  
		$path = $_SERVER['DOCUMENT_ROOT'];
	$section = "contact"; 
	include $path. '/pages/header.php';
	include $path . '/pages/navbar.php'; 
	  
	
	    
?>  
<div class="container">
			<div class="row reciter-container">
				 <div class="col-md-12 archive-playlist-title">
						<h1 class="reciters"><strong>Reciter Submission</strong>  </h1>
						<p class="reciters"><strong>Fill the form below to submit a Qur'an Reciter. If approved, the reciter will be added to the website. </strong>  </h1>
				</div>
				<iframe id="JotFormIFrame" onload="window.parent.scrollTo(0,0)" allowtransparency="true" src="http://form.jotform.us/form/51667798676176" frameborder="0" style="width:100%; height:1100px; border:none;" scrolling="no"></iframe>
<script type="text/javascript">window.handleIFrameMessage = function(e) {var args = e.data.split(":");var iframe = document.getElementById("JotFormIFrame");if (!iframe)return;switch (args[0]) {case "scrollIntoView":iframe.scrollIntoView();break;case "setHeight":iframe.style.height = args[1] + "px";break;case "collapseErrorPage":if (iframe.clientHeight > window.innerHeight) {iframe.style.height = window.innerHeight + "px";}break;case "reloadPage":window.location.reload();break;}};if (window.addEventListener) {window.addEventListener("message", handleIFrameMessage, false);} else if (window.attachEvent) {window.attachEvent("onmessage", handleIFrameMessage);}</script>
				
			</div>
			
</div>			



<?php  include $path . '/pages/footer.php'; ?>