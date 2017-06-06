<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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



    <!--**********SVG-->
        <div id="court" class="court" >
            <svg width="100%" height="100%" id="svg" class="svg">

                //bord line 255 215 0
                <rect width="100%" height="100%" style="fill:rgb(255, 240, 120);stroke-width:3;stroke:rgb(0,0,0)" id="rect"/>

                //half line
                <line x1="50%" y1="0" x2="50%" y2="100%" style="stroke:black;stroke-width:3" />

                //half circle 255 48 48
                <circle cx="50%" cy="50%" r="70" stroke="black" stroke-width="3" fill="rgb(255, 48, 48)" />

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
                <rect x="0" y="220" width="250" height="155" style="fill:rgb(255, 48, 48);stroke-width:3;stroke:black" />

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

                <rect x="950" y="220" width="250" height="155" style="fill:rgb(255, 48, 48);stroke-width:3;stroke:black" />

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
        ///****取得xy並用window open 送到後端
            $("#court").click(function(event) {
                var player = 1;
                var cx = event.clientX;
                var cy = event.clientY;
                var sx = event.screenX;
                var sy = event.screenY;
                var ox = event.offsetX;
                var oy = event.offsetY;


                var mx =  ox;
                var my =  oy;



                var circle = '<svg><circle cx=' + '\"'+ mx +'\"' + ' '+    'cy=' +'\"'+my +'\"' + 'r="5" stroke="black" stroke-width="3" fill="black" /></svg>';
                $("#svg").append(circle);


//                '<svg><circle cx="100" cy="100" r="5" stroke="black" stroke-width="3" fill="black" /></svg>'
//                alert(mx+','+my);

                $.get("updateDB.php",{p:player, x:mx ,y: my, cx:cx, cy:cy, sx:sx, sy:sy, ox:ox, oy:oy}
                    );
            });




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