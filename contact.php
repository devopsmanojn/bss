<?php include('inc/header.php');?>
	<!-- End Main Nav -->
	<!-- Start Breadcrumbs -->
	<div id="breadcrumbs">
		<a href="index.php">Home</a> &raquo; 
		<span class="current">Contact</span>
		<div class="clear"></div>
	</div>
	<!-- End Breadcrumbs -->
	<!-- Start Page Title -->
	
	<!-- End Page Title -->
	<!-- Start Content Wrapper -->
	<div id="content_wrapper_sbr">
		<!-- Content Box -->
		<div class="box">
			<div class="two_third_left">
				<h2>Bss contact form</h2>
				<!-- Start Contact Form -->
				<div id="contact">
					<div id="message"></div>
										
					
					 <form method="post" name="contact" id="contact" action="contactus.php" onSubmit="return validateForm()">
                        
                        <p><label for=name accesskey=U>
						<span class="required">*</span> Your Name</label><input type="text" id="name" name="name" size="50" /></p>
                        
                        <p><label for=email accesskey=E>
						<span class="required">*</span> Email</label><input type="text" id="email" name="email" size="50" /></p>
                        
                        
                        <p><label for=phone accesskey=P>
						<span class="required">*</span>Phone</label><input type="text" name="phone" id="phone"  size="50"/></p>
                        
        
                        <p><label for=comments accesskey=C>
						<span class="required">*</span> Your comments</label> <textarea name="message"  rows="8" cols="40"  id=                        "message" style="width: 450px;"></textarea></p>
                       <input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />
                        
                    </form>
				</div>
			</div>
			<div class="one_third_last">
				<h2>Location</h2>
				<div class="thumb_1"><iframe width="260" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Shailendra+Nagar,+Raipur,+Chhattisgarh&amp;aq=0&amp;oq=shailendra+nagar+raiur&amp;sll=20.983588,82.752628&amp;sspn=48.65509,56.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Shailendra+Nagar,+Raipur,+Chhattisgarh&amp;ll=21.227962,81.653849&amp;spn=0.003045,0.003449&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Shailendra+Nagar,+Raipur,+Chhattisgarh&amp;aq=0&amp;oq=shailendra+nagar+raiur&amp;sll=20.983588,82.752628&amp;sspn=48.65509,56.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Shailendra+Nagar,+Raipur,+Chhattisgarh&amp;ll=21.227962,81.653849&amp;spn=0.003045,0.003449&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>
				<br />
				<h2>Head Office</h2>
				<address>
					<strong>Address Info:</strong><br />HIG-C 65 Second Floor,<br />Shailendra Nagar,RAIPUR(C.G) 492007</br>
					<strong>Phone:</strong>   +91 9165862360,9827900742<br />
					<strong>Email:</strong> infobss@gmail.com
				</address>
				
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<!-- End Content Wrapper -->
	<!-- Start Footer Sidebar -->
	<?php include('inc/footer.php');?>