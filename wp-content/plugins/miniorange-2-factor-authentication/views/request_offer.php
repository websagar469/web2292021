<div class="mo_wpns_divided_layout">
	<div class="mo_wpns_setting_layout mo2f_offer_contact_us_layout">
		<h3>  Request For New Year Offer : <div style="float: right;">
		<?php
			echo '<a class="button button-primary button-large mo2f_offer_contact_us_button" href="'.$two_fa.'">Back</a>';
		 ?>
		</div></h3>
		<form method="post">
			<input type="hidden" name="option" value="mo_2FA_offer_request_form" />
			<input type="hidden" name="nonce" value="<?php echo wp_create_nonce('mo2f-Request-offer')?>">
			<table cellpadding="4" cellspacing="4">
                        <tr>
						  	<td><strong>Usecase : </strong></td>
							<td>
							<textarea type="text"  name="mo_2FA_offer_usecase" style="resize: vertical; width:350px; height:100px;" rows="4" placeholder="Write us about your usecase" required value=""></textarea>
							</td>


						  </tr> 	
                        <tr>
							<td>						
							</td>
							
						</tr>
			    		<tr>
							<td><strong>Email ID : </strong></td>
							<td><input required type="email" name="mo_2FA_offer_email" placeholder="Email id" value="" /></td>
						</tr>
                        
			    	</table>
			    	<div style="padding-top: 10px;">
			    		<input type="submit" name="submit" value="Submit Request" class="button button-primary button-large mo2f_offer_contact_us_button" />
			    	</div>	
		</form>		
	</div>
</div>