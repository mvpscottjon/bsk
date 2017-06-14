<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style>
    body {
            border-color: black;
        border: dashed;
        /*background-color: #c1e2b3;*/

        background-image: url("./img/back5.jpg");
        height: 100%;

        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;

        opacity: 0.9;
       }


form   {
    border: ridge;
    border-radius: 12px;
    margin:0px;
    position: relative;
    padding: 10px;

    max-width: 100%;

    /*float: left;*/
    background-color: white;
}



.players {
    color: #1b6d85;
    font-size: 16px;
    /*background-color: lemonchiffon;*/
    width: 100%;
    text-align: left;
}
form > div {

    /*border: dashed;*/
   /*margin: 10px;*/
    /*float: left;*/
    width: 100%;
    /*background-color: #c1e2b3;*/

}

     #divbutton{
         float: none;
        margin: 10px;
     }

    </style>

</head>

<body>
<img>
<div class="container">
    <form class="form-inline" action="insertPlayer.php">
        <h1 style="color: tomato">Player Information</h1>
        <div>

            <label class="players">Player1</label><br>
            <div class="form-group" >
                <label>Name</label>
<!--                <label class="sr-only" for="exampleInputEmail3">playerNumber</label>-->
                <input type="text" class="form-control" id="name1" name="name[]" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Number</label>
<!--                <label class="sr-only" for="exampleInputPassword3">Password</label>-->
                <input type="text" class="form-control" id="number1" name = "number[]" value="4" placeholder="4">
            </div>
            <div class="form-group">
                <label>Twid</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="twid1" name="twid[]" placeholder="A123456789">
            </div>
            <div class="form-group">
                <label>Tel</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="tel"  name="tel[]" placeholder="0937777777">
            </div>

        </div>
        <div>
            <label class="players">Player2</label><br>
            <div class="form-group">
                <label>Name</label>
                <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
                <input type="text" class="form-control" id="name2" name="name[]" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Number</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="number2" name = "number[]" value="5" placeholder="4">
            </div>
            <div class="form-group">
                <label>Twid</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="twid2" name="twid[]" placeholder="A123456789">
            </div>
            <div class="form-group">
                <label>Tel</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="tel" name="tel[]"  placeholder="0937777777">
            </div>

        </div>
        <div>
        <label class="players">Player3</label><br>
        <div class="form-group">
            <label>Name</label>
            <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
            <input type="text" class="form-control" id="name3" name="name[]" value="" placeholder="Name">
        </div>
        <div class="form-group">
            <label>Number</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="number3" name = "number[]" value="6" placeholder="4">
        </div>
        <div class="form-group">
            <label>Twid</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="twid3" name="twid[]" placeholder="A123456789">
        </div>
            <div class="form-group">
                <label>Tel</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="tel" name="tel[]" placeholder="0937777777">
            </div>

        </div>
        <div>
            <label class="players">Player4</label><br>
            <div class="form-group">
                <label>Name</label>
                <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
                <input type="text" class="form-control" id="name4" name="name[]" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Number</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="number" name = "number[]" value="7" placeholder="4">
            </div>
            <div class="form-group">
                <label>Twid</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="twid" name="twid[]" placeholder="A123456789">
            </div>
            <div class="form-group">
                <label>Tel</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="tel" name="tel[]"  placeholder="0937777777">
            </div>

        </div>
        <div>
            <label class="players">Player5</label><br>
            <div class="form-group">
                <label>Name</label>
                <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
                <input type="text" class="form-control" id="name" name="name[]" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Number</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="number" name = "number[]" value="8" placeholder="4">
            </div>
            <div class="form-group">
                <label>Twid</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="twid"  name="twid[]" placeholder="A123456789">
            </div>
            <div class="form-group">
                <label>Tel</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="tel"  name="tel[]" placeholder="0937777777">
            </div>

        </div>
        <div>
            <label class="players">Player6</label><br>
            <div class="form-group">
                <label>Name</label>
                <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
                <input type="text" class="form-control" id="name" name="name[]" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Number</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="number" name = "number[]" value="9" placeholder="4">
            </div>
            <div class="form-group">
                <label>Twid</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="twid"  name="twid[]" placeholder="A123456789">
            </div>
            <div class="form-group">
                <label>Tel</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="tel" name="tel[]"  placeholder="0937777777">
            </div>

        </div>
        <div>
            <label class="players">Player7</label><br>
            <div class="form-group">
                <label>Name</label>
                <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
                <input type="text" class="form-control" id="name" name="name[]" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Number</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="number" name = "number[]"  value="10" placeholder="4">
            </div>
            <div class="form-group">
                <label>Twid</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="twid" name="twid[]" placeholder="A123456789">
            </div>
            <div class="form-group">
                <label>Tel</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="tel" name="tel[]"  placeholder="0937777777">
            </div>

        </div>
        <div>
            <label class="players">Player8</label><br>
            <div class="form-group">
                <label>Name</label>
                <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
                <input type="text" class="form-control" id="name" name="name[]" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Number</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="number" name = "number[]" value="11" placeholder="4">
            </div>
            <div class="form-group">
                <label>Twid</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="twid"  name="twid[]" placeholder="A123456789">
            </div>
            <div class="form-group">
                <label>Tel</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="tel" name="tel[]"  placeholder="0937777777">
            </div>

        </div>
        <div>
            <label class="players">Player9</label><br>
            <div class="form-group">
                <label>Name</label>
                <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
                <input type="text" class="form-control" id="name" name="name[]" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Number</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="number" name = "number[]" value="12" placeholder="4">
            </div>
            <div class="form-group">
                <label>Twid</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="twid"  name="twid[]" placeholder="A123456789">
            </div>
            <div class="form-group">
                <label>Tel</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="tel" name="tel[]"  placeholder="0937777777">
            </div>

        </div>
        <div>
            <label class="players">Player10</label><br>
            <div class="form-group">
                <label>Name</label>
                <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
                <input type="text" class="form-control" id="name" name="name[]" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Number</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="number" name = "number[]" value="13"  placeholder="4">
            </div>
            <div class="form-group">
                <label>Twid</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="twid"  name="twid[]" placeholder="A123456789">
            </div>
            <div class="form-group">
                <label>Tel</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="tel"  name="tel[]" placeholder="0937777777">
            </div>

        </div>
        <div>
            <label class="players">Player11</label><br>
            <div class="form-group">
                <label>Name</label>
                <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
                <input type="text" class="form-control" id="name" name="name[]" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Number</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="number" name = "number[]" value="14"  placeholder="4">
            </div>
            <div class="form-group">
                <label>Twid</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="twid" name="twid[]"  placeholder="A123456789">
            </div>
            <div class="form-group">
                <label>Tel</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="tel" name="tel[]"  placeholder="0937777777">
            </div>

        </div>
        <div>
            <label class="players">Player12</label><br>
            <div class="form-group">
                <label>Name</label>
                <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
                <input type="text" class="form-control" id="name" name="name[]" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Number</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="number" name = "number[]" value="15" placeholder="4">
            </div>
            <div class="form-group">
                <label>Twid</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="twid"  name="twid[]" placeholder="A123456789">
            </div>
            <div class="form-group">
                <label>Tel</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="tel" name="tel[]" placeholder="0937777777">
            </div>

        </div>
        <div id="divbutton" style="text-align:right;">
            <button type="submit" class="btn btn-danger">Click Me to Start</button>

        </div>


    </form>

</div>

















</body>
</html>
