$(function(){
	
	var note = $('#note'),
		ts = new Date(2012, 0, 1),
		newYear = true;
	
	if((new Date()) > ts){
		// The new year is here! Count towards something else.
		// Notice the *1000 at the end - time must be in milliseconds
		
        //gettime拿到的是毫秒，乘1000=1杪
        ts = (new Date()).getTime() + 30*1000;
		newYear = false;
	}
		
	$('#countdown').countdown({
		timestamp	: ts,
		callback	: function( hours, minutes, seconds){
			
			
		}
	});
	
});
