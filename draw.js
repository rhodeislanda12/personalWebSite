var canvas;
var ctx;

//a is on the left.
var a = 215;

//x is on the right.
var x = 770;
var y = 66;
var mx = 2;
var my = 0;
var WIDTH = 920;
var HEIGHT = 594;




function init() {
  canvas = document.getElementById("myCanvas");
  ctx = canvas.getContext("2d");

  return setInterval(draw, 30);
}
init();


function square(x,y,s)
{
    ctx.beginPath();
    ctx.fillRect(x,y,s,s)
}

function draw() {

    //circle(x, y, 5);
  square(x, y, 3)
  square(a, y, 3)


  if ( (x + mx >= WIDTH) 
      && 
       (y + my < HEIGHT))
      {
	  mx = 0;
	  my = 2; 
      }
 
 
  if (y + my >= HEIGHT)
      {
	  mx = 0; 
	  my = 0;
      }
  else
      {
	  x = x+mx;
	  y = y+my;
      }

  
  a -= mx;

 
}
