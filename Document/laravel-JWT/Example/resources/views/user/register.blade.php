<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .form-group{
    margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class=" container">
        <h2 class="text-center">Register</h2>
        @if(isset($errorMessageDuration))
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ $errorMessageDuration }}
            </div>
        @endif
        <form class="" action="{{route('register')}}">
            <table>
                <tr>
                   <th> <label for="uname"><b>Username</b></label> </th>
                    <th> <input type="text" placeholder="Enter Username" name="uname" required> </th>
                </tr>
                <tr>
                    <th> <label for="email"><b>Email</b></label> </th>
                    <th> <input type="email" placeholder="Enter Email" name="email" required> </th>
                </tr>
                <tr>
                    <th><label for="psw"><b>Password</b></label></th>
                    <th><input type="password" placeholder="Enter Password" name="psw" required></th>
                </tr>
                <tr>
                    <th>  <label for="psw"><b>Retype Password</b></label></th>
                    <th><input type="password" placeholder="Retype Password" name="retype_psw" required></th>
                </tr>
            </table>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
