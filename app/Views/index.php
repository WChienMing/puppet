<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    img.default{
    position:absolute;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
  .landscape-prompt {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: black;
    color: white;
    font-size: 20px;
    text-align: center;
    /* padding-top: 20%; */
    z-index: 1000;
  }

  .horizontal{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: 250px;
    width: 250px;
  }
  .image-hover img:hover {
    filter: drop-shadow(0px 4px 18px #fff);
  }
  /* .button:active {
    transform: translateY(4px);
  } */
</style>
<body>

    <div id="wrapper">
        <div>
            <img class="default" id="layer1" src="public/img/main/main.png"/>
        </div>
        <div>
            <!-- <img class="default" id="door" src="public/img/main/button.png" style="top:38%;left:51%;width:10%;height:20%"/> -->
            <a href="https://discord.com/" class="image-hover">
               <img class="default" onclick="click_d()" id="d_button" src="public/img/main/d_button.png" style="top:40%; left:11.2%; width:3%; height:6%;"/>
            </a>
            
        </div>
        <div>
            <!-- <img class="default" id="door" src="public/img/main/button2.png" style="top:46%;left:60.8%;width:10%;height:20%"/> -->
            <a href="https://twitter.com/" class="image-hover">
                <img class="default" onclick="click_x()" id="x_button" src="public/img/main/x_button.png" style="top:48%; left:10.8%; width:3%; height:6%;"/>
            </a>
        </div>
    </div>

    <div id="landscapePrompt" class="landscape-prompt">
        <img class="horizontal" id="door" src="public/img/main/horizontal.gif"/>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function checkOrientation() {
            var landscapePrompt = document.getElementById('landscapePrompt');
            if (window.innerHeight > window.innerWidth) {
                landscapePrompt.style.display = 'block';
            } else {
                landscapePrompt.style.display = 'none';
            }
        }
        checkOrientation();
        window.addEventListener('resize', checkOrientation);

        function click_d() {

            var door = document.getElementById('d_button');
            door.src = "public/img/main/d_button_active.png";

            setTimeout(function() {
                door.src = "public/img/main/d_button.png";
            }, 100);

        }

        function click_x() {

            var door = document.getElementById('x_button');
            door.src = "public/img/main/x_button_active.png";
            setTimeout(function() {
                door.src = "public/img/main/x_button.png";
            }, 100);

        }
    </script>
    
</body>
</html>
