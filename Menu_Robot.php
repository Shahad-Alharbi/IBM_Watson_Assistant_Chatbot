<!DOCTYPE html>
<html>
    <head>
        <title>Robot Menu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>

            #text {
                font-size: 20px;
                font-style: oblique;  
                color: #d2d3d3;
                position: absolute;
                bottom: 460px;
                right: 550px;
            }


            .ArmButton {
                padding: 3px 16px;
                font-size: 15px;
                text-align: center;
                cursor: pointer;
                outline: none;
                color: rgb(28, 64, 78);
                background-color: #d2d3d3;;
                border: none;
                border-radius: 15px;
                box-shadow: 0 2px rgb(114, 114, 114);
                position: absolute;
                bottom: 390px;
                right: 700px;
            }

            .ArmButton:hover {background-color: #cad2e257}

            .ArmButton:active {
                background-color: #d2d3d36e;;
                box-shadow: 0 2px #666;
                transform: translateY(2px);
            }

            .BaseButton {
                padding: 3px 16px;
                font-size: 15px;
                text-align: center;
                cursor: pointer;
                outline: none;
                color: rgb(28, 64, 78);
                background-color: #d2d3d3;;
                border: none;
                border-radius: 15px;
                box-shadow: 0 2px rgb(114, 114, 114);
                position: absolute;
                bottom: 300px;
                right: 700px;
            }

            .BaseButton:hover {background-color: #cad2e257}

            .BaseButton:active {
                background-color: #d2d3d36e;;
                box-shadow: 0 2px #666;
                transform: translateY(2px);
            }
        </style>
    </head>

    <body>
        <div id="text"><h1><b>Fencing Robot Control Panel</b></h1></div>
        <form action="control.php" method="post">    
            <div><button class="ArmButton"><b><sup>Industrials Robot Arm </sup></b><img src= "robot-arm.png"></button></div>
        </form>

        <form action="Base.php" method="post">    
            <div><button class="BaseButton"><b><sup>&nbsp;&nbsp;&nbsp;Mobile robot base&nbsp;&nbsp;&nbsp;&nbsp;</sup></b><img src= "robot.png"></button></div>
        </form>



        <style>
            body {
                background-image: url('Background.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;
                Background-attachment: fixed;
            }
            
            
        </style>  
     
        <script>
  window.watsonAssistantChatOptions = {
      integrationID: "ff7bf1fd-432d-4b95-a072-62f63a0a153b", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "c64a3968-5be9-4d98-8321-92bc3ef7b578", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>


        <?php
        // put your code here
        ?>
    </body>
</html>
