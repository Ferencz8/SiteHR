<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 12/5/2015
 * Time: 2:14 PM
 */
?>

<div class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li class="">
            <a href="homeView.php" style="color: #00ABFF">Home</a>
        </li>
        <li class="">
            <a href="editCVView.php" style="color: #00ABFF">Edit CV</a>
        </li>
        <li class="">
            <a href="viewCVView.php" style="color: #00ABFF">View CV</a>
        </li>

        <li class="" style="float: right">
            <form method="post" action="../../controller/loginController.php">
                <input name="btnLogOut" value="Log out" type="submit" style="color: #00ABFF">
            </form>
        </li>
    </ul>
</div>
