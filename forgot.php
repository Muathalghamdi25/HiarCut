<?php
require_once('header.php');
?>


<style>

    .form1{
        display: flex;
        justify-content: center;
        align-items: center;
        height:80vh;
        background: url('https://kawa-news.com/wp-content/uploads/bigstock-Saudi-Arabia-Riyadh-Landscape-310541833.jpg') center center no-repeat;
        background-size:cover;
    }
    .form-container {
        width: 300px;
        height: 220px;
        overflow: hidden;
        position: relative;
    }
    .register {
        width: 300px;
        height: 255px;
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
        
    }

    .black {
        color: black;
    }

    .form {
        margin-left: 0px;
        display: flex;
        flex-direction: column;
        align-items: center; 
    }

    input,select {
        padding: 5px;
        border-radius: 5px;
        border: none;
        background-color: #cac9d4;
        color: black;
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
    }


</style>

<div class="form1">

    <div class = 'form-container'>
        <div class = 'register'>
            <h2 class = 'title register-hover'>Return Password</h2>
            <form action="backend/forgot.php" method="post" class = 'form'>
                <input type="email" id="email" name="email" placeholder="Email"><br>
               <br>
                <p><button type="submit" name="forgot" class='btn'>Send</button></p>
            </form>
        </div>
    
    </div>

</div>
    


<?php
require_once('footer.php');
?>