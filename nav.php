 <?php
include("includes/dbcon.php");
$loginId = $_SESSION['idUser'];
$counselor = "select first_name, last_name from counselor where login_id = '$loginId' ";
$result = $dbCon->query($counselor);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$_SESSION['first_name'] = $row['first_name'];
?>
 <nav>
        <ul id="navbar">
            <li class="navbar_link"><a href="#">Registration</a></li>
            <li class="navbar_link"><a href="#">Dashboard</a></li>
            <li class="navbar_link"><a href="#">Admin</a></li>
        </ul>
        
        <ul id="userprofil">
            <?php
            if(isset($_SESSION["user"])){
                ?>
                
                <li class="profil"><a href="#"><?php print_r($_SESSION['first_name']) ?></a></li>
                <li class="profil"><a href="doCodes/doLogout.php">Logud</a></li>
                <!--<li class="profil"><a href="doCodes/doLogout.php">Logud</a></li>-->
                <?php
            }
            ?>
        </ul>
    </nav>