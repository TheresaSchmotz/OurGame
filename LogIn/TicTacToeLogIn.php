<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>TicTacToeLogIn</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://localhost/login" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="style.css" rel="stylesheet"></link>
    </head>
    <body>
    <h1 class="header text-center">Login</h1><p></p>
    <div class="container m-auto" id="login">
        <form action ="http://localhost/TicTacToe-Game/" class="form-signin mb-5 mt-0 p-5" method="get">
            <div class="form-group mt-5 p-3">
                <label for="Player">Player 1</label>
                <input type="text" class="form-control" id="Player" aria-describedby="nameHelp" placeholder="Please enter your name!">
            </div>
            <div id="passwordWrapper">
                <div class="passwordField">
                    <label for="password">Password 1 </label>
                    <input type="password" name="password" id="password" placeholder="Please enter your password">
                </div>
            </div>

            <p></p>
            <div class="form-group mt-5 p-3">
                <label for="Player">Player 2</label>
                <input type="text" class="form-control" id="Player" aria-describedby="nameHelp" placeholder="Please enter your name!">
            </div>
            <div class="form-group p-3">
                <label for="exampleInputPassword1">Password 2</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Please enter your password">
            </div>
            <button type="submit" class="btn btn-primary" id="login">Let's play!</button>
        </form>
        <a href="http://localhost/TicTacToe-Game/highscore">to the highscore</a>
    </div>
    <tbody>
