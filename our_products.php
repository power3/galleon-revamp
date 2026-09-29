<?php
	require_once('includes/application.php');
	require_once('includes/catalog.php');

	$categoryID = $_GET['category_id'];
	if(!isset($categoryID))
		$categoryID = 0;

	$categoryTree = getCategoryTree($categoryID);
	$categories = getCategories($categoryID);
	$products = getProducts($categoryID);

	$bannerStr = '<div id="opbanner"></div>';

	include_once('includes/header.php');
?>
                <table width="90%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="center" valign="top"><p align="justify" class="style2 tree">
			<?php
				for($t = 0; $t < count($categoryTree); $t++) {
					if($t > 0)
						echo " / ";
					echo '<a href="our_products.php?category_id=' . $categoryTree[$t]['category_id'] . '">' . $categoryTree[$t]['category_name'] . '</a>';
				}
			?>
			</p>
                    </td>
                  </tr>
                </table>
                <table width="90%" border="0" align="center" cellpadding="10" cellspacing="10">
		<?php
			$i = 0;
			for($c = 0; $c < count($categories); $c++, $i++) {
				$category = $categories[$c];

				if($i % 2 == 0) {
		?>
                	<tr>
		<?php
				}
		?>
                    <td width="50%">
			<div align="center">
                      <table width="100%" border="1" cellspacing="0" cellpadding="3">
                          <tr>
                            <td><table width="100%" border="0" cellspacing="5" cellpadding="3">
                                <tr>
                                  <td width="6%" rowspan="2"><table border="1" cellpadding="1" cellspacing="0" bordercolor="#A2CA0E" style="width: 115px; height: 115px">
                                      <tr>
                                        <td><a href="our_products.php?category_id=<?php echo $category['category_id']; ?>"><img src="cms/image/<?php echo $category['image'] != '' ? $category['image'] : 'data/categories/default.jpg'; ?>" style="max-width: 113px; max-height: 113px" border="0" /></a></td>
                                      </tr>
                                  </table></td>
                                  <td width="94%" height="92" valign="top"><div align="left"><span class="style11"><?php echo $category['category_name']; ?></span></div></td>
                                </tr>
                                <tr>
                                  <td><div align="right"><a href="our_products.php?category_id=<?php echo $category['category_id']; ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image27','','images/more2.jpg',1)"><img src="images/more1.jpg" name="Image27" width="122" height="26" border="0" id="Image27" /></a></div></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
                    </div></td>
		<?php
				if($i % 2 == 1) {
		?>
			</tr>
		<?php
				}
			}

			for($p = 0; $p < count($products); $p++, $i++) {
				$product = $products[$p];

				if($i % 2 == 0) {
		?>
                	<tr>
		<?php
				}
		?>
                    <td width="50%">
			<div align="center">
                        <table width="220%" border="0" cellpadding="0" cellspacing="0" bordercolor="#999999">
                        </table>
                      <table width="100%" border="1" cellspacing="0" cellpadding="3">
                          <tr>
                            <td><table width="100%" border="0" cellspacing="5" cellpadding="3">
                                <tr>
                                  <td width="6%" rowspan="2"><table width="44%" border="1" cellpadding="1" cellspacing="0" bordercolor="#A2CA0E" style="width: 115px; height: 115px">
                                      <tr>
                                        <td align="center"><a href="product_detail.php?product_id=<?php echo $product['product_id']; ?>"><img src="cms/image/<?php echo $product['image'] != '' ? $product['image'] : 'data/products/default.jpg'; ?>" style="max-width: 113px; max-height: 113px" border="0" /></a></td>
                                      </tr>
                                  </table></td>
                                  <td width="94%" height="92" valign="top"><div align="left"><span class="style11"><?php echo $product['name']; ?></span></div></td>
                                </tr>
                                <tr>
                                  <td><div align="right"><a href="product_detail.php?product_id=<?php echo $product['product_id']; ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image27','','images/more2.jpg',1)"><img src="images/more1.jpg" name="Image27" width="122" height="26" border="0" id="Image27" /></a></div></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
                    </div></td>
		<?php
				if($i % 2 == 1) {
		?>
			</tr>
		<?php
				}
			}

			if($i % 2 == 1) {
		?>
			    <td width="50%">&nbsp;</td>
			</tr>
		<?php
			}
		?>
<!--
                    <td width="51%"><div align="center">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#999999">
                        </table>
                      <table width="100%" border="1" cellspacing="0" cellpadding="3">
                          <tr>
                            <td><table width="100%" border="0" cellspacing="5" cellpadding="3">
                                <tr>
                                  <td width="6%" rowspan="2"><table width="44%" border="1" cellpadding="1" cellspacing="0" bordercolor="#A2CA0E">
                                      <tr>
                                        <td><img src="images/pic1.jpg" width="113" height="113" /></td>
                                      </tr>
                                  </table></td>
                                  <td width="94%" height="92" valign="top"><div align="left"><span class="style11">Matix T50X Treadmill</span></div></td>
                                </tr>
                                <tr>
                                  <td><div align="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image25','','images/more2.jpg',1)"><img src="images/more1.jpg" name="Image25" width="122" height="26" border="0" id="Image25" /></a></div></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="center">
                        <table width="100%" border="1" cellspacing="0" cellpadding="3">
                          <tr>
                            <td><table width="100%" border="0" cellspacing="5" cellpadding="3">
                                <tr>
                                  <td width="6%" rowspan="2"><table width="44%" border="1" cellpadding="1" cellspacing="0" bordercolor="#A2CA0E">
                                      <tr>
                                        <td><img src="images/pic1.jpg" width="113" height="113" /></td>
                                      </tr>
                                  </table></td>
                                  <td width="94%" height="92" valign="top"><div align="left"><span class="style11">Matix T50X Treadmill</span></div></td>
                                </tr>
                                <tr>
                                  <td><div align="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image26','','images/more2.jpg',1)"><img src="images/more1.jpg" name="Image26" width="122" height="26" border="0" id="Image26" /></a></div></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
                    </div></td>
                    <td><div align="center">
                        <table width="100%" border="1" cellspacing="0" cellpadding="3">
                          <tr>
                            <td><table width="100%" border="0" cellspacing="5" cellpadding="3">
                                <tr>
                                  <td width="6%" rowspan="2"><table width="44%" border="1" cellpadding="1" cellspacing="0" bordercolor="#A2CA0E">
                                      <tr>
                                        <td><img src="images/pic1.jpg" width="113" height="113" /></td>
                                      </tr>
                                  </table></td>
                                  <td width="94%" height="92" valign="top"><div align="left"><span class="style11">Matix T50X Treadmill</span></div></td>
                                </tr>
                                <tr>
                                  <td><div align="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image28','','images/more2.jpg',1)"><img src="images/more1.jpg" name="Image28" width="122" height="26" border="0" id="Image28" /></a></div></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="center">
                        <table width="100%" border="1" cellspacing="0" cellpadding="3">
                          <tr>
                            <td><table width="100%" border="0" cellspacing="5" cellpadding="3">
                                <tr>
                                  <td width="6%" rowspan="2"><table width="44%" border="1" cellpadding="1" cellspacing="0" bordercolor="#A2CA0E">
                                      <tr>
                                        <td><img src="images/pic1.jpg" width="113" height="113" /></td>
                                      </tr>
                                  </table></td>
                                  <td width="94%" height="92" valign="top"><div align="left"><span class="style11">Matix T50X Treadmill</span></div></td>
                                </tr>
                                <tr>
                                  <td><div align="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image29','','images/more2.jpg',1)"><img src="images/more1.jpg" name="Image29" width="122" height="26" border="0" id="Image29" /></a></div></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
                    </div></td>
                    <td><div align="center">
                        <table width="100%" border="1" cellspacing="0" cellpadding="3">
                          <tr>
                            <td><table width="100%" border="0" cellspacing="5" cellpadding="3">
                                <tr>
                                  <td width="6%" rowspan="2"><table width="44%" border="1" cellpadding="1" cellspacing="0" bordercolor="#A2CA0E">
                                      <tr>
                                        <td><img src="images/pic1.jpg" width="113" height="113" /></td>
                                      </tr>
                                  </table></td>
                                  <td width="94%" height="92" valign="top"><div align="left"><span class="style11">Matix T50X Treadmill</span></div></td>
                                </tr>
                                <tr>
                                  <td><div align="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image210','','images/more2.jpg',1)"><img src="images/more1.jpg" name="Image210" width="122" height="26" border="0" id="Image210" /></a></div></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="center">
                        <table width="100%" border="1" cellspacing="0" cellpadding="3">
                          <tr>
                            <td><table width="100%" border="0" cellspacing="5" cellpadding="3">
                                <tr>
                                  <td width="6%" rowspan="2"><table width="44%" border="1" cellpadding="1" cellspacing="0" bordercolor="#A2CA0E">
                                      <tr>
                                        <td><img src="images/pic1.jpg" width="113" height="113" /></td>
                                      </tr>
                                  </table></td>
                                  <td width="94%" height="92" valign="top"><div align="left"><span class="style11">Matix T50X Treadmill</span></div></td>
                                </tr>
                                <tr>
                                  <td><div align="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image211','','images/more2.jpg',1)"><img src="images/more1.jpg" name="Image211" width="122" height="26" border="0" id="Image211" /></a></div></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
                    </div></td>
                    <td><div align="center">
                        <table width="100%" border="1" cellspacing="0" cellpadding="3">
                          <tr>
                            <td><table width="100%" border="0" cellspacing="5" cellpadding="3">
                                <tr>
                                  <td width="6%" rowspan="2"><table width="44%" border="1" cellpadding="1" cellspacing="0" bordercolor="#A2CA0E">
                                      <tr>
                                        <td><img src="images/pic1.jpg" width="113" height="113" /></td>
                                      </tr>
                                  </table></td>
                                  <td width="94%" height="92" valign="top"><div align="left"><span class="style11">Matix T50X Treadmill</span></div></td>
                                </tr>
                                <tr>
                                  <td><div align="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image212','','images/more2.jpg',1)"><img src="images/more1.jpg" name="Image212" width="122" height="26" border="0" id="Image212" /></a></div></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="center">
                        <table width="100%" border="1" cellspacing="0" cellpadding="3">
                          <tr>
                            <td><table width="100%" border="0" cellspacing="5" cellpadding="3">
                                <tr>
                                  <td width="6%" rowspan="2"><table width="44%" border="1" cellpadding="1" cellspacing="0" bordercolor="#A2CA0E">
                                      <tr>
                                        <td><img src="images/pic1.jpg" width="113" height="113" /></td>
                                      </tr>
                                  </table></td>
                                  <td width="94%" height="92" valign="top"><div align="left"><span class="style11">Matix T50X Treadmill</span></div></td>
                                </tr>
                                <tr>
                                  <td><div align="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image213','','images/more2.jpg',1)"><img src="images/more1.jpg" name="Image213" width="122" height="26" border="0" id="Image213" /></a></div></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
                    </div></td>
                    <td><div align="center">
                        <table width="100%" border="1" cellspacing="0" cellpadding="3">
                          <tr>
                            <td><table width="100%" border="0" cellspacing="5" cellpadding="3">
                                <tr>
                                  <td width="6%" rowspan="2"><table width="44%" border="1" cellpadding="1" cellspacing="0" bordercolor="#A2CA0E">
                                      <tr>
                                        <td><img src="images/pic1.jpg" width="113" height="113" /></td>
                                      </tr>
                                  </table></td>
                                  <td width="94%" height="92" valign="top"><div align="left"><span class="style11">Matix T50X Treadmill</span></div></td>
                                </tr>
                                <tr>
                                  <td><div align="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image214','','images/more2.jpg',1)"><img src="images/more1.jpg" name="Image214" width="122" height="26" border="0" id="Image214" /></a></div></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="center">
                        <table width="100%" border="1" cellspacing="0" cellpadding="3">
                          <tr>
                            <td><table width="100%" border="0" cellspacing="5" cellpadding="3">
                                <tr>
                                  <td width="6%" rowspan="2"><table width="44%" border="1" cellpadding="1" cellspacing="0" bordercolor="#A2CA0E">
                                      <tr>
                                        <td><img src="images/pic1.jpg" width="113" height="113" /></td>
                                      </tr>
                                  </table></td>
                                  <td width="94%" height="92" valign="top"><div align="left"><span class="style11">Matix T50X Treadmill</span></div></td>
                                </tr>
                                <tr>
                                  <td><div align="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image215','','images/more2.jpg',1)"><img src="images/more1.jpg" name="Image215" width="122" height="26" border="0" id="Image215" /></a></div></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
                    </div></td>
                    <td><div align="center">
                        <table width="100%" border="1" cellspacing="0" cellpadding="3">
                          <tr>
                            <td><table width="100%" border="0" cellspacing="5" cellpadding="3">
                                <tr>
                                  <td width="6%" rowspan="2"><table width="44%" border="1" cellpadding="1" cellspacing="0" bordercolor="#A2CA0E">
                                      <tr>
                                        <td><img src="images/pic1.jpg" width="113" height="113" /></td>
                                      </tr>
                                  </table></td>
                                  <td width="94%" height="92" valign="top"><div align="left"><span class="style11">Matix T50X Treadmill</span></div></td>
                                </tr>
                                <tr>
                                  <td><div align="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image216','','images/more2.jpg',1)"><img src="images/more1.jpg" name="Image216" width="122" height="26" border="0" id="Image216" /></a></div></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
                    </div></td>
                  </tr>
-->
                </table>
<?php
	include_once('includes/footer.php');
?>
