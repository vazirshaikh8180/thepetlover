<?php 

    if(isset($_POST['btn-send']))
    {
       $Name = $_POST['Name'];
       $Email = $_POST['Email'];
       $Phone = $_POST['Phone'];
       $Message = $_POST['message'];

       if(empty($UserName) || empty($Email) || empty($Phone) || empty($Message))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "enterprisesvam@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>