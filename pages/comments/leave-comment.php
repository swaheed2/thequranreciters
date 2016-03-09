<?php 
		 
			
			$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
			$pageId = basename($_SERVER['PHP_SELF']);
			$pageId = str_replace(' ', '', $pageId);

?>
		
<div class="container">
<div class="row reciters-container"> 
	<div class = "col col-md-12">
		<h1 class="reciters">Leave a comment.</h1> 
		<form id="comment-form" method="post" action="/pages/comments/verify-comment.php"  >
			  <div class="form-group">
				<label for="personName">Name</label>
				<input  style="color: black; background-color: white" type="text" name = "name" class="form-control" id="personName" placeholder="Name" required>
			  </div>
			  <div class="form-group">
					<label for="email">Email</label>
					<input type="email" style="color: black; background-color: white"  class="form-control" id="email" name="email" placeholder="Email" required>
			  </div>
			  <div class="form-group">
				<label for="personMessage">Message</label>
				<textarea style="color: black; background-color: white" name = "comment" type="personMessage" class="form-control" id="personMessage" placeholder="Message" required></textarea>
			  </div> 
			  <div class="g-recaptcha" data-sitekey="6LfETQsTAAAAAK-0Gf7gKRVkWZl-2qnxXk3I-5Bd"></div>
			  <input type="submit" name="submit" id = "submit" class="btn btn-warning" value="Add Comment"/> 
			  
				<input type="hidden" id="txtUrl" name="txtUrl" value="<?php echo $url; ?>" />
				<input type="hidden" id="txtUrl" name="pageId" value="<?php echo $pageId; ?>" />
		</form>  
		 
	</div> 
	</div>
</div>
	
<?php $path = $_SERVER['DOCUMENT_ROOT']; include $path. '/pages/comments/comments.php';  ?>