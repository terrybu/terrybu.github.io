function playclip() {
	if (navigator.appName == "Microsoft Internet Explorer") {
		if (document.all)
		 {
		  document.all.sound.src = "_sound/click.wav";
		 }
	}

	else {
		var audio = document.getElementsByTagName("audio")[0];
		audio.play();
		}
	}

function playclip2() {
		var audio2 = document.getElementsByTagName("audio")[1];
		audio2.play();
	}

