<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $user = strlen($username);
        $pass = strlen($password);
        $x = false;

            if($user>7){
                echo "username lebih dari 7 karakter atau huruf<br>";
                $x = true;
            }
            
            if (!preg_match("/[A-Z]/", $password) ) {
                echo "password dengan huruf kapital<br>";
                $x = true;
            }
            
            if (!preg_match("/[a-z]/", $password)) {
                echo "password dengan huruf kecil<br>";
                $x = true;
            }
    
            if (!preg_match("/[^a-zA-Z\d]/", $password)) {
                echo "password dengan karakter spesial<br>";
                $x = true;
            }
    
            if (!preg_match("/[0-9]/", $password)) {
                echo "password digit<br>";
                $x = true;
            }
        
            if($pass>10){
                echo "password lebih dari 10 karakter<br>";
                $x = true;
            }
        
            if( $x == false ){
                echo "berhasil";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <ul>
            <li>
                <label for="username">username</label>
            <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password</label>
            <input type="text" name="password" id="password">
            </li>
            <li>
            <button type="submit">submit</button>
            </li>
        </ul>
       
        
        
    </form>
</body>
</html>