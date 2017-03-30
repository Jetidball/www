window.onload = function() {
  var canvas = document.getElementById("myCanvas");
  var ctx = canvas.getContext("2d");
  var ballRadius=10;
  var x = canvas.width/2;
  var y = canvas.height-30;
  var dx=5;
  var dy=-5;
  var paddleHeight=5;
  var paddleWidth=55;
  var paddleX=(canvas.width-paddleWidth)/2;
  var rightPressed = false;
  var leftPressed = false;
  var brickRowCount = 5;
  var brickColumnCount = 10;
  var brickWidth = 100;
  var brickHeight = 90;
  var brickPadding = 0.4;
  var brickOffsetTop = 20;
  var brickOffsetLeft = 1;
  var lives = 2;
  var score = 0;
  var img = new Image();
  document.addEventListener("keydown", keyDownHandler, false);
  document.addEventListener("keyup", keyUpHandler, false);
  document.addEventListener("mousemove", mouseMoveHandler, false);

  var bricks = [];
  for(c=0; c<brickColumnCount; c++) {
    bricks[c] = [];
    for(r=0; r<brickRowCount; r++) {
      bricks[c][r] = {x: 0, y: 0, status: 1};
    }
  }

  function drawImageScaled(img, ctx) {
    var hRatio = canvas.width / img.width;
    var vRatio =  canvas.height / img.height;
    var ratio  = Math.min ( hRatio, vRatio );
    var centerShift_x = ( canvas.width - img.width*ratio ) / 2;
    var centerShift_y = ( canvas.height - img.height*ratio ) / 2;
    ctx.clearRect(0,0,canvas.width, canvas.height);
    ctx.drawImage(img, 0,0, img.width, img.height,
                       centerShift_x,0,img.width*ratio, canvas.height);
  }
    img.src = "league.jpg";
  function keyDownHandler(e) {
    if(e.keyCode == 39) {
      rightPressed = true;
    }
    else if(e.keyCode == 37) {
      leftPressed = true;
    }
  }

  function keyUpHandler(e) {
    if(e.keyCode == 39) {
      rightPressed = false;
    }
    else if(e.keyCode == 37) {
      leftPressed = false;
    }
  }

  function mouseMoveHandler(e) {
    var relativeX = e.clientX - canvas.offsetLeft;
    if(relativeX > 0 && relativeX < canvas.width) {
      paddleX = relativeX - paddleWidth/2;
    }
  }

  function drawBall() {
    ctx.beginPath();
    ctx.arc(x,y,ballRadius,0,Math.PI*2);
    ctx.fillStyle="#00ff00";
    ctx.fill();
    ctx.closePath();
  }

  function drawPaddle() {
      ctx.beginPath();
      ctx.rect(paddleX,canvas.height-paddleHeight,paddleWidth,paddleHeight,Math.PI*2);
      ctx.fillStyle="#ff0000";
      ctx.fill();
      ctx.closePath();
  }

  function drawBricks() {
      for(c=0; c<brickColumnCount; c++) {
        for(r=0; r<brickRowCount; r++) {
          if(bricks[c][r].status==1) {
            var brickX = (c*(brickWidth+brickPadding))+brickOffsetLeft;
            var brickY = (r*(brickHeight+brickPadding))+brickOffsetTop;
            bricks[c][r].x = brickX;
            bricks[c][r].y = brickY;
            ctx.beginPath();
            ctx.rect(brickX,brickY,brickWidth,brickHeight);
            ctx.fillStyle = "#000";
            ctx.fill();
            ctx.closePath();
          }
        }
      }
  }

  function collisionDetection() {
    for(c=0; c<brickColumnCount; c++) {
      for(r=0; r<brickRowCount; r++) {
        var b = bricks[c][r];
        if(b.status == 1) {
          if (x > b.x && x < b.x+brickWidth && y > b.y && y < b.y+brickHeight) {
            dy = -dy;
            b.status = 0;
            score++;
            if(score == brickRowCount*brickColumnCount) {
              alert("You Win!!! Congratz!");
              document.location.reload();
            }
          }
        }
      }
    }
  }

  function drawScore() {
    ctx.font = "16px Arial";
    ctx.fillStyle = "#fff";
    ctx.fillText("Score:"+score, 8, 20);
  }

  function drawLives() {
    ctx.font = "16px Arial";
    ctx.fillStyle = "#fff";
    ctx.fillText("Lives:  "+lives, canvas.width-65, 20);
  }

  function draw() {
      ctx.clearRect(0,0,canvas.width,canvas.height);
      drawImageScaled(img, ctx);
      drawBricks();
      drawBall();
      drawPaddle();
      drawScore();
      drawLives();
      collisionDetection();

      if(x + dx > canvas.width-ballRadius || x + dx < ballRadius) {
        dx = -dx;
      }
      if(y + dy < ballRadius) {
        dy = -dy;
      }
      else if(y + dy > canvas.height-ballRadius) {
        if(x > paddleX && x < paddleX + paddleWidth) {
          if(y= y-paddleHeight){
            dy = -dy;
          }
        }
        else {
          lives--;
          alert("LIFE LOST NOOB");
          if(!lives) {
            alert("Game Over Man!");
            alert("annoying time");
            alert("the price of losing is tough");
            alert("last one!");
            alert("JK");
            document.location.reload();
          }
          else {
            x = canvas.width/2;
            y = canvas.height-30;
            dx = 10;
            dy = -10;
            paddleX = (canvas.width-paddleWidth/2);
          }
        }
      }

      if(rightPressed && paddleX < canvas.width-paddleWidth) {
        paddleX+=7;
      }
      else if(leftPressed && paddleX>0) {
        paddleX-=7;
      }

      x=x+dx;
      y=y+dy;
    requestAnimationFrame(draw);
  }

  draw();
}
