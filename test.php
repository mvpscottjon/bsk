


<html>


<head>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <input type = "button" id = "bt1" class="button" value = "click1">
    <input type = "button" id = "bt2" class="button" value = "click2">
    <svg width="4in" height="3in" version="1.1"
         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<!--    <image x="100" y="100" width="500px" height="500px" xlink:href="./img/bsk.jpg">-->
<!--        <image x="10" y="10" width="50" height="50" xlink:href="./img/images.png"></image>-->

        <image x="200" y="200" width="100px" height="100px" xlink:href="./img/bsk.jpg"> </image>
<!--        x="the x-axis top-left corner of the image"-->
<!--        y="the y-axis top-left corner of the image"-->
<!--        width="the width of the image". Required.-->
<!--        height="the height of the image". Required.-->
<!--        xlink:href="the path to the image". Required.-->
<!---->
<!--        + presentation attributes:-->
<!--        Color, Graphics, Images, Viewports-->
</svg>

<script>


//    $(document).bind( "click", function (event) {
//        alert('1');
//    });
//        $(document).bind( "dblclick", function (event) {
//            alert('2');
//        });
//



var DELAY = 300, clicks = 0, timer = null;

$(function(){

    $(document).on("click", function(e){

        clicks++;  //count clicks

        if(clicks === 1) {

            timer = setTimeout(function() {

                alert("Single Click");  //perform single-click action
                clicks = 0;             //after action performed, reset counter

            }, DELAY);

        } else {

            clearTimeout(timer);    //prevent single-click action
            alert("Double Click");  //perform double-click action
            clicks = 0;             //after action performed, reset counter
        }

    })
        .on("dblclick", function(e){
            e.preventDefault();  //cancel system double-click event
        });

});


</script>


</body>

</html>