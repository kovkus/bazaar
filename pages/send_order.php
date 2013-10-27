
    	<div id="content-wrapper" class="content-wrapper">
	    	<div class="container clearfix">
	    		
	    		
	    		<!-- Reservation Form
		    	================================================================ -->
				
				<div class="container clearfix">
					<div class="grid_12">
						<div class="accent-box accent-box__big accent-box__pages">
							<div class="accent-box-inner">
								
								<!-- Reservation Form -->
								<div class="form form__modal form__reservation">
									<div class="accent-box-wrapper clearfix">
										<div class="accent-box-page accent-box-page__left">
											<div class="accent-box-page__left-inner">
												
												<!-- Form Holder -->
												<div class="form-holder">
													<h2 class="extra-title">Objednavka</h2>
													<div class="field clearfix">
														<label for="name_fs" class="fleft">Meno, priezvisko</label>
														<input type="text" name="name" id="sop_name" class="fright" placeholder="" required>
													</div>
													<div class="field clearfix">
														<label for="street" class="fleft">Ulica, č.d. + posch	.</label>
														<input type="text" name="adress" id="sop_address" class="fright" placeholder="" required>
													</div>
													<div class="field clearfix">
														<label for="tel_nummber" class="fleft">Telefónne číslo</label>
														<input type="tel" name="telephone" id="sop_telephone" class="fright" placeholder="09..." required>
													</div>
													<div class="field clearfix">
														<label for="payment" class="fleft">Spôsob platby</label>
														<select name="payment" id="sop_payment" class="dropkick fright" required>
															<option value="Hotovosť">Hotovosť</option>
															<option value="Stravné lístky">Stravné lístky</option>
															<option value="Uplatnenie zľavy">Uplatnenie zľavy</option>
														</select>
													</div>
													<div class="field clearfix">
														<label for="note" class="fleft">Poznámka</label>
														<input type="text" name="note" id="sop_note" class="fright" placeholder="">
													</div>
												</div>
																						<div class="center submit-button-wrap">
													<div class="action-btn-holder action-btn-holder__warning">
														<input type="button" name="res-submit" id="res-submit" value="Objednať" onClick="sendOrderProceed();" class="action-btn"/>
														<!-- Decoration -->
														<span class="stars stars__small"></span>
 														<span class="action-btn-back"></span>
														<!-- Decoration / End  -->
													</div>
												</div>
												
											</div>
										</div>
										
										<div class="accent-box-divider"></div>
										
										<div class="accent-box-page accent-box-page__right">
											<div class="accent-box-page__right-inner">
												
											
													<span class="final_cart"></span><br>
												<button style="float:left" onClick="finalCancel()">STORNO</button>
											</div>
											<div class="accent-box-page__right_sub"></div>
										</div>
									</div>
								</div>
								<!-- Reservation Form / End -->
								
							</div>
						</div>
					</div>
				</div>
	    	</div>
    	</div>
    	<!-- Content / End -->

