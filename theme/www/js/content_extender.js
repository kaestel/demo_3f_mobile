var Util = new function() {this.o = this.Objects = new Array();}

Util.initElements = function() {
	console.log("test");
	window.desktop = false;
	var i, e, elements, ij_value;
	elements = Util.getElementsByClass("i(:[a-zA-Z])+");
	for(i = 0; e = elements[i]; i++) {
		ij_value = Util.getIJ("i", e);
		if(ij_value && typeof(Util.Objects[ij_value]) == "object") {
			Util.Objects[ij_value].init(e);
		}
	}
}
Util.getElementsByClass = function(classname) {
	var e, i, elements, regexp, return_array = new Array();
	elements = document.getElementsByTagName("*");
	regexp = new RegExp("(^|\\s)" + classname + "(\\s|$|\:)");
	for(i = 0; e = elements[i]; i++) {
		if(regexp.test(e.className)) {
			return_array[return_array.length] = e;
		}
	}
	return return_array;
}
Util.getIJ = function(id, e) {
	var regexp = new RegExp(id + ":[?=\\w/\\#~:.?+=?&%@!\\-]*");
	if(e.className.match(regexp)) {
		return e.className.match(regexp)[0].replace(id + ":", "");
	}
	return false;
}

// extenders
Util.Objects["a"] = new function() {
	this.init = function(e) {
		var div = document.createElement("div");
		div.innerHTML = content[Util.getIJ("id", e)];
		e.appendChild(div.firstChild);
	}
}
Util.Objects["c"] = new function() {
	this.init = function(e) {
		e.innerHTML = content[Util.getIJ("id", e)];
	}
}
Util.Objects["d"] = new function() {
	this.init = function(e) {
		var element = e;
		while(element.nodeName.toLowerCase() != "div") {
			element = element.parentNode;
		}
		element.className += " link";
		element.link = e.href;
		element.onclick = function() {
			location.href = this.link;
		}
	}
}
Util.Objects["i"] = new function() {
	this.init = function(e) {
		var s = Util.getIJ("s", e).split(":");
		e.src = e.src.replace(s[0], s[1]);
	}
}
Util.Objects["l"] = new function() {
	this.init = function(e) {
		var element = e;
		while(element.nodeName.toLowerCase() != "li") {
			element = element.parentNode;
		}
		element.className += " link";
		element.link = e.href;
		element.onclick = function() {
			location.href = this.link;
		}
	}
}
Util.Objects["n"] = new function() {
	this.init = function(e) {
		window.nav = e;
		window.onscroll = Util.Objects["n"].rePosition;
		document.addEventListener("touchstart", Util.Objects["n"].hide, false);
		this.rePosition();
	}
	this.rePosition = function() {
		window.nav.style.top = (window.desktop ? window.page.offsetHeight-60 : window.innerHeight-60) + window.pageYOffset + 'px';
		window.nav.style.opacity = Util.Objects["n"].fade[Util.Objects["n"].stage++];
		if(Util.Objects["n"].stage < Util.Objects["n"].fade.length) {
//			clearTimeout(Util.Objects["n"].timeout);
			Util.Objects["n"].timeout = setTimeout(Util.Objects["n"].rePosition, 100);
		}
	}
	this.hide = function() {
		Util.Objects["n"].stage = 0;
		window.nav.style.opacity = 0;
	}
	this.timeout;
	this.stage = 0;
	this.fade = new Array(0.25, 0.5, 0.75, 1);

}
Util.Objects["r"] = new function() {
	this.init = function(e) {
		var reader = document.createElement("a");
		reader.href="?id=" + Util.getIJ("id", e);
		reader.className = "reader";
		reader.innerHTML = "Læs op";
		e.appendChild(reader);
	}
}
Util.Objects["s"] = new function() {
	this.init = function(e) {
		e.submit = e.cloneNode(e);
		e.submit.className = "button submit";
		e.parentNode.appendChild(e.submit);
		
		e.onclick = function(event) {
			event = event ? event : window.event;
			if(event.preventDefault) {event.preventDefault();}
			if(event.stopPropagation) {event.stopPropagation();}
			event.returnValue = false;
			event.cancelBubble = true;
			document.getElementById("searchtext").style.display = "block";
			e.submit.style.display = "block";
		}
	}
}
Util.Objects["x"] = new function() {
	this.init = function(e) {
		e.inputs = e.getElementsByTagName("input");
		e.labels = e.getElementsByTagName("label");
		e.select = document.createElement("select");
		e.select.name = e.inputs[0].name;
		for(i = 0; label = e.labels[0]; i++) {
			e.select.options[e.select.options.length] = new Option(label.innerHTML, e.inputs[0].value)
			e.removeChild(label);
			e.removeChild(e.inputs[0]);
		}
		e.appendChild(e.select);
	}
}
window.onload = Util.initElements;

// test content
var content = new Array();

content[1] = 'Praesent at sem lectus, a fringilla lectus mauris ligula non vulputa.';
content[2] = 'Quisque fringilla ultricies dolor, feugiat ipsum fringilla vel.';
content[3] = 'Mauris non leo et odio interdum ectus fringilla ut sodales.';
content[4] = 'In dictum purus sed tortor ectus varius bibendum.';

content["sitemap"] = '<a href="article" class="sitemap">Sitemap</a>';
