<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
      div.court {
          display: block;
          margin: auto;
          text-align:center;
          width: 1200px;
          height: 600px;
      }
    </style>

    </head>
    <body>
<!--///***********player button-->
    <div>

<!--        //號碼表格-->
        player1:<input type="text" id="number1" class ="number"  name = "number1" value="4" placeholder="球衣號碼">
<!--       //選擇球員按鈕-->
        <button type="button" id="chooseplayer1" class ="player" name = "playernum1" value="4" >choose this player</button>
        <br>
        player2:<input type="text" id="number2" class ="number" name = "number2" value="5" placeholder="球衣號碼">

        <button type="button" id="chooseplayer2" class ="player" name = "playernum2" value="5" >choose this player</button>
        <br>
        player3:<input type="text" id="number3" class ="number" name = "number3" value="6" placeholder="球衣號碼">
        <button type="button" id="chooseplayer3" class ="player" name = "playernum3" value="c6" >choose this player</button>
        <br>
        player4:<input type="text" id="number4" class ="number" name = "number4" value="7" placeholder="球衣號碼">
        <button type="button" id="chooseplayer4" class ="player" name = "playernum4" value="7" >choose this player</button>
        <br>
        player5:<input type="text" id="number5" class ="number" name = "number5" value="8" placeholder="球衣號碼">
        <button type="button" id="chooseplayer5" class ="player" name = "playernum5" value="8" >choose this player</button>
        <br>
        player6:<input type="text" id="number6" class ="number" name = "number6" value="9" placeholder="球衣號碼">
        <button type="button" id="chooseplayer6" class ="player" name = "playernum6" value="9" >choose this player</button>
        <br>
        player7:<input type="text" id="number7" class ="number" name = "number7" value="10" placeholder="球衣號碼">
        <button type="button" id="chooseplayer7" class ="player" name = "playernum7" value="10" >choose this player</button>
        <br>
        player8:<input type="text" id="number8" class ="number" name = "number8" value="11" placeholder="球衣號碼">
        <button type="button" id="chooseplayer8" class ="player" name = "playernum8" value="11" >choose this player</button>
        <br>
        player9:<input type="text" id="number9" class ="number" name = "number9" value="12" placeholder="球衣號碼">
        <button type="button" id="chooseplayer9" class ="player" name = "playernum9" value="12" >choose this player</button>
        <br>
        player10:<input type="text" id="number10" class ="number" name = "number10" value="13" placeholder="球衣號碼">
        <button type="button" id="chooseplayer10" class ="player" name = "playernum10" value="13" >choose this player</button>
        <br>
        player11:<input type="text" id="number11" class ="number" name = "number11" value="14" placeholder="球衣號碼">
        <button type="button" id="chooseplayer11" class ="player" name = "playernum11" value="14" >choose this player</button>
        <br>
        player12:<input type="text" id="number12" class ="number" name = "number12" value="15" placeholder="球衣號碼">
        <button type="button" id="chooseplayer12" class ="player" name = "playernum12" value="15" >choose this player</button>
        <br>
        <button type="button" id="confirm" class ="confirm" value="confirm" >confirm</button>
        <br>
        <div>
            <select name = "bucket">
                <option value="0">Made</option>
                <option  value="1">Miss</option>
            </select>
        </div>
        <br>

        <div id="playerFromDb">


        </div>
        <script>
            //讀取球員號碼資料庫
            $(document).ready(reloadPlayer());

            function reloadPlayer() {
                window.setInterval(showPlayer, 500);
            }


            function showPlayer() {
                $.get("showPlayer.php", function(data,status){
                    if (status == "success"){
                        $("#playerFromDb").html(data)
                    }
                });
            }


    //修改預設號碼
                $("button.confirm").click(savePlayers);


                function savePlayers() {
                    //1.confirm
                    //2.change text
                    //3.hide button
                    //4.can't type text
                    //5.saveplayer to db
                    var number1 = $("#number1").val();
                    var number2 = $("#number2").val();
                    var number3 = $("#number3").val();
                    var number4 = $("#number4").val();
                    var number5 = $("#number5").val();
                    var number6 = $("#number6").val();
                    var number7 = $("#number7").val();
                    var number8 = $("#number8").val();
                    var number9 = $("#number9").val();
                    var number10 = $("#number10").val();
                    var number11 = $("#number11").val();
                    var number12 = $("#number12").val();


                $.get("getNumber.php", {number1:number1, number2:number2, number3:number3, number4:number4,number5:number5,
                    number6:number6, number7:number7, number8:number8,number9:number9,number10:number10, number11:number11,
                    number12:number12});

                    changeNum();
                }

    function changeNum() {

        var textNum =  $(".number").val();
        $(this).text(textNum);
        $("button.confirm").hide();
        $(".number").attr("disabled","true");
    }

</script>



<!--        <input type="button" class="player" id="player1" name="player1" value="1">-->
<!--        <input type="button" class = "player" id="player2" name="player2" value="2">-->
<!--
    <!--**********SVG-->

    </div>
        <div id="court" class="court" >
            <svg width="100%" height="100%" id="svg" class="svg">

                //bord line 255 215 0
                <rect width="100%" height="100%" style="fill:rgb(255, 240, 120);stroke-width:3;stroke:rgb(0,0,0)" id="rect"/>

                //half line
                <line x1="50%" y1="0" x2="50%" y2="100%" style="stroke:black;stroke-width:3" />

                //half circle 255 48 48
                <circle cx="50%" cy="50%" r="70" stroke="black" stroke-width="3" fill="rgb(150, 48, 48)" />

                //centeral line
<!--                <line x1="0%" y1="50%" x2="100%" y2="50%" style="stroke:red;stroke-width:2" />-->
                <line x1="600" y1="0" x2="600" y2="600" style="stroke:black;stroke-width:2" />

                //three point curve
                <path d="M80 540 C 550 540, 500 50, 80 50" stroke="black"  stroke-width="3" fill="transparent"/>

                //three point curve to baseline
                        //bottom
                <line x1="0" y1="540" x2="80" y2="540" style="stroke:black;stroke-width:3" />
                        //up
                <line x1="0" y1="50" x2="80" y2="50" style="stroke:black;stroke-width:3" />

                //power zone
                <rect x="0" y="220" width="250" height="155" style="fill:rgb(150, 48, 48);stroke-width:3;stroke:black" />

                // power zone  line draw
<!--                        //up-->
<!--                <line x1="0" y1="220" x2="250" y2="220" style="stroke:black;stroke-width:3" />-->
<!--                        //bottom-->
<!--                <line x1="0" y1="375" x2="250" y2="375" style="stroke:black;stroke-width:3" />-->
<!--                        /vertical-->
<!--                <line x1="250" y1="220" x2="250" y2="375" style="stroke:black;stroke-width:3" />-->
                        //one point line half circle
                <path d="M250 375 C 375 375, 375 220, 250 220" stroke="black"  stroke-width="3" fill="transparent"/>

                ///**********************
                //power zone oppo

                <rect x="950" y="220" width="250" height="155" style="fill:rgb(150, 48, 48);stroke-width:3;stroke:black" />

                // power zone oppo line draw
<!--                        //up-->
<!--                <line x1="950" y1="220" x2="1200" y2="220" style="stroke:black;stroke-width:3" />-->
<!--                        //bottom oppo-->
<!--                <line x1="950" y1="375" x2="1200" y2="375" style="stroke:black;stroke-width:3" />-->
<!--                        //vertical oppo-->
<!--                <line x1="950" y1="220" x2="950" y2="375" style="stroke:black;stroke-width:3" />-->
                         //one point line half circle oppo
                <path d="M950 375 C 825 375, 825 220, 950 220" stroke="black"  stroke-width="3" fill="transparent"/>

                //three point curve oppo
                <path d="M1120 540 C 700 540, 700 50, 1120 50" stroke="black"  stroke-width="3" fill="transparent"/>



                //three point curve to baseline oppo
                //bottom
                <line x1="1120" y1="540" x2="1200" y2="540" style="stroke:black;stroke-width:3" />
                //up
                <line x1="1120" y1="50" x2="1200" y2="50" style="stroke:black;stroke-width:3" />
            </svg>
        </div>



        <div id="table" style="margin-top: 100px">

        </div>


        <script>
//            $("#court").dblclick(function () {
//                var playernum = $(this).val();
//                var imgPrint = "./img/x.png";
//                shoot(playernum, imgPrint);
//
//            });

            //dbl click




//            /選擇球員後可點擊球場紀錄投籃位置
            $(".player").click(function () {

//                $.get("getChooseNumber.php",)

                var playernum = $(this).val();
//                alert(playernum);
                var imgPrint = "./img/bsk2.png";
                shoot(playernum);
            });

            ///****取得xy並用window open 送到後端

        function shoot() {

            var playernum = playernum;
            var timer = 0;
            var delay = 200;
            var prevent = false;

            $("#court")
                .on("click", function(event) {
                    timer = setTimeout(function() {
                        if (!prevent) {
                            var p = playernum;
                            var cx = event.clientX;
                            var cy = event.clientY;
                            var sx = event.screenX;
                            var sy = event.screenY;
                            var ox = event.offsetX;
                            var oy = event.offsetY;
                            var mx = ox;
                            var my = oy;
                           var imgPrint = "./img/bsk2.png";
//                            var madeormiss = 0;
                            var cross = '<svg><image x="' + mx + '\"' + ' ' + 'y="' + my + ' ' + '" width="20px" height="20px" xlink:href="' + imgPrint + '\"' + '> </image></svg>';
                            $("#svg").append(cross);
                            //將參數送到後端與資料庫



                            $(document).ready(insertDB());

                            function insertDB() {
                                window.setTimeout(toDB, 1000);
                            }
                            function toDB() {
                                $.get("updateDB.php",{p:p, x:mx ,y: my, cx:cx, cy:cy, sx:sx, sy:sy, ox:ox, oy:oy});
                                alert('123');
                            }





                        }
                        prevent = false;

                    }, delay);

                })
                .on("dblclick", function() {
                    clearTimeout(timer);
                    prevent = true;
                    var imgPrint = "./img/x.png";
                    var p = playernum;
                    var cx = event.clientX;
                    var cy = event.clientY;
                    var sx = event.screenX;
                    var sy = event.screenY;
                    var ox = event.offsetX;
                    var oy = event.offsetY;
                    var mx = ox;
                    var my = oy;
//                    var madeormiss = 0;
                    var cross = '<svg><image x="' + mx + '\"' + ' ' + 'y="' + my + ' ' + '" width="20px" height="20px" xlink:href="' + imgPrint + '\"' + '> </image></svg>';
                    $("#svg").append(cross);
                    $.get("updateDB.php",{p:p, x:mx ,y: my, cx:cx, cy:cy, sx:sx, sy:sy, ox:ox, oy:oy});

                });

        }







            function getAndDraw() {
                var p = playernum;
                var cx = event.clientX;
                var cy = event.clientY;
                var sx = event.screenX;
                var sy = event.screenY;
                var ox = event.offsetX;
                var oy = event.offsetY;


                var mx = ox;
                var my = oy;
                var mxR = mx + 5;
                var mxL = mx - 5;
                var myR = my + 200;
                var myL = my - 200;
               var imgPrint = imageGet;


//                依據取得XY 畫圓
                var circle = '<svg><circle cx=' + '\"' + mx + '\"' + ' ' + 'cy=' + '\"' + my + '\"' + 'r="10" stroke="black" stroke-width="3" fill="black" /></svg>';
                var crossLine = '<svg><line x1=' + '\"' + mxR + '\"' + ' ' + 'y1="' + my + '\"' + ' ' + 'x2="' + mxL + '\"' + ' ' + 'y2="' + my + '\"' + ' ' + 'style="stroke:rgb(255,0,0);stroke-width:5" /></svg>';
                var ball = '<svg><image x="200" y="200" width="20px" height="20px" xlink:href="./img/bsk2.png"> </image></svg>';
                var cross = '<svg><image x="' + mx + '\"' + ' ' + 'y="' + my + ' ' + '" width="20px" height="20px" xlink:href="' + imgPrint + '\"' + '> </image></svg>';

//                $("#svg").append(circle);
//                $("#svg").append(crossLine);
                $("#svg").append(cross);


//                將參數送到後端與資料庫
                $.get("updateDB.php", {p: p, x: mx, y: my, cx: cx, cy: cy, sx: sx, sy: sy, ox: ox, oy: oy}
                );
            }


//            $("#court").click(function(event) {
//
//        }



            //即時抓取資料庫TABLE  設0.5秒抓一次
            $(document).ready(reload());

            function reload() {
                window.setInterval(reReadTable, 500);
            }

            function reReadTable() {
                $.get("showTable.php", function (data, status) {
                    if(status == 'success'){
                        $("#table").html(data);
                    }
                })
            }


        </script>
    </body>


</html>