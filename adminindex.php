<?php
session_start();
include 'db_conn2.php';
if (isset($_SESSION['user']))
{
    if ($_SESSION['type'] == 1)
    {
        echo $_SESSION['user'] . header('location: adminREGISTRAR.php');
    }
    if ($_SESSION['type'] == 2)
    {
        echo $_SESSION['user'] . header('location: adminCLINIC.php');
    }
    if ($_SESSION['type'] == 3)
    {
        echo $_SESSION['user'] . header('location: adminLIBRARY.php');
    }
    if ($_SESSION['type'] == 4)
    {
        echo $_SESSION['user'] . header('location: adminGUIDANCE.php');
    }
    if ($_SESSION['type'] == 5)
    {
        echo $_SESSION['user'] . header('location: adminSCHOLARSHIP.php');
        
    }
    if ($_SESSION['type'] == 6)
    {
        echo $_SESSION['user'] . header('location: adminOJT.php');
    }
    if ($_SESSION['type'] == 7)
    {
        echo $_SESSION['user'] . header('location: adminADMISSION.php');
        
    }
    if ($_SESSION['type'] == 8)
    {
        echo $_SESSION['user'] . header('location: adminHOMEPAGE.php');
    }
    if ($_SESSION['type'] == 9)
    {
        echo $_SESSION['user'] . header('location: adminHOMEPAGE.php');
    }
}
?>