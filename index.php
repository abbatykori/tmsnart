<!DOCTYPE html>
<html lang="en">
<?php
	include('head.php');
?>
<body>
	<div itemscope itemtype="http://transmt.com.ng/MobileApplication" class="page-wrapper">
		<div class="coming-soon">
			<div class="width-1of2 logo">
				<img class="" src="img/transmt-Logo-with-shadow.png" alt="transmt-official-logo">
				<p>Coming Soon</p>
				<p class="for-android"><span>For <span itemprop="operatingSystem">Android</span></span></p>
			</div>
			<div class="width-1of2 stock-image">
				<img src="img/stock.png" alt="Stock Image">
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="email-launch" id="email-launch">
			<form id="email-collection" name="email-collection" action="javascript:void(0)">
				<p>Fill in your email and we'll let you know when we launch</p>
				<input class="email-input-field" id='email-input-field' type="email" name="emailx">
				<input type="submit" name="submit" class='submit' id='submit-button' value="I'm Interested!">
			</form>
			<div class='msg'></div>
			<div id="after-submit"></div>
			<p>
				<small>
					<a href="https://docs.google.com/forms/d/1bu5O-Wc41oC4FupuG03tFOD9AiCJOj-lti4-6d_or5k/viewform">Want to help us some more?</a>
				</small>
			</p>
			<div class="clear"></div>
		</div>
		<div class="about">
			<h1>About</h1>
			<meta itemprop="name" content="Transmt" />
			<meta itemprop="applicationCategory" content="Communication" />
			<meta itemprop="applicationSubCategory" content="Messaging" />
			<meta itemprop="operatingSystem" content="Android" />



			<p itemscope itemprop="description" >
				Welcome to what will soon be the most intuitive <span itemprop="keywords">Bulk SMS</span> Application available.
			<br>
            <br>
				Are you tired of <i>painfully</i> copying in your contacts one after the other?
				<br>
				Do you wish to send large amounts of SMS effortlessly?
				<br>
				Are you looking for affordability without compromising quality?
				<br><br>
				These are among the reasons why we are building <span itemprop="alternateName">Transmt Bulk Messaging</span>.

			<br>
            <br>
				Sending <span itemprop="keywords">>Bulk Messages</span> just got AWESOME!
			<br>
            <br>
				Transmt Bulk Messaging should be avaiable soon on Android.
			</p>
		</div>
		<?php include('footer.php') ?>
	</div>

</body>
</html>