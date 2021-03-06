<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Live Chat</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		var from = null, start =0, url = 'http://localhost/livechat.php';
		$(document).ready(function(){
			from = prompt("Please enter your name");
			load();

			 $('form').submit(function (e){
			 	$.post(url, {
			 		message: $('#message').val(),
			 		from: from
				});
				$('#message').val('');
			 	return false;
			 })
		});

		function load(){
			$.get(url + '?start=' + start, function(result){
				if(result.items){
					result.items.forEach(item =>{
						start = item.id;
						$('#messages').append(renderMessage(item));
					});
					$('#messages').animate({scrollTop: $('#messages')[0].scrollHeight});
				};
				load();
			});
		}

		function renderMessage(item){
			let time = new Date(item.created);
			time = `${time.getHours()}:${time.getMinutes() < 10 ? '0' : ''}${time.getMinutes()}`;
			return `<div class="msg"><p>${item.from}</p>${item.message}<span>${time}</span></div>`
		}
	</script>
	<style>
		body{
			margin: 0;
			overflow: hidden;			
		}
		#messages{
			height: 88vh;
			overflow-x: hidden;
			padding: 10px;
			background-image: url(images/bg.png);
		}
		form{
			display: flex;
		}
		input{
			font-size: 1.2rem;
			padding: 10px;
			margin: 10px 5px;
			appearance: none;
			-webkit-appearance: none;
			border: 1px solid #ccc;
			border-radius: 5px;						
		}
		#message{
			flex: 2;
		}

		.msg{
			background-color: #dcf8c6;
			padding: 5px 10px;
			border-radius: 5px;
			margin-bottom: 8px;
			width: fit-content;			
		}

		.msg p{
			margin: 0;
			font-weight: bold;
		}

		.msg span{
			font-size: 0.7rem;
			margin-left: 15px;

		}

	</style>
</head>
<body>

	<div id="messages"></div>
	<form>
		<input type="text" id="message" autocomplete="off" autofocus placeholder="Type message...">		
		<input type="submit" value="Send">
	</form>
</body>
</html>