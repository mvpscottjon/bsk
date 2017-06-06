<?php
//**********insert X Y
include 'sqlPdo3.php';

$x = 50;
$y = 100;

//$svg_content = '<svg><circle cx="100" cy="100" r="5" stroke="black" stroke-width="3" fill="black" /></svg>';
//$svg_content = "<svg><circle cx='{$x}' cy='{$y}' r='5' stroke='black' stroke-width='3' fill='black' /></svg>";

$PDO= new PDO($dsn,$username,$passwd,$options);

if(isset($_GET['x'])){
    $x=$_GET['x'];
    $y=$_GET['y'];


$sql = 'INSERT INTO bsk (winx,winy) VALUES (?,?)';
$stmt = $PDO->prepare($sql);
$stmt->execute([$x,$y]);

//$svg_content = "<svg><circle cx='{$x}' cy='{$y}' r='5' stroke='black' stroke-width='3' fill='black' /></svg>";
$svg_ball = "<circle cx='{$x}' cy='{$y}' r='5' stroke='black' stroke-width='3' fill='black' />";

echo 'OK';

}
?>
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
            <circle cx="50%" cy="50%" r="70" stroke="black" stroke-width="3" fill="red" />

    <!---->
        <circle cx="150" cy="100" r="10" stroke="black" stroke-width="3" fill="black" />
            <?php echo $svg_ball;?>
        </svg>

    </div>


    <div id="click">
        <input type="button" value="click" onclick="addShoot()">

    </div>
    <script>
        var svg_str = "<?php echo $svg_content; ?>";

        function addShoot() {
//            var a = '50';
//            $("#svg").append('<svg><circle cx="100" cy="100" r="5" stroke="black" stroke-width="3" fill="black" /></svg>');
            $("#svg").append(svg_str);

            //        alert('good');
        }
    </script>






    <div id="table" style="margin-top: 100px">

        <script>

            $(document).ready(reload());

                function reload() {
                    window.setTimeout(reReadTable, 500);
                }

                function reReadTable() {
                    $.get("showTable.php", function (data, status) {
                        if(status == 'success'){
                            $("#table").html(data);
                        }
                    })
                }

            </script>
        </table>
    </div>




    <script>



    //function click() {
    //    alert('<svg><circle cx="100" cy="100" r="100" stroke="black" stroke-width="3" fill="black" />');
    ////    $("#court").append('<circle cx="100" cy="100" r="100" stroke="black" stroke-width="3" fill="black" />');
    //}

    ///****取得xy並用window open 送到後端
        $("#court").click(function(event) {
           var mx=event.pageX;
           var my=event.pageY;
           alert(mx+','+my);
           var url='?x='+mx+'&y='+my;
    //        alert(mx+','+my);
            window.open(url,"_self");



        });

    //$("#svg").append('<svg><circle cx= "100" cy="100" r="5" stroke="black" stroke-width="3" fill="black" /></svg>');

    //    function mouseCoords(ev){
    //        if(ev.pageX || ev.pageY){
    //            return {x:ev.pageX, y:ev.pageY};
    //        }
    //        return {
    //            x:ev.clientX + document.body.scrollLeft - document.body.clientLeft,
    //            y:ev.clientY + document.body.scrollTop - document.body.clientTop
    //        };
    //    }

    </script>
</body>




</html>