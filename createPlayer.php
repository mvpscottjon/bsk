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



    </style>

</head>

<body>
<div>

    <form class="form-inline" action="insertPlayer.php">
        <div >
            <label style=" ">Player1</label><br>
            <div class="form-group" >
                <label>Name</label>
                <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
                <input type="text" class="form-control" id="name1" name="name[]" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Number</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="number1" name = "number[]" value="4" placeholder="4">
            </div>
            <div class="form-group">
                <label>Twid</label>
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" id="twid1" placeholder="A123456789">
            </div>
            <br>
        </div>
        <label style=" ">Player2</label><br>
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
            <input type="text" class="form-control" id="twid2" name="twid2" placeholder="A123456789">
        </div>
        <br><br>
        <label style=" ">Player3</label><br>
        <div class="form-group">
            <label>Name</label>
            <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
            <input type="text" class="form-control" id="name3" name="name3" value="" placeholder="Name">
        </div>
        <div class="form-group">
            <label>Number</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="number3" name = "number[]" value="6" placeholder="4">
        </div>
        <div class="form-group">
            <label>Twid</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="twid3" name="twid3" placeholder="A123456789">
        </div>
        <br><br>
        <label style=" ">Player4</label><br>
        <div class="form-group">
            <label>Name</label>
            <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
            <input type="text" class="form-control" id="name4" name="name4" placeholder="Name">
        </div>
        <div class="form-group">
            <label>Number</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="number" name = "number[]" value="7" placeholder="4">
        </div>
        <div class="form-group">
            <label>Twid</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="twid" placeholder="A123456789">
        </div>
        <br><br>
        <label style=" ">Player5</label><br>
        <div class="form-group">
            <label>Name</label>
            <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label>Number</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="number" name = "number[]" value="8" placeholder="4">
        </div>
        <div class="form-group">
            <label>Twid</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="twid" placeholder="A123456789">
        </div>
        <br><br>
        <label style=" ">Player6</label><br>
        <div class="form-group">
            <label>Name</label>
            <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label>Number</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="number" name = "number[]" value="9" placeholder="4">
        </div>
        <div class="form-group">
            <label>Twid</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="twid" placeholder="A123456789">
        </div>
        <br><br>
        <label style=" ">Player7</label><br>
        <div class="form-group">
            <label>Name</label>
            <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label>Number</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="number" name = "number[]"  value="10" placeholder="4">
        </div>
        <div class="form-group">
            <label>Twid</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="twid" placeholder="A123456789">
        </div>
        <br><br>
        <label style=" ">Player8</label><br>
        <div class="form-group">
            <label>Name</label>
            <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label>Number</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="number" name = "number[]" value="11" placeholder="4">
        </div>
        <div class="form-group">
            <label>Twid</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="twid" placeholder="A123456789">
        </div>
        <br><br>
        <label style=" ">Player9</label><br>
        <div class="form-group">
            <label>Name</label>
            <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label>Number</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="number" name = "number[]" value="12" placeholder="4">
        </div>
        <div class="form-group">
            <label>Twid</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="twid" placeholder="A123456789">
        </div>
        <br><br>
        <label style=" ">Player10</label><br>
        <div class="form-group">
            <label>Name</label>
            <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label>Number</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="number" name = "number[]" value="13"  placeholder="4">
        </div>
        <div class="form-group">
            <label>Twid</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="twid" placeholder="A123456789">
        </div>
        <br><br>
        <label style=" ">Player11</label><br>
        <div class="form-group">
            <label>Name</label>
            <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label>Number</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="number" name = "number[]" value="14"  placeholder="4">
        </div>
        <div class="form-group">
            <label>Twid</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="twid" placeholder="A123456789">
        </div>
        <br><br>
        <label style=" ">Player12</label><br>
        <div class="form-group">
            <label>Name</label>
            <label class="sr-only" for="exampleInputEmail3">playerNumber</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label>Number</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="number" name = "number[]" value="15" placeholder="4">
        </div>
        <div class="form-group">
            <label>Twid</label>
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="twid" placeholder="A123456789">
        </div>
        <br><br>


        <button type="submit" class="btn btn-default">Sign in</button>


    </form>

</div>

















</body>
</html>
