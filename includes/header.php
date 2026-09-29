<?php
	require_once('includes/application.php');
	require_once('includes/catalog.php');

	$lang = $_SESSION['lang'];

	$topCategoryCache = file_get_contents("cache/top_categories");
	$topCategories = json_decode($topCategoryCache, true);
	$topCategories = $topCategories[$lang];

	foreach($topCategories as $key=>$topCategory) {
		$subCategoryStr = "";

		$i = 0;
		foreach($topCategory["sub_categories"] as $subCategory) {
			if($i % 3 == 0)
				$subCategoryStr .= '<tr>\n';

			$subCategoryStr .= '<td width="204" height="26"><a href="our_products.php?category_id=' . $subCategory['category_id'] . '" class="navbg2">- ' . $subCategory['category_name'] . '</a></td>';

			if($i % 3 == 2)
				$subCategoryStr .= '</tr>\n';
		}

		$topCategories[$key]['sub_category_str'] = $subCategoryStr;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>




<link href="css/lrtk.css" rel="stylesheet" >
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" src="js/jquery.caroufredsel-6.0.4-packed.js" ></script>
<script type="text/javascript" src="js/focus.js?ver=1.1" ></script>



<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
<!--
function showSubCategories(catID) {
	var subCategoryStr = "";

	switch(catID) {
<?php
	foreach($topCategories as $topCategory) {
?>
		case(<?= $topCategory["category_id"]; ?>):
			subCategoryStr = '<?= $topCategory["sub_category_str"]; ?>';
			break;
<?php
	}
?>
	}

	subCategoryStr += '<tr><td colspan="3">&nbsp;</td></tr>\n';

	$('#sub_categories_area').html(subCategoryStr);
}

$(document).ready(function() {
	showSubCategories(<?= $topCategories[0]['category_id'] ?>);
});
//-->
</script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
$(window).scroll(function(){
	var scrollTop = $(document).scrollTop();
	var headheight = $(".head").height();
	if(scrollTop >= headheight){
		$("#fudong").addClass("fixed");
		}else{
		$("#fudong").removeClass("fixed");	
			}
})
})
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>

<style>
*{margin:0;padding:0}
#wrap {
	width:100%;
	height:251px;
	margin:0 auto;
	position:relative;
	text-align: center;
	float: none;
	align: center;
	z-index: 3;
}
#wrap .head {
	height:38px;
	align: center;
}
#fudong {
	width:100%;
	height:94px;
	text-align: center;
	align: center;
	z-index: 10;
}
.fixed {position:fixed;_position:absolute;top:0;top:expression(eval(document.documentElement.scrollTop + 0))}

#banner {
	width:100%;
	height:414px;
	text-align: center;
	align: center;
	background-image: url(images_<?= $lang ?>/banner01.png);
	background-attachment: scroll;
}


body {
	background:url(images_<?= $lang ?>/galleon_bg.png?ver=1.1) fixed 50% 50%;
	background-position:top;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	align: center;
}

a:hover {
	color: #A2CA0E;
}
a:visited {
}
.style1 {
}

#apDiv1 {
	position:absolute;
	left:110px;
	top:139px;
	width:704px;
	height:66px;
	z-index:1;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
.style5 {font-size: small}
.style11 {font-family: Arial, Helvetica, sans-serif; font-size: small; color: #83A50C; font-weight: bold; }
.style12 {
	font-size: x-small;
	font-family: Arial, Helvetica, sans-serif;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Galleon Industrial Ltd.</title></head>

<body onload="MM_preloadImages('images_<?= $lang ?>/top5b.png','images_<?= $lang ?>/top4b.png','images_<?= $lang ?>/top3b.png','images_<?= $lang ?>/index_010b.png','images_<?= $lang ?>/index_06b.png','images_<?= $lang ?>/index_08b.png','images_<?= $lang ?>/index_10b.png','images_<?= $lang ?>/index_12b.png')">
<div id="wrap" align="center">
  <div class="head">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="38" align="center" bgcolor="#000000"><table width="968" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="184" align="left" valign="top"><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','images/ggcom.png',0)"><img src="images/ggcom.png" name="Image1" height="38" border="0" id="Image1" /></a></td>
        <td width="487" align="left" valign="top">&nbsp;</td>
        <td width="84" align="left" valign="top"><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image21','','images/top3b.png',1)"><img src="images/top3.png" name="Image21" width="84" height="38" border="0" id="Image21" /></a></td>
<!--
        <td width="2" align="left" valign="top"><img src="images/top02.png" width="2" height="38" /></td>
        <td width="108" align="left" valign="top"><a href="download.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image31','','images/top4b.png',1)"><img src="images/top4.png" name="Image31" width="108" height="38" border="0" id="Image31" /></a></td>
-->
      </tr>
    </table></td>
  </tr>
</table>
  </div>
   
  <div id="fudong" align="center"><div class="nav w l" align="center">
    <ul id="nav" class="l">
      <table width="968" border="0" cellpadding="0" cellspacing="0">
        <tr>
		<td width="343"><a href="index.php"><img src="images/galleon_logo.png?ver=1.3" height="94" border="0" /></a></td>
		<td width="1"><img src="images/index_05.png" width="2" height="94" /></td>
		<td width="155" align="center"><li><a href="about_us.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image15','','images/about_us.png',1)"><img src="images/about_us.png" name="Image15" width="160" height="94" border="0" id="Image15" /></a></li></td>
		<td width="1"><img src="images/index_05.png" width="2" height="94" /></td>
		<td width="61" align="center" valign="bottom"><li><a href="our_services.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image22','','images/our_services.png',1)"><img src="images/our_services.png" name="Image22" width="160" height="94" border="0" id="Image22" /></a></li></td>
		<td width="1"><img src="images/index_05.png" width="2" height="94" /></td>
		<td width="64"><li><a href="our_products.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image23','','images/our_products.png',1)"><img src="images/our_products.png" name="Image23" width="160" height="94" border="0" id="Image23" /></a>
            <ul>
<li>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td height="34" align="center" bgcolor="#7C9C0B"><table width="968" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="634">&nbsp;</td>
                                <td width="154" align="center"><img src="images_<?= $lang ?>/navbg03.png" width="48" height="30" /></td>
                                <td width="180">&nbsp;</td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td height="180" align="center" valign="top" background="images_<?= $lang ?>/navbg01.png"><table width="968" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="175"><table width="968" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="16" rowspan="2">&nbsp;</td>
                                      <td width="333">&nbsp;</td>
                                      <td width="619">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td valign="top">
					<table width="317" border="0" cellspacing="0" cellpadding="0">
					<?php
						for($c = 0; $c < count($topCategories); $c++) {
							$topCategory = $topCategories[$c];
					?>
                                          <tr>
                                            <td width="22" height="32"><img src="images_<?= $lang ?>/navbg04.png" width="14" height="27" /></td>
                                            <td width="295"><a href="our_products.php?category_id=<?php echo $topCategory['category_id']; ?>" onmouseover="javascript: showSubCategories(<?php echo $topCategory['category_id']; ?>);" class="navbg style1"><?php echo $topCategory['category_name']; ?></a></td>
                                          </tr>
					<?php
						}
					?>
<!--
                                          <tr>
                                            <td height="32"><img src="images_<?= $lang ?>/navbg04.png" width="14" height="27" /></td>
                                            <td><a href="#" class="navbg">Fitness Equipment Accessories</a></td>
                                          </tr>
                                          <tr>
                                            <td height="32"><img src="images_<?= $lang ?>/navbg04.png" width="14" height="27" /></td>
                                            <td><a href="#" class="navbg">Fitness Gear and Accessories Health </a></td>
                                          </tr>
                                          <tr>
                                            <td height="32"><img src="images_<?= $lang ?>/navbg04.png" width="14" height="27" /></td>
                                            <td><a href="#" class="navbg">and Fitness Products</a></td>
                                          </tr>
-->
                                          <tr>
                                            <td height="32">&nbsp;</td>
                                            <td>&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td height="32">&nbsp;</td>
                                            <td>&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td height="32">&nbsp;</td>
                                            <td>&nbsp;</td>
                                          </tr>
                                      </table></td>
                                      <td valign="top"><table id="sub_categories_area" width="607" border="0" cellspacing="0" cellpadding="0">
<!--
                                      <tr>
                                          <td width="204" height="26"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                          <td width="204"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                          <td width="199"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                        </tr>
                                          <tr>
                                            <td width="204" height="26"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                            <td width="204"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                            <td width="199"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                        </tr>
                                          <tr>
                                            <td width="204" height="26"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                            <td width="204"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                            <td width="199"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                        </tr>
                                          <tr>
                                            <td width="204" height="26"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                            <td width="204"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                            <td width="199"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                        </tr>
                                          <tr>
                                            <td width="204" height="26"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                            <td width="204"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                            <td width="199"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                        </tr>
                                          <tr>
                                            <td width="204" height="26"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                            <td width="204"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                            <td width="199"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                        </tr>
                                          <tr>
                                            <td width="204" height="26"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                            <td width="204"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                            <td width="199"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                        </tr>
                                          <tr>
                                            <td width="204" height="26"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                            <td width="204"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                            <td width="199"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                        </tr>
                                          <tr>
                                            <td width="204" height="26"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                            <td width="204"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                            <td width="199"><a href="#" class="navbg2">- Fitness Equipment</a></td>
                                        </tr>
                                          <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                          </tr>
-->
                                      </table></td>
                                    </tr>
                                  </table>
                                    <br /></td>
                              </tr>
				<tr>
					<td height="62" align="right"><table width="968" border="0" cellspacing="0" cellpadding="0">
					<tr>
					<td width="950" height="72" align="right" valign="top"><a href="https://www.facebook.com/pages/Fitness-Expert/236657713207317" target="_blank"><img src="images/facebook.png" width="153" height="51" border="0" /></a></td>
					<td width="18" valign="top">&nbsp;</td>
					</tr>
					</table></td>
				</tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td height="15" background="images_<?= $lang ?>/navbg02.png"></td>
                        </tr>
                      </table>
                  </li>
                </ul>
          </li></td>
	<td width="1"><img src="images/index_05.png" width="2" height="94" /></td>
	<td width="62"><li><a href="contact.php" class="style1" onmouseover="MM_swapImage('Image24','','images/contact_us.png',1)" onmouseout="MM_swapImgRestore()"><img src="images/contact_us.png" name="Image24" width="160" height="94" border="0" id="Image24" /></a></li></td>
	<td width="1"><img src="images/index_05.png" width="2" height="94" /></td>
        </tr>
      </table>
      <?php echo $bannerStr; ?>
    </ul>
    </div>
<script type="text/javascript" src="js/menu.js"></script></div>
</div>
    
<?php echo $largeBannerStr; ?>
    
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><table width="968" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top" bgcolor="#FFFFFF"><table width="968" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top"><p>&nbsp;</p>
