<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>SmallEnvelop : Simple PreLoader</title>
	<style type="text/css">
    .cssload-thecube {
	width: 73px;
	height: 73px;
	margin: 0 auto;
	margin-top: 49px;
	position: relative;
	transform: rotateZ(45deg);
		-o-transform: rotateZ(45deg);
		-ms-transform: rotateZ(45deg);
		-webkit-transform: rotateZ(45deg);
		-moz-transform: rotateZ(45deg);
}
.cssload-thecube .cssload-cube {
	position: relative;
	transform: rotateZ(45deg);
		-o-transform: rotateZ(45deg);
		-ms-transform: rotateZ(45deg);
		-webkit-transform: rotateZ(45deg);
		-moz-transform: rotateZ(45deg);
}
.cssload-thecube .cssload-cube {
	float: left;
	width: 50%;
	height: 50%;
	position: relative;
	transform: scale(1.1);
		-o-transform: scale(1.1);
		-ms-transform: scale(1.1);
		-webkit-transform: scale(1.1);
		-moz-transform: scale(1.1);
}
.cssload-thecube .cssload-cube:before {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: rgb(43,160,199);
	animation: cssload-fold-thecube 1.8s infinite linear both;
		-o-animation: cssload-fold-thecube 1.8s infinite linear both;
		-ms-animation: cssload-fold-thecube 1.8s infinite linear both;
		-webkit-animation: cssload-fold-thecube 1.8s infinite linear both;
		-moz-animation: cssload-fold-thecube 1.8s infinite linear both;
	transform-origin: 100% 100%;
		-o-transform-origin: 100% 100%;
		-ms-transform-origin: 100% 100%;
		-webkit-transform-origin: 100% 100%;
		-moz-transform-origin: 100% 100%;
}
.cssload-thecube .cssload-c2 {
	transform: scale(1.1) rotateZ(90deg);
		-o-transform: scale(1.1) rotateZ(90deg);
		-ms-transform: scale(1.1) rotateZ(90deg);
		-webkit-transform: scale(1.1) rotateZ(90deg);
		-moz-transform: scale(1.1) rotateZ(90deg);
}
.cssload-thecube .cssload-c3 {
	transform: scale(1.1) rotateZ(180deg);
		-o-transform: scale(1.1) rotateZ(180deg);
		-ms-transform: scale(1.1) rotateZ(180deg);
		-webkit-transform: scale(1.1) rotateZ(180deg);
		-moz-transform: scale(1.1) rotateZ(180deg);
}
.cssload-thecube .cssload-c4 {
	transform: scale(1.1) rotateZ(270deg);
		-o-transform: scale(1.1) rotateZ(270deg);
		-ms-transform: scale(1.1) rotateZ(270deg);
		-webkit-transform: scale(1.1) rotateZ(270deg);
		-moz-transform: scale(1.1) rotateZ(270deg);
}
.cssload-thecube .cssload-c2:before {
	animation-delay: 0.225s;
		-o-animation-delay: 0.225s;
		-ms-animation-delay: 0.225s;
		-webkit-animation-delay: 0.225s;
		-moz-animation-delay: 0.225s;
}
.cssload-thecube .cssload-c3:before {
	animation-delay: 0.45s;
		-o-animation-delay: 0.45s;
		-ms-animation-delay: 0.45s;
		-webkit-animation-delay: 0.45s;
		-moz-animation-delay: 0.45s;
}
.cssload-thecube .cssload-c4:before {
	animation-delay: 0.675s;
		-o-animation-delay: 0.675s;
		-ms-animation-delay: 0.675s;
		-webkit-animation-delay: 0.675s;
		-moz-animation-delay: 0.675s;
}



@keyframes cssload-fold-thecube {
	0%, 10% {
		transform: perspective(136px) rotateX(-180deg);
		opacity: 0;
	}
	25%,
				75% {
		transform: perspective(136px) rotateX(0deg);
		opacity: 1;
	}
	90%,
				100% {
		transform: perspective(136px) rotateY(180deg);
		opacity: 0;
	}
}

@-o-keyframes cssload-fold-thecube {
	0%, 10% {
		-o-transform: perspective(136px) rotateX(-180deg);
		opacity: 0;
	}
	25%,
				75% {
		-o-transform: perspective(136px) rotateX(0deg);
		opacity: 1;
	}
	90%,
				100% {
		-o-transform: perspective(136px) rotateY(180deg);
		opacity: 0;
	}
}

@-ms-keyframes cssload-fold-thecube {
	0%, 10% {
		-ms-transform: perspective(136px) rotateX(-180deg);
		opacity: 0;
	}
	25%,
				75% {
		-ms-transform: perspective(136px) rotateX(0deg);
		opacity: 1;
	}
	90%,
				100% {
		-ms-transform: perspective(136px) rotateY(180deg);
		opacity: 0;
	}
}

@-webkit-keyframes cssload-fold-thecube {
	0%, 10% {
		-webkit-transform: perspective(136px) rotateX(-180deg);
		opacity: 0;
	}
	25%,
				75% {
		-webkit-transform: perspective(136px) rotateX(0deg);
		opacity: 1;
	}
	90%,
				100% {
		-webkit-transform: perspective(136px) rotateY(180deg);
		opacity: 0;
	}
}

@-moz-keyframes cssload-fold-thecube {
	0%, 10% {
		-moz-transform: perspective(136px) rotateX(-180deg);
		opacity: 0;
	}
	25%,
				75% {
		-moz-transform: perspective(136px) rotateX(0deg);
		opacity: 1;
	}
	90%,
				100% {
		-moz-transform: perspective(136px) rotateY(180deg);
		opacity: 0;
	}
}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script><script>
	document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {
       document.getElementById('contents').style.visibility="hidden";
       document.getElementById('load').style.visibility="visible";
  } else if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('interactive');
         document.getElementById('load').style.visibility="hidden";
         document.getElementById('contents').style.visibility="visible";
      },1000);
  }
}
</script>
</head>
<body><div class="cssload-thecube" id="load">
	<div class="cssload-cube cssload-c1"></div>
	<div class="cssload-cube cssload-c2"></div>
	<div class="cssload-cube cssload-c4"></div>
	<div class="cssload-cube cssload-c3"></div>
</div>
<div id="contents">ABCDEFGH</div>
</body></html>