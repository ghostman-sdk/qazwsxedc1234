
<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Instagram Liker #Ougrocks</title>
        <link rel="Shortcut Icon" type="image/x-icon" href="//instagramstatic-a.akamaihd.net/bluebar/97ef9c7/images/ico/favicon.ico">
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Iss tool se hume instagram ki photos mai likes milti hai.. jisse girls impress ho jati hai " />
<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Economica:400,700);

* { box-sizing: border-box; }

html,
body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Economica', 'Arial', sans-serif;
  font-size: 18px;
  background: deepskyblue;
}

.container {
  position: relative;
  max-width: 40%;
  min-width: 400px;
  margin: 0 auto;
}

form {
  position: relative;
  width: 100%;
  margin: 50px auto;
  padding: 50px;
  background: white;
  text-align: center;
}

input {
  display: inline-block;
  width: 100%;
  margin: 20px 0;
  padding: 10px;
  border: 2px dashed lightblue;
  outline: none;
  font-size: 20px;
  font-family: 'Economica', 'Arial', sans-serif;
  font-weight: 400;
  transition: all 0.2s ease;
}

input:focus { border-color: deepskyblue; }

.button {
  position: absolute;
  left: calc(50% - 150px / 2);
  bottom: calc(- 50px / 2);
  width: 150px;
  height: 50px;
  padding: 10px 15px;
  margin-top: 20px;
  border: none;
  outline: none;
  cursor: pointer;
  color: white;
  font-family: 'Economica', 'Arial', sans-serif;
  font-size: 20px;
  font-weight: 700;
  background: mediumblue;
  transition: all 0.2s ease;
}

.button:hover { background: midnightblue; }

.button.valid,
.button.valid:hover { background: mediumseagreen; }

svg {
  position: absolute;
  top: 0;
  left: 0;
  pointer-events: none;
}

svg path {
  stroke-width: 10px;
  stroke: mediumseagreen;
  fill: none;
  opacity: 1;
  transition: opacity 0.5s ease;
}

svg path.hidden { opacity: 0; }

svg path.animate { animation: drawBorder 1s linear; }

@keyframes drawBorder {
  from {
    stroke-dasharray: 4000;
    stroke-dashoffset: 4000;
  }
  
  to {
    stroke-dasharray: 4000;
    stroke-dashoffset: 0;
  }
}

p {
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translateX(-50%);
  text-align: center;
  color: white;
}

h3 {
  margin-top: 0;
  margin-bottom: 20px;
  text-transform: uppercase;
  font-size: 24px;
  font-weight: 700;
}
</style>
<script type="text/javascript">
var formAnimator = {
  
  init: function() {
    this.form = document.querySelector('form');
  	this.button = document.querySelector('button');
    this.path = document.querySelector('path');
    this.createPath();
    this.form.addEventListener('submit', this.animate, false);
    window.addEventListener('resize', this.createPath);
  },
  
  createPath: function() {
    console.log('creating path');
    var that = formAnimator;
  	that.dPath = 'M' + (that.button.offsetLeft + that.button.offsetWidth) + ' ' + that.form.offsetHeight + ' H' + that.form.offsetWidth + ' V0 H0 V' + that.form.offsetHeight + ' H' + that.button.offsetLeft;
  	console.log(that.dPath);
    that.path.setAttribute('d', that.dPath);
	},
  
  animate: function(e) {
    var that = formAnimator;
  	e.preventDefault();
    that.path.classList.add('animate');
    that.path.classList.remove('hidden');
    that.button.classList.add('valid');
    that.path.addEventListener('webkitAnimationEnd', function() {
      this.classList.remove('animate');
      this.classList.add('hidden');
      that.button.classList.remove('valid');
    }, false);
	}
  
}

window.addEventListener('DOMContentLoaded', function() {
  
  formAnimator.init();
  
}, false);
</script>
</head>
<body>
<div class="container">
  <p>Best viewed in Chrome, I guess.</p>
        <form method="get" action="submit.php" class="form" enctype="multipart/form-data">
    <h3>Instagram Likers</h3>
    <svg width="100%" height="100%">
      <path class="hidden" d="M0 0 H200 V200 H0 Z"></path>
    </svg>
    <input type="text" name="link" placeholder="URL Photos" required/>
        <input class="button" type="submit" name="submit" value="Send Likes!"></input>
  </form>
</div>
</body>
</html>
