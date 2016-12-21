var pictures = [
	{
		"title":"White lily",
		"description":"A fragrant flower.",
		"url":"img/img1.jpg"
	},
	{
		"title":"Toronto Skyline",
		"description":"A view of the city from the west side.",
		"url":"img/img2.jpg"
	},
	{
		"title":"Sunrise",
		"description":"Morning in Little Italy.",
		"url":"img/img3.jpg"
	},
	{
		"title":"Fallen Branch",
		"description":"A fallen birch tree.",
		"url":"img/img4.jpg"
	},
	{
		"title":"Amsterdam",
		"description":"Looking across the canal.",
		"url":"img/img5.jpg"
	}
];

$(document).ready(function(){
	var count = 0;
	$(pictures).each(function(){
		var img = $(document.createElement("img"));
		$(img).attr({
			"src":this.url,
			"data-index":count,
			"title":this.title,
			"alt":this.description
		});
		$(img).appendTo("figure");
		var thumb = $(img).clone().appendTo("nav");
		$(thumb).bind("click",function(){
			$("figure img").each(function(){
				$(this).addClass("hidden");
			});
			$('figure img[data-index="'+this.getAttribute("data-index")+'"]').removeClass("hidden");
			$('h3').html(this.getAttribute("title"));
			$('figcaption').html(this.getAttribute("alt"));
		});
		count++;
	});
});