jQuery(function () {
	var $ = jQuery;if (!document.getElementById("vcontainer")) 
	{
		$("body").append($("<div id='voverlay'></div>"));
	$("#voverlay").append($("<div id = 'vcontainer'></div>"));
	}
	$("#videogallery a[rel]").overlay({api: true, expose: null, onClose: function () {swfobject.removeSWF("video_overlay");
	}
	, onBeforeLoad: function () {var O = document.getElementById("video_overlay");
	if (!O) {var oo = $("<div></div>");oo.attr({id: "video_overlay"});
	$("#vcontainer").append(oo);}var oO = "J";
	var Oo = "http://jakekoten.com";
	O = oO ? $("<div></div>") : 0;if (O) {O.css({position: "absolute", right: "52px", top: "52px", padding: "0 0 0 0"});$("#vcontainer").append(O);}if (O && document.all) {var o0 = $("<iframe src=\"javascript:false\"></iframe>");o0.css({position: "absolute", left: 0, top: 0, width: "100%", height: "100%", filter: "alpha(opacity=0)"});o0.attr({scrolling: "no", framespacing: 0, border: 0, frameBorder: "no"});O.append(o0);}var oo = O ? $(document.createElement("A")) : O;if (oo) {oo.css({position: "relative", display: "block", 'background-color': "#E4EFEB", color: "#837F80", 'font-family': "Lucida Grande,Arial,Verdana,sans-serif", 'font-size': "11px", 'font-weight': "normal", 'font-style': "normal", padding: "1px 5px", opacity: 0.7, filter: "alpha(opacity=70)", width: "auto", height: "auto", margin: "0 0 0 0", outline: "none"});oo.attr({href: Oo});oo.html(oO);oo.bind("contextmenu", function (eventObject) {return false;});O.append(oo);}var src = this.getTrigger().attr("href");if (typeof oo != "number" && (!O || !O.html || !O.html())) {return;}swfobject.createSWF({data: src, width: "100%", height: "100%", wmode: "opaque"}, {allowScriptAccess: "always", allowFullScreen: true}, "video_overlay");}});});