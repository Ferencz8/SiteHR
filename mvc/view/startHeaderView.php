<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 12/5/2015
 * Time: 4:23 PM
 */
if($_SERVER['REQUEST_URI'] === '/php-get-started/sitehr/mvc/view/startHeaderView.php') {

    header('Location: http://localhost:8080/php-get-started/sitehr/mvc/view/startView.php');
}
$array = explode( '/', $_SERVER['PHP_SELF']);
if( end($array) === 'startView.php'){

    $startViewPath = "startView.php";
    $homeViewPath = "candidate/homeView.php";
}
else if( end($array) === 'homeView.php' || end($array) === 'loginCandidateView.php' || end($array) === 'signupCandidateView.php' || end($array) === 'signupCandidate2View.php'){

    $startViewPath = "../startView.php";
    $homeViewPath = "homeView.php";
}
?>

<div class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li class="">
            <a href="<?php echo $homeViewPath; ?>" style="color: #00ABFF">Home</a>
        </li>
        <li class="">
            <a href="<?php echo $startViewPath; ?>" style="color: #00ABFF">Start</a>
        </li>
    </ul>
</div>

