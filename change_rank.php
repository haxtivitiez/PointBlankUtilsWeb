<?php
session_start();
include_once('inc/include.php');

$token = $_POST['token'];
$rank_num = $_POST['rank_num'];



function utf8_strlen($str)

    {
      $c = strlen($str);

      $l = 0;
      for ($i = 0; $i < $c; ++$i)
      {
         if ((ord($str[$i]) & 0xC0) != 0x80)
         {
            ++$l;
         }
      }
      return $l;
    }


if($token == "")
{
    echo "<script>alert('กรุณากรอกชื่อผู้ใช้งาน');window.location.href='index.php';</script>";
    /*$_SESSION['toastr'] = array(
    'type'      => 'error', // or 'success' or 'info' or 'warning'
    'message' => 'กรุณากรอกชื่อผู้ใช้งาน!!',
    'title'     => 'ผิดพลาด!'
    );
    header('Location: '.$url);
    exit;*/
}
/*
else if (utf8_strlen($token) <= 12) 
{
    echo "<script>alert('ไอดี ต้องมีอย่างน้อย 13 ตัวอักษร');window.location.href='index.php';</script>";
}
*/
else

{

  if($rank_num>51){
    echo "<script>alert('FUCK YOU.');window.location.href='index.php';</script>";
    die();
  }else{

    $sth = $connec->prepare("SELECT * FROM accounts WHERE token = '".$token."'");
    $sth->execute();
    $result = $sth->fetch(PDO::FETCH_ASSOC);
    if($result){
        //echo "<script>alert('มีชื่อผู้ใช้งานนี้ในระบบแล้ว');window.location.href='index.php';</script>";
        $ISp_Res = $connec->prepare("UPDATE accounts SET rank = ".$rank_num." WHERE token = '".$token."'");
        $ISp_Res->execute();
         echo "<script>alert('RANK CHANGED.');window.location.href='index.php';</script>";
       /* $_SESSION['toastr'] = array(
    'type'      => 'error', // or 'success' or 'info' or 'warning'
    'message' => 'มีชื่อผู้ใช้งานนี้ในระบบแล้ว!!',
    'title'     => 'ผิดพลาด!'
    );
        header('Location: '.$url);
        exit; */  
    }else{
          /*
          header('Content-type: text/plain');
          header('Content-Disposition: attachment;filename="token.enc"');
          print $token;
          */
           echo "<script>alert('ไม่พบ username ในระบบ');window.location.href='index.php';</script>";
        /*$_SESSION['toastr'] = array(
    'type'      => 'success', // or 'success' or 'info' or 'warning'
    'message' => 'สมัครสมาชิกเสร็จเรียบร้อย!!',
    'title'     => 'สำเร็จ!'
    );
        header('Location: '.$url);
        exit;  */  
    }

  }

 
}
?>