head.ready(function() {



$.getJSON( "http://coderiver.github.io/borjomi/test.js" )
  .done(function( json ) {
    g = json;
    function createg(arr, targetdiv,title){
		if(arr.length>0){
			preresult = '<div class="hashtag"><div class="hashtag__title"><span>#'+title+'</span></div><div class="hashtag__feed">';
			postresult = '</div></div>'
			result = '';
			for (var i = 0; i < arr.length; i++) { 
		    	result = result + "<a class='fancybox' href='"+arr[i].big+"'><img src='"+arr[i].small+"' alt='' /></a>"
			}
			$('#'+targetdiv).html(preresult+result+postresult);

		}
	}

	a1 = g.firstgallery;
	a2 = g.secondgallery;
	a3 = g.thirdgallery;
	a4 = g.fourthgallery;
	createg(a1,'firstgallery','borjomibus');
	createg(a2,'secondgallery','borjomimusic');
	createg(a3,'thirdgallery','borjomiwater');
	createg(a4,'fourthgallery','borjomi3d');



  })
  .fail(function( jqxhr, textStatus, error ) {
    var err = textStatus + ", " + error;
    console.log( "Request Failed: " + err );
});

// g = { 
// "firstgallery":[
//     {"small":"img/poster1.jpg", "big":"img/01.jpg"},
//     {"small":"img/poster2.jpg", "big":"img/01.jpg"},
//     {"small":"img/poster3.jpg", "big":"img/01.jpg"}
// ],
// "secondgallery":[
//     {"small":"img/poster4.jpg", "big":"img/01.jpg"},
//     {"small":"img/poster5.jpg", "big":"img/01.jpg"},
//     {"small":"img/poster6.jpg", "big":"img/01.jpg"}
// ]
// };




$(".header ul a").click(function() {
	as = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(""+as).offset().top
    }, 2000);
    return false;
});

$('.header select').change(function(event) {
	as = $(this).val();
    $('html, body').animate({
        scrollTop: $(""+as).offset().top
    }, 2000);
});




	//$('.hashtag a').fancybox();
	
	$(".fancybox").fancybox();





	var agent = navigator.userAgent,
	event = (agent.match(/iPad/i)) ? "touchstart" : "click";

	$(document).bind(event, function(e){
		$(".js-popup").hide();
	});

	$('.sl').slick({
		  centerMode: true,
		  centerPadding: '60px',
		  slidesToShow: 5,
		  responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        arrows: false,
		        centerMode: true,
		        centerPadding: '40px',
		        slidesToShow: 3
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        arrows: false,
		        centerMode: true,
		        centerPadding: '40px',
		        slidesToShow: 1
		      }
		    }
		  ]
		});

	//console.log($('body').html());
});