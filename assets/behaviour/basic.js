(function($){

	$.fn.addProject = function(name,creator){
		this.each(function(){
			var pn = $("<div>").addClass("name").html(name);
			var pc = $("<div>").addClass("creator").html("by " + creator);
			$(this).append(pn).append(pc);
		});
		return this;
	}
	
	$.fn.addDesc = function(str){
		this.each(function(){
			var content = $("<div>").addClass('info').html(str);			
			$(this).append(content);
		});
		return this;
	}
	
	$.fn.addNeeded = function(price){
		var str = '<div class="needed"><b>IDR ' + price +',-</b> Needed</div>';
		this.each(function(){
			$(this).append(str);
		});
		return this;
	}
	
	$.fn.addProgressbar = function(val){
		var pb = $('<div>').addClass('progressbar');
		var w = val * 208 / 100;		
		var b = $('<div>').css({width: w+'px'});
		pb.append(b);
		this.each(function(){
			$(this).append(pb);
		});
		return this;
	}
	
	$.fn.addProgressText = function(funded,left){
		var str = '<div class="funded"><b>' + funded + '%</b> Funded <span><b>' + left + '</b> days left</div>';
		this.each(function(){
			$(this).append(str);
		});
		return this;
	}
	
	$.pitchbox = function(img_url,title,creator){
		var info = $('<div>').addClass('desc').
					addProject(title,creator);
		var pb = $('<div>').addClass('pitchbox')
					.append('<img src="' + img_url + '" />')
					.append('<div class="desc-cont"></div>')
					.append(info);
		return pb;
	}
	
	$.pitchbox_en = function(img_url,title,creator,desc,needed,funded,days){
		var infoleft = $('<div>').addClass('desc')
						.addProject(title,creator);
		var inforight = $('<div>').addClass('detail')
						.addProject(title,creator)
						.addDesc(desc)
						.addNeeded(needed)
						.addProgressbar(funded)
						.addProgressText(funded,days);
		var left = $('<div>').attr('id','left')
					.append('<img src="' + img_url + '" />')
					.append('<div class="desc-cont"></div>')
					.append(infoleft);
		var right = $('<div>').attr('id','right')
					.append('<img src="' + img_url + '" />')
					.append('<div class="detail-cont"></div>')
					.append(inforight);					
		var pb = $('<div>').addClass('pitchbox')
					.append(left).append(right);					
		return pb;
	}	
	
})(jQuery)