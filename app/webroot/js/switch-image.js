$(function(){
	$("img.sub-image").click(function(){
		var ImgSrc		= $(this).attr("src");
		var ImgAlt		= $(this).attr("alt");
		var ImgTitle	= $(this).attr("title");
		$("img#main-image").attr({src:ImgSrc, alt:ImgAlt, title:ImgTitle});
		$("img#main-image").hide();
		$("img#main-image").fadeIn("slow");

		return false;
	});
});
