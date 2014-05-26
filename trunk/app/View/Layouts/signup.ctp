 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from m.palodrive.co/perhead/signup by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 15 May 2014 01:54:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>No Per Head Fee</title>
	<?php
		echo $this->Html->css('style');
		echo $this->Html->script('jquery-1.10.2');
		echo $this->Html->script('ui/1.10.4/jquery-ui');
		echo $this->Html->script('jquery.treegrid');
		echo $this->Html->script('custom');
	?>
</head>

<body>
	<div id="header">
		<div class="mheader">
			<div class="logo"><img src="img/logo.png"></div>
		 	<div class="call">Call us at <a href="skype:Nick_skype?call">
		 		<img align="absmiddle" src="img/skype.png"></a> 1.877.456.4344
		 	</div>
		  	<ul class="menu">
		      <li style="border:none"><a href="#">HOME</a></li>
		      <li><a href="#">ABOUT US</a></li>
		      <li><a href="#">SIGN IN</a></li>
		      <li><a href="#">SIGN UP</a></li>
		      <li><a href="#">CONTACT US</a></li>
		  	</ul>
	    </div>
	</div>
<div id="body">
	<div class="mbody">
		<ul class="procbar">
			<?php $active = $this->Session->read('step.active'); $sidebar = $this->Session->read('sidebar');?>
		  <li><a  <?php if($active == 1) : ?> class="active" <?php endif;?> href="#">1. Setup master</a></li>
		  <li><a <?php if($active == 2) :?> class="active" <?php endif;?>  href="#">2. Setup Client</a></li>
		  <li><a <?php if($active == 3) : ?> class="active" <?php endif;?>  href="#">3. Confirmation</a></li>
		  <li><a <?php if($active == 4) : ?> class="active" <?php endif;?>  href="#">4. Finish</a></li>
		</ul>
		<div class="content">
			<div class="cleft">
				<?php echo $content_for_layout;  ?>	
			</div>
			<div class="cright">
			 	<img src="img/icon_des.png"/><h3 class="title">Descriptions</h3>
			    <div class="gray_panel">
					<?php echo $this->element('sidebar/' . $sidebar);?>
				</div>	
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<div class="mfooter">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		      <tbody>
				<tr>
				<td valign="top">
					<div style="width:270px;">
					<div style="color:#fff; font-weight:bold;"> Bookie Tips</div>
					<div style="padding-top:15px;">
					    <img align="left" style="padding-right:7px;" src="img/h3.png"><strong>Price per Head Services Business Tips: Working with To-Do Lists</strong>
			    <div style="clear:both"></div>
			    Although you are using Price per Head Services to run your bookie operation prop...
					</div>
					<div style="padding-top:15px;">
					    <img align="left" style="padding-right:7px;" src="img/h3.png"><strong>Price per Head Services Business Tips: Working with To-Do Lists</strong>
			    <div style="clear:both"></div>
			    Although you are using Price per Head Services to run your bookie operation prop...
					</div>
					<div style="padding-top:15px;">
					    <img align="left" style="padding-right:7px;" src="img/h3.png"><strong>Price per Head Services Business Tips: Working with To-Do Lists</strong>
			    <div style="clear:both"></div>
			    Although you are using Price per Head Services to run your bookie operation prop...
					</div>
				    </div>
					</td>
				<td valign="top">
					<div style="width:270px;">
					<div style="color:#fff; font-weight:bold;">Popular Post</div>
					<div style="padding-top:15px;">
					    <img align="left" style="padding-right:7px;" src="img/h3.png"><strong>Price per Head Services Business Tips: Working with To-Do Lists</strong>
					    <div style="clear:both"></div>
					    Although you are using Price per Head Services to run your bookie operation prop...
					</div>
					<div style="padding-top:15px;">
					    <img align="left" style="padding-right:7px;" src="img/h3.png"><strong>Price per Head Services Business Tips: Working with To-Do Lists</strong>
					    <div style="clear:both"></div>
					    Although you are using Price per Head Services to run your bookie operation prop...
					</div>
					<div style="padding-top:15px;">
					    <img align="left" style="padding-right:7px;" src="img/h3.png"><strong>Price per Head Services Business Tips: Working with To-Do Lists</strong>
					    <div style="clear:both"></div>
					    Although you are using Price per Head Services to run your bookie operation prop...
					    </div>
					</div>
					</td>
				<td valign="top">
				    <div style="width:242px;">
					<div style="color:#fff; font-weight:bold;">Contact us</div>
					<div style="padding-top:20px;"><strong>Price Per Head</strong><br>
					    Price Per Head is the Leading Pay Per Head Bookmaking and Sportsbook Software Services<br>
					    (1)888-774-7467<br>
					    (1)888-PPH-SHOP<br>
					    info@priceperhead.com<br>
					    http://www.priceperhead.com<br>
					</div>
				    </div>
					</td>
				</tr>
			</tbody>
    	</table>
	</div>
</div>
<div class="copyright">
	<div style="color:#297b8d;">Copyright 2014, Real Price Per Head</div>
		<ul class="fmenu">
			<li style="border:none;"><a href="#">Horses &amp; Casino</a></li>
		    <li><a href="#">Agents options &amp; Software</a></li>
		    <li><a href="#">FAQ</a></li>
		    <li><a href="#">Rules &amp; Regulations</a></li>
		    <li><a href="#">Privacy <img src="img/tt.png"></a></li>
		</ul>
	</div>
	<script language="javascript">
	jQuery(document).ready(function($) {
		$('input,textarea').focus(function(){
		   $(this).data('placeholder',$(this).attr('placeholder'))
		   $(this).attr('placeholder','');
		});
		$('input,textarea').blur(function(){
		   $(this).attr('placeholder',$(this).data('placeholder'));
		});	
	});
	</script>
</body>
</html>