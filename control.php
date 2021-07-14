<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Control</title>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            /*            .rectangle {
                            height: 50px;
                            width: 500px;
                            background-color: #d2d3d3;;
                        }
            
                        .rectangle2 {
                            height: 50px;
                            width: 500px;
                            background-color: #dbdbdb5e;
                            position: absolute;
                            bottom: 100px;
                        }
            
                        .vl1 {
                            border-left: 1px solid #d2d3d3;
                            height: 400px;
                        }
            
                        .vl2 {
                            border-left: 1px solid #d2d3d3;
                            height: 400px;
                            position: absolute;
                            left:507px;
                            top: 50px;
                        }         */

            #text {
                font-size: 20px;
                font-style: oblique;  
                color: #d2d3d3;
                position: absolute;                
                bottom: 460px;
                right: 550px;
            }
            #text1 {
                font-size: 13px;
                position: absolute;
                bottom: 380px;
                right: 960px;
                color: #d2d3d3;
            }

            #text2 {
                font-size: 13px;
                position: absolute;
                bottom: 330px;
                right: 960px;
                color: #d2d3d3;
            }

            #text3 {
                font-size: 13px;
                position: absolute;
                bottom: 280px;
                right: 960px;
                color: #d2d3d3;
            }

            #text4 {
                font-size: 13px;
                position: absolute;
                bottom: 230px;
                right: 960px;
                color: #d2d3d3;
            }      

            #text5 {
                font-size: 13px;
                position: absolute;
                bottom: 180px;
                right: 960px;
                color: #d2d3d3;
            }  

            #text6 {
                font-size: 13px;
                position: absolute;
                bottom: 130px;
                right: 960px;
                color: #d2d3d3;
            }  


            .button {
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
                bottom: 100px;
                right: 850px;
            }

            .button:hover {background-color: #cad2e257}

            .button:active {
                background-color: #d2d3d36e;;
                box-shadow: 0 2px #666;
                transform: translateY(2px);
            }

            .button2 {
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
                bottom: 100px;
                right: 750px;
            }

            .button2:hover {background-color: #cad2e257}

            .button2:active {
                background-color: #d2d3d36e;;
                box-shadow: 0 2px #666;
                transform: translateY(2px);
            }



            .slidecontainer {
                width: 50%;
            }

            .slider {
                -webkit-appearance: none;
                width: 18%;
                height: 5px;
                background: #d3d3d3;
                outline: none;
                opacity: 0.7;
                -webkit-transition: .2s;
                transition: opacity .2s;
                position: absolute;
                bottom: 400px;
                right: 700px;
            }

            .slider:hover {
                opacity: 1;
            }

            .slider::-webkit-slider-thumb {
                -webkit-appearance: none;
                appearance: none;
                width: 10px;
                height: 8px;
                background: #6698FF;
                cursor: pointer;
            }

            .slider::-moz-range-thumb {
                width: 8px;
                height: 8px;
                background: #6698FF;
                cursor: pointer;
            }



            .slider2 {
                position: absolute;
                bottom: 350px;
                right: 700px;

            }

            .slider3 {
                position: absolute;
                bottom: 300px;
                right: 700px;

            }

            .slider4 {
                position: absolute;
                bottom: 250px;
                right: 700px;

            }

            .slider5 {
                position: absolute;
                bottom: 200px;
                right: 700px;

            }

            .slider6 {
                position: absolute;
                bottom: 150px;
                right: 700px;

            }

            #demo{                  
                position: absolute;
                bottom: 396px;
                right: 670px;
                opacity: 0.7; 
                color: #d2d3d3;
            }

            #demo2{  
                position: absolute;
                bottom: 346px;
                right: 670px;
                opacity: 0.7; 
                color: #d2d3d3;
            }

            #demo3{  
                position: absolute;
                bottom: 296px;
                right: 670px;
                opacity: 0.7; 
                color: #d2d3d3;
            }

            #demo4{  
                position: absolute;
                bottom: 246px;
                right: 670px;
                opacity: 0.7; 
                color: #d2d3d3;
            }

            #demo5{  
                position: absolute;
                bottom: 196px;
                right: 670px;
                opacity: 0.7; 
                color: #d2d3d3;
            }

            #demo6{  
                position: absolute;
                bottom: 146px;
                right: 670px;
                opacity: 0.7; 
                color: #d2d3d3;
            }

            .HomeButton {
                background-color: #d2d3d3;
                border: none;
                color: rgb(28, 64, 78);
                padding: 1px 5px;
                font-size: 16px;
                cursor: pointer;
                position: absolute;
                bottom: 540px;
                right: 1080px;
            }

            /* Darker background on mouse-over */
            .HomeButton:hover {
                background-color: #cad2e257;
            }
        </style>
    </head>


    <body>
        <!--        <div class="rectangle"></div>
                <div class="rectangle2"></div>
                <div class="vl1"></div>
                <div class="vl2"></div>-->
        <div id="text"><h1><b>Industrials Robot Arm Control Panel</b></h1></div>
        <div id="text1"><h2><b>Motor 1</b></h2></div>
        <div id="text2"><h2><b>Motor 2</b></h2></div>
        <div id="text3"><h2><b>Motor 3</b></h2></div>
        <div id="text4"><h2><b>Motor 4</b></h2></div>
        <div id="text5"><h2><b>Motor 5</b></h2></div>
        <div id="text6"><h2><b>Motor 6</b></h2></div>   

        <form action="Menu_Robot.php" method="post">    
            <button class="HomeButton"><i class="fa fa-home"></i> Home</button>
        </form>   


        <form action="control.php" method="post">
            <div><button class="button2" name="Running"><b>Run</b></button></div>
        </form>

        <form action="control.php" method="post">

            <div><button class="button"><b>Save</b></button></div>        
            <div class="slidecontainer">

                <input type="range" min="0" max="100" value="0" class="slider" id="myRange" name="Motor1">
                <span id="demo"></span>

                <input type="range" min="0" max="100" value="0" class="slider slider2" id="myRange2" name="Motor2">
                <span id="demo2"></span>

                <input type="range" min="0" max="100" value="0" class="slider slider3" id="myRange3" name="Motor3">
                <span id="demo3"></span>

                <input type="range" min="0" max="100" value="0" class="slider slider4" id="myRange4" name="Motor4">
                <span id="demo4"></span>

                <input type="range" min="0" max="100" value="0" class="slider slider5" id="myRange5" name="Motor5">
                <span id="demo5"></span>

                <input type="range" min="0" max="100" value="0" class="slider slider6" id="myRange6" name="Motor6">
                <span id="demo6"></span>
            </div>
            <style>
                body {
                    background-image: url('Background.jpg');
                    background-repeat: no-repeat;
                    background-size: 100% 100%;
                    Background-attachment: fixed;
                }
            </style>  
            <script>
                var slider = document.getElementById("myRange");
                var output = document.getElementById("demo");
                output.innerHTML = slider.value;

                slider.oninput = function () {
                    output.innerHTML = this.value;
                }


                var slider2 = document.getElementById("myRange2");
                var output2 = document.getElementById("demo2");
                output2.innerHTML = slider.value;

                slider2.oninput = function () {
                    output2.innerHTML = this.value;
                }


                var slider3 = document.getElementById("myRange3");
                var output3 = document.getElementById("demo3");
                output3.innerHTML = slider.value;

                slider3.oninput = function () {
                    output3.innerHTML = this.value;
                }


                var slider4 = document.getElementById("myRange4");
                var output4 = document.getElementById("demo4");
                output4.innerHTML = slider.value;

                slider4.oninput = function () {
                    output4.innerHTML = this.value;
                }


                var slider5 = document.getElementById("myRange5");
                var output5 = document.getElementById("demo5");
                output5.innerHTML = slider.value;

                slider5.oninput = function () {
                    output5.innerHTML = this.value;
                }

                var slider6 = document.getElementById("myRange6");
                var output6 = document.getElementById("demo6");
                output6.innerHTML = slider.value;

                slider6.oninput = function () {
                    output6.innerHTML = this.value;
                }
            </script>
            
        </form>
        
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
        //Server name, Username, Password, Database name
        $connection = new mysqli("localhost", "root", "fcit", "control");
        $stmt = $connection->prepare("insert into control(Motor1, Motor2, Motor3, Motor4, Motor5, Motor6, Running) values(?,?,?,?,?,?,0);");
        $stmt->bind_param("iiiiii", $_POST["Motor1"], $_POST["Motor2"], $_POST["Motor3"], $_POST["Motor4"], $_POST["Motor5"], $_POST["Motor6"]);
        $stmt->execute();
        ?>         


        <?php
        // put your code here
        //Server name, Username, Password, Database name
        $connection = new mysqli("localhost", "root", "fcit", "control");
        if (isset($_POST["Running"])) {
            $stmt = $connection->prepare("UPDATE control SET Running= 1 ORDER BY Id DESC LIMIT 1");
            $stmt->execute();
        }
        ?>

    </body>
</html>
