<h1 style="color:blue;text-align:center;"> User Login </h1>

<form action="/output" method="POST" style="color:brown;text-align:center;border:1px solid brown;border-width:25px;border-radius:5px;background-color:#55Ab3; width:400px; margin-left:400px; padding:25px;">
@csrf
    <input type="text" name="user" placeholder="Enter your Username"><br><br>
    <input type="password" name="password" placeholder="Enter your Password"><br><br>
    <button type="submit">Log In </button>



</form>








