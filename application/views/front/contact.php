<!-- banner-text -->
	<!-- //banner --> 
	<!-- contact -->
	<div class="slid">
		<div class="container">
		  <h4 class="text-center">CONTACTEZ NOUS</h4>
		 </br>
		 <?php if ($this->form_validation->run() == TRUE) {?>
										<div class="alert alert-success"><?php echo $message;?></div>
		<?php }?>
		<?php echo validation_errors('<div class="alert alert-danger">', '</div>') ;?>
		<?php  echo form_open('Auth/send_email',['classs'=>'form-horizontal']);?>
		  <div class="row test">
		    <div class="col-md-1">
		    </div>
		    <div class="col-md-10">
		      <div class="row">

		        <div class="col-sm-6 form-group">
		          <?php echo form_input(['name'=>'user','class'=>'form-control', 'placeholder'=>'Nom','user'=>set_value('user')]);?>
		        </div>
		        <div class="col-sm-6 form-group">
		          <?php echo form_input(['name'=>'email','class'=>'form-control', 'placeholder'=>'Email','email'=>set_value('email')]);?>
		        </div>
		      </div>
		      <div class="row">
		      	<div  class="col-sm-12">
		      		<?php echo form_textarea(['name'=>'message','class'=>'form-control', 'placeholder'=>'Votre message','nom'=>set_value('message')]);?>
		      	<div>
		      </div>
		  	<div class="row">
		  	</br>
		      <div class="col-md-12 form-group">
		         <?php echo form_submit(['value'=>'Envoyer' ,'class'=>'btn btn-info pull-center']);?>
		        </div>
		    </div>
		    <?php echo form_close();?>
		    <div class="col-md-1">
		    </div>
		      </div> 
		    </div>
		    </div>
		</div>
	</div>
	
	</div>
	<!-- //contact -->
	<!-- map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30933.015836689356!2d50.12894360246202!3d-14.27496316449564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x223df1bb7c7769a5%3A0x641d1abac2327ba8!2sSambava%2C+Madagascar!5e0!3m2!1sfr!2sfr!4v1509017439636" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<!-- //map -->  
	<!-- slid -->
	<div class="slid">
		<div class="container">
			<h4>Merci de votre visite</h4> 
			<p> A très bien  tôt</p>
		</div> 
	</div>
	<!-- //slid -->
	<!-- newsletter -->
	<div class="newsletter">
		
	</div>
	<!-- //newsletter -->
		<!-- start-smooth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->   
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>js/bootstrap.js"></script>
</body>
</html>