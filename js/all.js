$("#hover_big").mouseover(function(){
	$("#hover_big>span").css({
		width:"120px",
		height:"120px",
		marginTop:"151px",
		transition:"0.5s"
	});
	$("#hover_big>span>i").css({
		fontSize:"50px",
		top:"35px",
		left:"35px",
		transition:"0.5s"
	});
});
$("#hover_big").mouseleave(function(){
	$("#hover_big>span").css({
		width:"90px",
		height:"90px",
		marginTop:"166px"
	});
	$("#hover_big>span>i").css({
		fontSize:"40px",
		top:"25px",
		left:"25px"
	});
});
$("#hover_big>span").click(function(){
	$("#hover_big>div").css("display","block");
});
function closeMask(){
	document.getElementById("xuanfu").style.display = "none";
	console.log("1");
};
setTimeout(function(){
	$("#loading").css("display","none");
},800);
setTimeout(function(){
	$("#loading").css("background","transparent");
},200);
var i=0;
setInterval(function() {
	if (i % 2 == 0) {
		$("#header_bg").css("background", "url(images/img_bg_2.jpg)");
	} else {
		$("#header_bg").css("background", "url(images/img_bg_1.jpg)");
	}
	i++;
},3000);