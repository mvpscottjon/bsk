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
                <rect width="100%" height="100%" style="fill:rgb(255, 187, 0);stroke-width:3;stroke:rgb(0,0,0)" id="rect"/>
                <line x1="50%" y1="0" x2="50%" y2="100%" style="stroke:black;stroke-width:3" />
<!--                <circle cx="50%" cy="50%" r="70" stroke="black" stroke-width="3" fill="red" />-->
        <!---->
        <!--    <circle cx="100" cy="100" r="100" stroke="black" stroke-width="3" fill="red" />-->
            </svg>
        </div>


        <div id="click">
            <input type="button" value="click" onclick="addShoot()">

        </div>
        <script>
            function addShoot() {

                $("#svg").append('<svg><circle cx= "100" cy="100" r="5" stroke="black" stroke-width="3" fill="black" /></svg>');
        //        alert('good');
            }
        </script>






        <div id="table" style="margin-top: 100px">

            <script>



                </script>
            </table>
        </div>


<form action="test2.php" method="get">
    <div name="x" value="123"></div>
    <input type="text" name="x">
    <input type="submit">
</form>

        <script>
        ///****取得xy並用window open 送到後端
            $("#court").click(function(event) {
                var player = 1;
                var mx = event.pageX;
                var my = event.pageY;
                $("#svg").append('<svg><circle cx= "100" cy="100" r="5" stroke="black" stroke-width="3" fill="black" /></svg>');

//                alert(mx+','+my);

                $.get("updateDB.php",{p:player,x:mx ,y: my},

                    function(data, status){
                        alert(data);
                    });
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