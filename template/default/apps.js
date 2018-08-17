

jQuery(document).ready(function(){
				// Grab the current date
				var currentDate = new Date();
				// Set some date in the future. In this case, it's always Jan 1
				var futureDate  = new Date('2018-10-29 00:00:00');//Tue Jan 01 2019 00:00:00 GMT+0700 (+07)

				// Calculate the difference in seconds between the future and current date
				var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;
				var clock = $('.timer-wapper').FlipClock(diff,{
					clockFace: 'DailyCounter',
					countdown: true
				});

	var socket = io.connect('//api.btcrip.co:8080');

	socket.on('connect', function () {
	    console.log('connected');

	    socket.on('broadcast', function (data) {
	        console.log(data);
	        //socket.emit("broadcast", data);
	        //alert(data.text);
	    });

	    socket.on('disconnect', function () {
	        console.log('disconnected');
	    });
	});
	
});