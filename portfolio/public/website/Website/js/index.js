
	$('.photo img').hover(
			function(){
				var strImgNm = $(this).attr("id");
				$(this).attr('src', 'images/Home/'+strImgNm+'Active.jpg');
			},
			 function(){
				var strImgNm = $(this).attr("id");
				$(this).attr('src', 'images/Home/'+strImgNm+'Inactive.jpg');
			}
		);

		$('.contact_social img').hover(
			function(){
				var strImgNm = $(this).attr("id");
				$(this).attr('src', 'images/Contact/'+strImgNm+'Active.png');
			},
			 function(){
				var strImgNm = $(this).attr("id");
				$(this).attr('src', 'images/Contact/'+strImgNm+'Inactive.png');
			}
		);


$("#myModal_4").on('hidden.bs.modal', function(e) {
    $("#myModal_4 iframe").attr("src", $("#myModal_4 iframe").attr("src"));
});

$("#myModal_5").on('hidden.bs.modal', function(e) {
    $("#myModal_5 iframe").attr("src", $("#myModal_5 iframe").attr("src"));
});

$("#myModal_6").on('hidden.bs.modal', function(e) {
    $("#myModal_6 iframe").attr("src", $("#myModal_6 iframe").attr("src"));
});
