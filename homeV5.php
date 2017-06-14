<html  lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="./CSS/home.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        body{
            background-image: url("./img/hm3.jpg");
            height: 100%;

            background-position: center;
            background-repeat: no-repeat;
            background-size: auto;
            background-attachment: fixed;

            opacity: 0.95;
        }
      div.court {
          /*display: block;*/
          margin: auto;
            margin-top: 0px;
          text-align:center;
          width: 1200px;
          height: 600px;
          /*border: dotted;*/
          /*float: right;*/
      }



        /*.lb{*/
            /*position: relative;*/
            /*margin-top: 0px;*/
            /*!*float: left;*!*/
        /*}*/
        /*.chs{*/
            /*position: relative;*/
            /*margin-top: 0px;*/
            /*float: left;*/
            /*!*width: 100%;*!*/
            /*border: dashed;*/
        /*}*/

        .container-fluid{
            /*border: dashed;*/

        }



        .col-md-3{
            position: relative;
            /*border: solid;*/
            /*height: auto;*/
            /*margin: 0px 0px 0px 170px;*/
            /*padding-top: 50px;*/
            width: 30%;
            /*float: left;*/
        }

        .col-md-7{
            /*border: double;*/
            /*width: 500px;*/
            /*float: right;*/
            height: auto;
            margin: 0px 200px 0px 0px;
            width:40%;
            float: right;
        }

        table{
            position: relative;
            width: 100%;
            height: 120px;
            border: solid;
            /*margin: 15px 0 0 30px;*/
            font-size: large;
            text-align: center;
            /*float: right;*/

        }



        table, th, td {
            border: 1px solid black;
            color: black;
            background-color: whitesmoke;
            text-align: center
        }


    </style>

    </head>


    <body>
<!--///***********player button-->



<div class="container-fluid"  >
    <div class="row" style="position: static">
        <div class="col-md-3 col-md-offset-1 col-xs-10  ">

                <label style="font-size: 16px; color: #ac2925" >Choose Player:</label>
<!--                <br>-->
                <select id="CP" class="cs-select cs-skin-rotate" name="option" ">

                </select>
                <br>
            <div id="FG">
<!--            <span >Total Made:<laber id = ttMade></laber></span> <br>-->
<!--                <span id = ttMiss>Total Miss:</span> <br>-->
<!--                <span >Total Field Goat:<label id = tFG></label><label>%</label></span> <br>-->
<!--                <span id = pMade>This player Made:</span> <br>-->
<!--                <span id = pMiss>This player Miss:</span> <br>-->
<!--                 <span id = pFG>This Player Field Goat(%):</span> <br>-->

            </div>
                <script>



                </script>
        </div>
<!--        <label class="lb" >play by play</label>-->
         <div id="table" class="col-md-7 col-xs-10">

        </div>
    </div>

    <div class="row" >
        <div id="court" class="court " >
            <svg width="100%" height="100%" id="svg" class="svg">

                //bord line 255 215 0
                <rect width="100%" height="100%" style="fill:rgb(255, 240, 120);stroke-width:3;stroke:rgb(0,0,0)" id="rect"/>

                //half line
                <line x1="50%" y1="0" x2="50%" y2="100%" style="stroke:black;stroke-width:3" />

                //half circle 255 48 48
                <circle cx="50%" cy="50%" r="70" stroke="black" stroke-width="3" fill="rgb(150, 48, 48)" />

                //centeral line
                <!--                <line x1="0%" y1="50%" x2="100%" y2="50%" style="stroke:red;stroke-width:2" />-->
                <line x1="600" y1="0" x2="600" y2="600" style="stroke:black;stroke-width:4" />

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

    </div>

</div>
    <!--**********SVG-->
<div id="divbutton" style="text-align:center;">
    <button type="button" class="btn btn-danger"><a href="./template/index.html">Leave</a></button>

</div>




        <script>

//讀取球員號碼資料庫
$(document).ready(showPlayer());

function showPlayer() {

    $.getJSON( "showPlayer.php", function(json) {


        $("#CP").append('<option value="' + json.player1 + '\"'+ '>player1' +':'+ 'No.'+json.player1 +  '</option>');
        $("#CP").append('<option value="' + json.player2 + '\"'+ '>player2' +':'+ 'No.'+json.player2 +  '</option>');
        $("#CP").append('<option value="' + json.player3 + '\"'+ '>player3' +':'+ 'No.'+json.player3 +  '</option>');
        $("#CP").append('<option value="' + json.player4 + '\"'+ '>player4' +':'+ 'No.'+json.player4 +  '</option>');
        $("#CP").append('<option value="' + json.player5 + '\"'+ '>player5' +':'+ 'No.'+json.player5 +  '</option>');
        $("#CP").append('<option value="' + json.player6 + '\"'+ '>player6' +':'+ 'No.'+json.player6 +  '</option>');
        $("#CP").append('<option value="' + json.player7 + '\"'+ '>player7' +':'+ 'No.'+json.player7 +  '</option>');
        $("#CP").append('<option value="' + json.player8 + '\"'+ '>player8' +':'+ 'No.'+json.player8 +  '</option>');
        $("#CP").append('<option value="' + json.player9 + '\"'+ '>player9' +':'+ 'No.'+json.player9 +  '</option>');
        $("#CP").append('<option value="' + json.player10 + '\"'+ '>player10' +':'+ 'No.'+json.player10 +  '</option>');
        $("#CP").append('<option value="' + json.player11 + '\"'+ '>player11' +':'+ 'No.'+json.player11 +  '</option>');
        $("#CP").append('<option value="' + json.player12 + '\"'+ '>player12' +':'+ 'No.'+json.player12 +  '</option>');

    });


}

//            /選擇球員後可點擊球場紀錄投籃位置

//****change player event and draw old shot
$("#CP").on('change', function (e) {
    $(".svgImg").remove();

    var pOld = $("#CP option:selected").val();
    var url = "drawOld.php?pOld=" + pOld;

    $.getJSON(url, function(data){

        $.each(data, function (key, val) {
           var drawX = val.getx;
           var drawY = val.gety;
           var imgDraw = val.madeormiss;
           if (imgDraw ==1){
               imgDraw = "./img/bsk2.png";

           }else {imgDraw = "./img/x.png";
           }

            var cross = '<svg><image x="' + drawX + '\"' + ' ' + 'y="' + drawY + ' ' + '" width="30px" height="30px" xlink:href="' + imgDraw + '\"' + 'class = "svgImg"' +'> </image></svg>';

            $("#svg").append(cross);
        });
    });

//       setTimeout(getSelect(),1000);
//                function getSelect() {
//                    $.get("count.php",{pOld:pOld,url:url});
//
//                }

});




            ///****取得xy並用 送到後端
        shoot();
            function shoot(){
            var delay = 200;
            var prevent = false;
            $("#court")
                .on("click", function(event) {
                    timer = setTimeout(function() {
                        if (!prevent) {

                            var p = $( "#CP option:selected" ).val();
                            var cx = event.clientX;
                            var cy = event.clientY;
                            var sx = event.screenX;
                            var sy = event.screenY;
                            var ox = event.offsetX;
                            var oy = event.offsetY;
                            var mx = ox*1.0;
                            var my = oy*1.0;
                            var mm = '1';
                           var imgPrint = "./img/bsk2.png";
                            var cross = '<svg><image x="' + mx + '\"' + ' ' + 'y="' + my + ' ' + '" width="30px" height="30px" xlink:href="' + imgPrint + '\"' + 'class = "svgImg"' +'> </image></svg>';
                            $("#svg").append(cross);
                            //將參數送到後端與資料庫



                                $.get("updateDB.php",{p:p, x:mx ,y: my, cx:cx, cy:cy, sx:sx, sy:sy, ox:ox, oy:oy,mm:mm});







                        }
                        prevent = false;

                    }, delay);

                })
                .on("dblclick", function() {
                    clearTimeout(timer);
                    prevent = true;
                    var p = $( "#CP option:selected" ).val();
                    var imgPrint = "./img/x.png";

                    var cx = event.clientX;
                    var cy = event.clientY;
                    var sx = event.screenX;
                    var sy = event.screenY;
                    var ox = event.offsetX;
                    var oy = event.offsetY;
                    var mx = ox;
                    var my = oy;

                    var mm = 0;
                    var cross = '<svg><image x="' + mx + '\"' + ' ' + 'y="' + my + ' ' + '" width="30px" height="30px" xlink:href="' + imgPrint + '\"' + 'class = "svgImg"' +'> </image></svg>';
                    $("#svg").append(cross);
                    $.get("updateDB.php",{p:p, x:mx ,y: my, cx:cx, cy:cy, sx:sx, sy:sy, ox:ox, oy:oy,mm:mm});

                });

        }





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
                });
                //stastic
                $.get("count.php", function(data,stasus){
                    $("#FG").html(data)

                });

            }
//        function stastic() {
//                $.get("count.php", function(data,stasus){
//                    $("#ttMade").text(data)
//
//                });
//            }


        </script>
    </body>


</html>
