
var pathname = window.location.pathname; // Returns path only
var url      = window.location.href;     // Returns full URL
var segments = pathname.split( '/' );
var action = segments[1];
var base = segments[2];
var pair = segments[3];

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

		// console.log(action);
		/*
			Socket manager
		*/
		if(pair) $("#HeaderPair").text(pair);
		var socket = io.connect('//api.btcrip.co:8080');

		socket.on('connect', function () {
		    console.log('connected');
		    connectStatus('<i class="ti-wifi"></i> Connect<br>Sockets');
		    socket.on('broadcast', function (data) {
		        console.log(data);
		        //socket.emit("broadcast", data);
		        //alert(data.text);
		        if(action == "exchange"){
			        if(data.type == "notification"){
			        	getDataJson();
			        }
			        if(data.type == "chat"){
			        	$("#chatbox ul").append('<li>'+data.text+'</li>');
			        	$("#chatbox").animate({scrollTop: $("#chatbox").get(0).scrollHeight}, 100);
			        }
			    }
		        if(data.type == "deposit"){
		        	alertDashboard("Deposit",data.text);
		        }
		        if(data.type == "order"){
		        	alertDashboard("Order",data.text);
		        }
		        if(data.type == "system"){
		        	alertDashboard("Notify Systems",data.text);
		        }
		    });

		    socket.on('disconnect', function () {
		        console.log('disconnected');
		        connectStatus('Disconnect<br>Sockets');
		    });
		    
		    mytask();
		});

		/*
		Chart Form
		*/
		$("form#chatForm").submit(function(){
			var inbox = $(this).find("input[type=text]");
			$.ajax({
		        url: "/api/chat",
		        type: "post",
		        data: {text : inbox.val()}
		    });
		    inbox.val('');
		    inbox.focus();
		    return false;
		});




		var syncBalancer = function(){
			$.getJson("/api/balancer", function(data){

			});
		};


		var mytask = function(){
			$.get("/dashboard/mytask", function(data){
				if(data){
					$("#mytask").html(data);
				}
			});
		};


		var alertDashboard = function(title,data, type="success"){
			type = (type == "error" ? "danger" : type);

			html = '<div class="alert alert-'+type+' alert-dismissible fade show" role="alert">' +
					  '<strong>'+title+'!</strong> '+data+'.' +
					  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
					    '<span aria-hidden="true">&times;</span>' +
					  '</button>' +
					'</div>';

			$.notify({
					// options
					title : "Test",
					message: 'Hello World' 
				},{
					// settings
					template : html,
					type: 'danger'
				});

		};

		var connectStatus = function(text){
			$("#connect a").html(text);
		};
		

});