$(window).bind("load resize", function(){
	if($(this).width() < 768){
		$('div.sidebar-collapse').addClass('collapse')
	} else {
		$('div.sidebar-collapse').removeClass('collapse')
	}
})

$(document).ready(function(){
	$(".tree-menu").each(function(){
		var link = $(this).children("a").first();
		var submenu = $(this).children(".tree-submenu").first();
		var aktif = $(this).hasClass("actice");

		if (aktif){
			submenu.slideDown();
			link.children(".fa-angle-right").first().removeClass("fa-angle-right").addClass("fa-angle-down")
		}

		link.click(function(e) {
			e.preventDefault();
			if(aktif){
				submenu.slideUp();
				aktif=false;
				link.children(".fa-angle-down").first().removeClass("fa-angle-down").addClass("fa-angle-right")

			}
			else{
				submenu.slideDown();
				aktif=true;
				link.children(".fa-angle-right").first().removeClass("fa-angle-right").addClass("fa-angle-down")

			}
		})
	})
})

var maxLength = 500;
$('textarea').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength-length;
  $('#chars').text(length);
});

