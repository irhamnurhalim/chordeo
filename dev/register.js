$(document).ready(function() {	$("#register, #login").click(function(e) {		var name = ($(event.target).attr('id') == 'register') ? 'Registration' : 'Login';		$('#message').slideUp('fast');				$.post('service.php', $('#mainform').serialize() +'&action='+ $(event.target).attr('id'), function(data) {			var code = $(data)[0].nodeName.toLowerCase();						$('#message').removeClass('error');			$('#message').removeClass('success');			$('#message').addClass(code);			if(code == 'success') {				$('#message').html(name + ' was successful.');			}			else if(code == 'error') {								var id = parseInt($(data).attr('id'));				switch(id) {					case 0:						$('#message').html('This username has already been taken. Try some of these suggestions:<br/><br/>');												form = $(document.createElement('form'));						$(data).find('suggestions > suggestion').each(function(idx, el) {							radio = $(document.createElement('input'));							radio.attr({type: 'radio', name: 'suggested', id: 'suggested_'+idx, value: el.innerHTML});														lbl = $(document.createElement('label'));							lbl.attr('for', 'suggested_'+idx);							lbl.html(el.innerHTML);														form.append(radio);							form.append(lbl);							form.append('<br/>');						});						$('#message').append(form);												$('#message form input[type="radio"]').click(function() {							$('#username').val($(this).attr('value'));						});						break;					case 1:						$('#message').html('The email entered is invalid.');						break;					case 2:						$('#message').html('The username or password you entered was invalid.');						break;					default:						$('#message').html('An error occurred, please try again.');				}			}			$('#message').slideDown('fast');		});		return e.preventDefault();	});});