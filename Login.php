<?php

session_start();

if (isset($_SESSION['auth'])) {
    header("location:http://localhost/IzzProperti/Admin/index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | IzzProperty</title>
    <link rel="stylesheet" type="text/css" href="CSS/login.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sniglet&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <div class="container">
            <div class="user singinbox">
                <div class="imgbox"><img src="Img/estetik3.jpg"></div>
                <div class="formbox">
                    <div>
                        <h2>Log in</h2>
                        <p id="js"></p>
                        <input type="email" name="email" placeholder="Email" required="required" id="email">
                        <input type="password" name="password" placeholder="Password" required="required" id="password">
                        <div class="btn-flex">
                            <button type="submit" value="Login" onclick="validate()">Login</button>
                            <button type="reset" value="reset" style="background: red;">Reset</button>
                        </div>
                        <p class="signup">Kembali Ke Halaman <a href="index.php">Beranda.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="JS/jquery.min.js"></script>
    <script type="text/javascript">
        function Default(e) {
            e.preventDefault();
        }

        function toggleForm() {
            const container = document.querySelector('.container');
            container.classList.toggle('active')
        }

        function validate() {

            const email = document.getElementById("email");
            const password = document.getElementById("password");
            const text = document.getElementById("js");

            text.innerHTML = "";

            if (email.value != "" && password.value != "") {
                $.ajax({
                    url: "http://localhost/IzzProperti/App/Api/ValidasiLogin.php",
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        Email: email.value,
                        Password: password.value
                    },
                    success: function(result) {
                        if (result == 'Berhasil') {
                            document.location.href = "Admin/index.php";
                        } else {
                            text.innerHTML = `${result}`;
                            return false;
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Maaf Terjadi Kesalahan!",
                            footer: "<a href>Mohon Untuk Melapor Masalah Ini</a>",
                        });
                    }
                })
            } else {
                text.innerHTML = "Tidak boleh ada input yang kosong.";
                return false;
            }
        }
    </script>
</body>

</html>