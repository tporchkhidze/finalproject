<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    input[type=text], input[type=password] {
        padding: 12px 20px;
        display: inline-block;
        box-sizing: border-box;
        margin-right: 30px;
    }

    button {
        background-color: #554caf;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }
    .container {
        padding-left: 16px;
    }
</style>


<h2 style="padding-left: 16px; margin-top: 20px">LogIn</h2>

<form method="post" action="{{route('post.login')}}">
    @csrf
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="name" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>

</form>

