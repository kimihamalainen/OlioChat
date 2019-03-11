<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<head>
     <link href="style.css" rel='stylesheet'>
</head>
<div class="container">
    <?php
        if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
            include 'user.php';
            $user = new User();
            $conditions['where'] = array(
                'id' => $sessData['userID'],
            );
            $conditions['return_type'] = 'single';
            $userData = $user->getRows($conditions);
    ?>

    
    <div id="navbox">
        <nav>
            <div id="navbar">
                <ul>
                    <li id="pagelogo"></li>
                    
                    <li id="logoutLink"><a href="userAccount.php?logoutSubmit=1" class="logout">Logout</a></li>
                </ul>
            </div>      
        </nav>
        
    </div>
    <div id="pagecontent">
    <h3>Welcome <?php echo $userData['first_name']; ?> </h3>
    <?php
    include("Chat/model1_chat.php");
    include("Chat/control_chat.php");
    $ohjain = new Ohjain();
    if (isset($_GET["toiminto"])) {
        $toiminto = $_GET["toiminto"];
    } else {
        $toiminto = "lista";
    }
    $ohjain->$toiminto();
    ?>
            
    </div>
    






    <?php }else{ ?>
    <h2>Login to Your Account</h2>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
            <input type="email" name="email" placeholder="EMAIL" required="">
            <input type="password" name="password" placeholder="PASSWORD" required="">
            <div class="send-button">
                <input type="submit" name="loginSubmit" value="LOGIN">
            </div>
        </form>
        <p>Don't have an account? <a href="registration.php">Register</a></p>
    </div>
    <?php } ?>
</div>

