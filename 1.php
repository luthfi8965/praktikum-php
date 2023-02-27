<!DOCTYPE html>
<html>
<head>
	<title>Header Animasi Bergerak</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
    header {
	background-color: #333;
	color: #fff;
	padding: 20px;
	position: relative;
}

header h1 {
	font-size: 36px;
	margin: 0;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	animation-name: bergerak;
	animation-duration: 2s;
	animation-timing-function: ease-in-out;
	animation-iteration-count: infinite;
}

@keyframes bergerak {
	0% {
		transform: translate(-50%, -50%);
	}
	25% {
		transform: translate(-50%, -60%);
	}
	50% {
		transform: translate(-50%, -50%);
	}
	75% {
		transform: translate(-50%, -40%);
	}
	100% {
		transform: translate(-50%, -50%);
	}
}


</style>
</head>
<body>
	<header>
		<h1>Header Animasi Bergerak</h1>
	</header>
</body>
</html>
