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
 
</style>
<body>

    <div id="wrapper">
        <div>
            <img class="default" id="layer1" src="public/img/main/main.png"/>
        </div>
        <div>
            <img class="default" id="door" src="public/img/main/button.png" style="top:38%;left:51%;width:10%;height:20%"/>
        </div>
        <div>
            <img class="default" id="door" src="public/img/main/button2.png" style="top:46%;left:60.8%;width:10%;height:20%"/>
        </div>
    </div>

    <div id="landscapePrompt" class="landscape-prompt">
        <img class="horizontal" id="door" src="public/img/main/horizontal.gif"/>
    </div>

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
    </script>
    
</body>
</html>
