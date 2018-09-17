<?php
$page_name = "Register";
require_once  'views/header.php';
require_once "functions/bdManager.php";

$lnameErr = $fnameErr = $emailErr = $pswErr = $re_pswErr = "";
$check_l_name = $check_f_tname = $check_login_email = $check_login_pass = $check_re_enter_pass = $different_psw = "";
$check1 = $check2 = $check3 = $check4 = $check5 = $check6 = false;

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['submit'])){

    if (empty($_POST["l-name"])) {
        $lnameErr = "Name is required";
    } else {
        $check_l_name = test_input($_POST["l-name"]);
        $check1 = true;
    }

    if (empty($_POST["f-name"])) {
        $fnameErr = "Firstname is required";
    } else {
        $check_f_tname = test_input($_POST["f-name"]);
        $check2 = true;
    }

    if (empty($_POST["login-email"])) {
        $emailErr = "Email is required";
    } else {
        $check_login_email = test_input($_POST["login-email"]);
        $check3 = true;
    }

    if (empty($_POST["login-pass"])) {
        $pswErr = "Password is required";
    } else {
        $check_login_pass = test_input($_POST["login-pass"]);
        $check4 = true;
    }

    if (empty($_POST["re-enter-pass"])) {
        $re_pswErr = "Password is required";
    } else {
        $check_re_enter_pass = test_input($_POST["re-enter-pass"]);
        $check5 = true;
    }

    if ($check_re_enter_pass !== $check_login_pass) {
        $different_psw = "Password has to bee the same";
    }else{
        $check6 = true;
    }

    if($check1 && $check2 && $check3 && $check4 && $check5 && $check6){
        if(getUserByLogin($check_login_email) == false){
            $test = addUser($_POST["l-name"], $_POST["f-name"], $_POST["login-email"], $_POST["login-pass"]);
            //login($check_login_email, $check_login_pass);
            $_SESSION['SBUser'] = $test;
            login($_POST["login-email"],$_POST["login-pass"]);
            echo "<script type=\"text/javascript\">
                                alert(\"Thank you for joining us!\");
                                window.location = 'index.php';
                            </script>";
        }else{
            echo "<script type=\"text/javascript\">
                                alert(\"User alredy registered, please login\");
                                window.location = 'login.php';
                            </script>";

        }
    }
}



?>

    <!-- Bread Crumb STRAT -->
    <div class="banner inner-banner1 ">
        <div class="container">
            <section class="banner-detail center-xs">
                <h1 class="banner-title">Register</h1>
                <div class="bread-crumb right-side float-none-xs">
                    <ul>
                        <li><a href="index.php">Home</a>/</li>
                        <li><span>Register</span></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- Bread Crumb END -->

    <!-- CONTAIN START -->
    <section class="checkout-section ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-8 ">
                            <form class="main-form full" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" name="registerform" >
                                <div class="row">
                                    <div class="col-12 mb-20">
                                        <div class="heading-part heading-bg">
                                            <h2 class="heading">Create your account</h2>
                                            <p><span class="error">* required field</span></p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-box">
                                            <label for="f-name">First Name</label><span class="error">* <?php echo $fnameErr;?></span>
                                            <input type="text" name="f-name" id="f-name"  placeholder="First Name">

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-box">
                                            <label for="l-name">Last Name</label><span class="error">* <?php echo $lnameErr;?></span>
                                            <input type="text" id="l-name" name="l-name"  placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-box">
                                            <label for="login-email">Email address</label><span class="error">* <?php echo $emailErr;?></span>
                                            <input id="login-email" name="login-email" type="email"  placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-box">
                                            <label for="login-pass">Password</label><span class="error">* <?php echo $pswErr;?></span>
                                            <input id="login-pass" name="login-pass" type="password"  placeholder="Enter your Password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-box">
                                            <label for="re-enter-pass">Re-enter Password</label><span class="error">* <?php echo $re_pswErr;?></span>
                                            <input id="re-enter-pass" name="re-enter-pass" type="password"  placeholder="Re-enter your Password">
                                            <span class="error"><?php echo $different_psw;?></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="check-box left-side mb-20">
                                            <span>
                                                <input type="checkbox" name="remember_me" id="remember_me" class="checkbox">
                                                <label for="remember_me">Remember Me</label>
                                            </span>
                                        </div>
                                        <button name="submit" type="submit" class="btn-color right-side">Submit</button>
                                    </div>
                            </form>
                            <div class="col-12">
                                <hr>
                                <div class="new-account align-center mt-20"> <span>Already have an account with us</span> <a class="link" title="Register with Stylexpo" href="login.php">Login Here</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- CONTAINER END -->

    <!-- News Letter Start -->
    <section>
        <div class="newsletter">
            <div class="container">
                <div class="newsletter-inner center-sm">
                    <div class="row">
                        <div class=" col-xl-12 col-md-12">
                            <div class="newsletter-bg">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="newsletter-title">
                                            <h2 class="main_title">Subscribe to our newsletter</h2>
                                            <div class="sub-title">Sign up for newsletter and Get upto 50% off</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <form>
                                            <div class="newsletter-box">
                                                <input type="email" placeholder="Email Here...">
                                                <button title="Subscribe" class="btn-color">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Letter End -->

<?php
require_once  'views/footer.php';
?>