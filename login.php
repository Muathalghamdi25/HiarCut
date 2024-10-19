<?php
require_once('header.php');
?>


<style>

    .form1{
        display: flex;
        justify-content: center;
        align-items: center;
        height:80vh;
        background: url('https://previews.123rf.com/images/seamartini/seamartini1503/seamartini150300368/37341846-banners-signs-and-pointers-for-barber-shop-or-hairdresser-service-design.jpg') center center no-repeat;
        background-size:cover;
    }
    .form-container {
        width: 300px;
        height: 420px;
        overflow: hidden;
        position: relative;
    }
    .register {
        width: 300px;
        height: 355px;
        background: rgb(149,0,255);
        background: linear-gradient(45deg, rgba(149,0,255,1) 0%, rgba(187,15,247,1) 25%, rgba(83,39,255,1) 52%, rgba(127,35,255,1) 76%, rgba(0,78,255,1) 98%);
        background-size: 300%;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center; 
        animation: bg-animation 5s infinite alternate;
    }
    .title {
        text-align: center;
        padding: 15px;
        padding-top: 20px;
        font-family: 'Baloo 2', cursive;
        font-size: 28px;
        font-weight: 700;
        color: white;
        margin-top: 5%;
    }

    .black {
        color: black;
    }

    .form {
        margin-left: 0px;
        display: flex;
        flex-direction: column;
        align-items: center; 
        margin-top: 10%;
    }

    input,select {
        padding: 5px;
        border-radius: 5px;
        border: none;
        background-color: #cac9d4;
        color: black;
        width: 100%;
    }

    .btn {
        padding: 10px 30px;
        border-radius: 5px;
        background-color: #00b4d8;
        color: white;
        border: none;
    }

    .dark-btn {
        background-color: #0077b6;
    }

    .login {
        width: 300px;
        height: 350px;
        background-color: #ffffff;
        
        border-radius: 50px;
        
        position: absolute;
        top: 360px;
        transition: 0.3s ease-out;
        
    }

    .login:hover {
        top: 70px;
        border-radius: 10px;
    }

    .login:hover + .register-hover {
        font-size: 20px;
    }

    @keyframes bg-animation {
        0% {
            background-position: left;
        }
        
        100% {
            background-position: right;
        }
    }


</style>

<div class="form1">

    <div class = 'form-container'>
        <div class = 'register'>
            <h2 class = 'title register-hover'>Log In</h2>
            <form action="backend/access.php" method="post" class = 'form'>
                <input type="text" id="username" name="email" placeholder="Email" required><br>
                <input type="password" id="password" name="password" placeholder="Password" required><br>
                <select name="type" required>
                    <option value="">User Type</option>
                    <option value="0">Client</option>
                    <option value="1">Barber Shop</option>
                    <option value="2">Admin</option>
                </select><br>
                <p><button type="submit" name="login" class = 'btn dark-btn'>Log In</button></p><br>
                <a href="forgot.php" style="color:white">Forgot Password?</a>
            </form>
        </div>
    </div>

</div>
    


<?php
require_once('footer.php');
?>