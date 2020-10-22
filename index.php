<html>
    <head>
        <title>Login to Replika Apple</title>
    </head>
    <body>
        <center>
            <img src="img/apple.png" weight="150px" height="150px">
            <form action="login.php" method="post">
            <br>
            <table class="login">
                <tr>
                    <td>
                        <label>Username</label>
                    </td>
                    <td>
                        <input type ="text" name="username" id="username" placeholder="Username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <input type ="password" name="password" id="password" placeholder="Password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Login" class="tombol" name="login" id="login">
                    </td>
                </tr>
            </table>

            <script type="text/javascript">
	            function validasi(){
		        var username = document.getElementById("username").value;
		        var password = document.getElementById("password").value;		
		        if (username != "" && password!=""){
			        return true;
		        }else{
			        alert('Username dan Password harus di isi !');
			        return false;
		        }
	        }
            </script>
        </center>
    </body>
</html>