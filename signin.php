<?php
include ('config/constants.php');
?>
<?php
if (isset($_POST['submit'])) {
    $emaill = $_POST['email'];
    $passwordd = md5($_POST['password']);
    $sqll = "select * from users where email='$emaill' and password='$passwordd'";
    $res = mysqli_query($conn, $sqll);
    if ($res && $res->num_rows > 0) {
        $_SESSION['signin'] = $emaill;
        header("location:index.php");
    } else {
        $_SESSION['signin_faild'] = "Email or Password is incorrect";
    }

}
?>

<style>
    *,
    *:before,
    *:after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: "Open Sans", Helvetica, Arial, sans-serif;
        background: #ededed;
    }

    #su{
        border: none;
        outline: none;
        font-family: "Open Sans", Helvetica, Arial, sans-serif;
        display: block;
        margin: 0 auto;
        width: 260px;
        height: 36px;
        border-radius: 30px;
        color: #fff;
        font-size: 15px;
        cursor: pointer;
        margin-top: 57px;
        margin-bottom: 28px;




    }

    input,
    button {
        border: none;
        outline: none;
        background: none;
        font-family: "Open Sans", Helvetica, Arial, sans-serif;
    }

    .tip {
        font-size: 20px;
        margin: 40px auto 50px;
        text-align: center;
    }

    .cont {
        overflow: hidden;
        position: relative;
        width: 900px;
        height: 550px;
        margin: 0 auto 100px;
        background: #fff;
    }

    .form {
        position: relative;
        width: 640px;
        height: 100%;
        transition: transform 1.2s ease-in-out;
        padding: 50px 30px 0;
    }

    .sub-cont {
        overflow: hidden;
        position: absolute;
        left: 640px;
        top: 0;
        width: 900px;
        height: 100%;
        padding-left: 260px;
        background: #fff;
        transition: transform 1.2s ease-in-out;
    }

    .cont.s--signup .sub-cont {
        transform: translate3d(-640px, 0, 0);
    }

    button {
        display: block;
        margin: 0 auto;
        width: 260px;
        height: 36px;
        border-radius: 30px;
        color: #fff;
        font-size: 15px;
        cursor: pointer;
    }

    .img {
        overflow: hidden;
        z-index: 2;
        position: absolute;
        left: 0;
        top: 0;
        width: 260px;
        height: 100%;
        padding-top: 360px;
    }

    .img:before {
        content: "";
        position: absolute;
        right: 0;
        top: 0;
        width: 900px;
        height: 100%;
        background-image: url("images/item-13.jpg");
        background-size: cover;
        transition: transform 1.2s ease-in-out;
    }

    .img:after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
    }

    .cont.s--signup .img:before {
        transform: translate3d(640px, 0, 0);
    }

    .img__text {
        z-index: 2;
        position: absolute;
        left: 0;
        top: 50px;
        width: 100%;
        padding: 0 20px;
        text-align: center;
        color: #fff;
        transition: transform 1.2s ease-in-out;
    }

    .img__text h2 {
        margin-bottom: 10px;
        font-weight: normal;
    }

    .img__text p {
        font-size: 14px;
        line-height: 1.5;
    }

    .cont.s--signup .img__text.m--up {
        transform: translateX(520px);
    }

    .img__text.m--in {
        transform: translateX(-520px);
    }

    .cont.s--signup .img__text.m--in {
        transform: translateX(0);
    }

    .img__btn {
        overflow: hidden;
        z-index: 2;
        position: relative;
        width: 100px;
        height: 36px;
        margin: 0 auto;
        background: transparent;
        color: #fff;
        text-transform: uppercase;
        font-size: 15px;
        cursor: pointer;
    }

    .img__btn:after {
        content: "";
        z-index: 2;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        border: 2px solid #fff;
        border-radius: 30px;
    }

    .img__btn span {
        position: absolute;
        left: 0;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        transition: transform 1.2s;
    }

    .img__btn span.m--in {
        transform: translateY(-72px);
    }

    .cont.s--signup .img__btn span.m--in {
        transform: translateY(0);
    }

    .cont.s--signup .img__btn span.m--up {
        transform: translateY(72px);
    }

    h2 {
        width: 100%;
        font-size: 26px;
        text-align: center;
    }

    label {
        display: block;
        width: 260px;
        margin: 25px auto 0;
        text-align: center;
    }

    label span {
        font-size: 12px;
        color: #cfcfcf;
        text-transform: uppercase;
    }

    input {
        display: block;
        width: 100%;
        margin-top: 5px;
        padding-bottom: 5px;
        font-size: 16px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.4);
        text-align: center;
    }


    .submit {
        margin-top: 40px;
        margin-bottom: 20px;
        background: #d4af7a;
        text-transform: uppercase;
    }

    .fb-btn {
        border: 2px solid #d3dae9;
        color: #8fa1c7;
    }

    .fb-btn span {
        font-weight: bold;
        color: #455a81;
    }

    .sign-in {
        transition-timing-function: ease-out;
    }

    .cont.s--signup .sign-in {
        transition-timing-function: ease-in-out;
        transition-duration: 1.2s;
        transform: translate3d(640px, 0, 0);
    }

    .sign-up {
        transform: translate3d(-900px, 0, 0);
    }

    .cont.s--signup .sign-up {
        transform: translate3d(0, 0, 0);
    }


</style>


<script>
    document.querySelector(".img__btn").addEventListener("click", function () {
        document.querySelector(".cont").classList.toggle("s--signup");
    });

</script>

<br><br>

<div class="cont">

    <?php
    if (isset($_SESSION['signin_faild'])) {
        echo $_SESSION['signin_faild'];
        unset($_SESSION['signin_faild']);
    }
    ?>

    <div class="form sign-in">
        <h2>Welcome back</h2>
        <form action="" method="POST">
            <label>
                <span>Email</span>
                <input type="email" name="email"/>
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password"/>
            </label>

            <input type="submit" name="submit" class="submit" id="su" value="Sign In">
            <button type="button" class="fb-btn">Browse by <span><a href="https://www.facebook.com/">Facebook</a></span>
            </button>

        </form>
    </div>

    <a href="SginUp.php">
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                    <h2>New here?</h2>
                    <p>Sign up and discover great amount of new opportunities!</p>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                </div>
            </div>
        </div>
    </a>
</div>




