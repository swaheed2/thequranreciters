<script>    
	var usersOnline = 0 
	function functionName() {
	var url = "https://the-quran-reciters.appspot.com/query?id=ahRzfnRoZS1xdXJhbi1yZWNpdGVyc3IVCxIIQXBpUXVlcnkYgICAgICAgAoM"; 
		var output = ' ';
		function jsonpCallback(response) {
			//after success some staff
			var usersOnline = response['totalsForAllResults']['rt:activeUsers'];
			usersOnline = Number(usersOnline);
			usersOnline++;
			div = document.getElementById('user-form-footer'); 
			mobile = document.getElementById('user-body-mobile'); 
			var part1 = "<br><br><button class='btn btn-primary disabled'><i class='icon-eye-open'></i> Users Online: "; 
			var part2 = '</button>  '; 
			div.innerHTML = div.innerHTML + part1 + usersOnline + part2 ; 
		    mobile.innerHTML = mobile.innerHTML + part1 + usersOnline + part2 ; 
			//console.log("Online: " + result); 
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
	 
</script>