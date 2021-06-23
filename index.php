<?php include("php/server.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IOT</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <form method="POST">
        <div class="control">
            <p class="p1">control panel</p>
        </div>
        <div class="box">
            <!-- Start Class A -->
            <div class="BlockEngine">
                <input type="range" min="0" max="180" value="90" id="sliderA" name="sliderA">
                    <div id=selectorA>
                        <div class="selectBtnA"></div>
                            <div id="selectValueA"></div>
                                <!--اخذ الارقام من هذا الكلاس-->
                    </div>
                        <div id="BarA"></div>
            </div>
            <!-- end Class A -->

            <!-- Start Class B -->
            <div class="BlockEngine">
                <input type="range" min="0" max="180" value="90" id="sliderB" name="sliderB">
                    <div id=selectorB>
                        <div class="selectBtnB"></div>
                            <div id="selectValueB"></div>
                    </div>
                        <div id="BarB"></div>
            </div>
            <!-- end Class B -->

            <!-- Start Class C -->
            <div class="BlockEngine">
                <input type="range" min="0" max="180" value="90" id="sliderC" name="sliderC">
                    <div id=selectorC>
                      <div class="selectBtnC"></div>
                         <div id="selectValueC"></div>
                      </div>
                          <div id="BarC"></div>
             </div>
            <!-- end Class C -->
            <div class="gaerS">Engine 1</div>
             <div class="gaerS">Engine 2</div>
                <div class="gaerS">Engine 3</div>
            <!-- Start Class D -->
            <div class="BlockEngine">
                <input type="range" min="0" max="180" value="90" id="sliderD" name="sliderD">
                     <div id=selectorD>
                        <div class="selectBtnD"></div>
                            <div id="selectValueD"></div>
                     </div>
                         <div id="BarD"></div>
            </div>
            <!-- end Class D -->

            <!-- Start Class E -->
            <div class="BlockEngine">
                <input type="range" min="0" max="180" value="90" id="sliderE" name="sliderE">
                    <div id=selectorE>
                        <div class="selectBtnE"></div>
                            <div id="selectValueE"></div>
                    </div>
                        <div id="BarE"></div>
            </div>
            <!-- end Class E -->

            <!-- Start Class F -->
            <div class="BlockEngine">
                <input type="range" min="0" max="180" value="90" id="sliderF" name="sliderF">
                    <div id=selectorF>
                        <div class="selectBtnF"></div>
                            <div id="selectValueF"></div>
                    </div>
                        <div id="BarF"></div>
            </div>
            <!-- end Class F -->
            <div class="gaerS">Engine 4</div>
             <div class="gaerS">Engine 5</div>
              <div class="gaerS">Engine 6</div>
        </div>

        <!-- Start Box Button-->
        <div class="BackButton">
            <button class="ButtonStart" name="start">Start</button>
            <button class="ButtonSave" name="Save">Save</button>
        </div>
        <!-- end Box Button-->
        
            <div class="boxForward">
                <button class="butForward" name="butForward">Forward</button>
            </div>
                <div class="boxLeft">
                    <button class="butLeft" name="butLeft">left</button>
                </div>
                    <div class="boxStop">
                        <button class="butStop" name="butStop">STOP</button>
                    </div>
                        <div class="boxRight">
                            <button class="butRight" name="butRight">right</button>
                        </div>
                            <div class="backStep">
                                <button class="butBack" name="butBack">Back Step</button>
                            </div>
    </form>
    <script src="js/script.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/Pluges.js"></script>
</body>

</html>