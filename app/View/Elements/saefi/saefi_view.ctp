<?php
	$ichecked = "&#x2611;";
    $nchecked = "&#x2610;";
?>
<div id="printAreade">
			<div class="formbacka">

				<table style="width: 100%;">
					<tr>
						<td>
						<?php
							echo($this->Html->image('header-object.png', array('alt' => 'SAEFI', 'fullBase' => true)));
						?>
					</td>
					<td style="text-align: center;">
						<h2>MINISTRY OF HEALTH</h2>
						<p class="lead">UNIT OF VACCINES AND IMMUNIZATION SERVICES</p>
						<h3>AEFI Reporting Form</h3>
					</td>
					<td>
						<?php
							echo $this->Html->image('med-blue.png', array('alt' => 'MED', 'fullBase' => true));
						?>
					</td>
					</tr>
				</table><br>

				<table style="width: 100%;">
					<tr>
						<td style="width: 25%;">Province/State</td>
						<td style="width: 25%;">District: </td>
						<td style="width: 25%;">Place of vaccination</td>
						<td style="width: 25%;">Vaccination in </td>
					</tr>
					<tr>
						<td style="width: 25%;"><strong><?php echo $saefi['County']['county_name'] ?></strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['district'] ?></strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['place_vaccination'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['vaccination_in'] ?>	</strong><br>
						<strong><?php echo $saefi['Saefi']['vaccination_in_other'] ?>	</strong>
					</td>
					</tr>
				</table>
				<hr>
				<table style="width: 100%;">
					<tr>
						<td style="width: 25%;">Reporter's name</td>
						<td style="width: 25%;">Reporter designation </td>
						<td style="width: 25%;">Date of report</td>
						<td style="width: 25%;">Report start date </td>
					</tr>

					<tr>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['reporter_name'] ?></strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Designation']['name'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['report_date'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['start_date'] ?></strong></td>
					</tr>
				</table>
				 <hr>

				<table style="width: 100%;">
					<tr>
						<td style="width: 25%;">Report type</td>
						<td style="width: 25%;">Reporter's telephone </td>
						<td style="width: 25%;">Reporter's mobile</td>
						<td style="width: 25%;">Reporter's email</td>
					</tr>
					<tr>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['report_type'] ?></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['telephone'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['mobile'] ?></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['reporter_email'] ?>	</strong></td>
					</tr>
				</table>
				<hr>
				<h5 style="text-align:center;">PATIENT DETAILS</h5>
				<hr>
				<table style="width: 100%;">
					<tr>
						<td style="width: 25%;">Patient's name </td>
						<td style="width: 25%;">Date of birth</td>
						<td style="width: 25%;">Phone number</td>
					</tr>
					<tr>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['patient_name'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['date_of_birth'] ?></strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['patient_phone'] ?>		</strong></td>
					</tr>
				</table>
				<hr>
				<table style="width: 100%;">
					<tr>
						<td style="width: 25%;">Age in months</td>
						<td style="width: 25%;">Age in years </td>
						<td style="width: 25%;">Age in days</td>
						<td style="width: 25%;">Age group</td>
					</tr>
					<tr>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['age_at_onset_months'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['age_at_onset_years'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['age_at_onset_days'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['age_group'] ?>	</strong></td>
					</tr>
				</table>
				<hr>
				<table style="width: 100%;">
					<tr>
						<td style="width: 25%;">Gender</td>
						<td style="width: 25%;">Address </td>
						<td style="width: 25%;">Phone</td>
						<td style="width: 25%;">Street name</td>
					</tr>
					<tr>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['gender'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['patient_address'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['patient_phone'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['patient_street_name'] ?>	</strong></td>
					</tr>
				</table>
				<hr>
				<table style="width: 100%;">
					<tr>
						<td style="width: 25%;">House number</td>
						<td style="width: 25%;">Suspected vaccine</td>
						<td style="width: 25%;">Type of site</td>
						<td style="width: 25%;">Type of site other</td>
					</tr>
					<tr>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['patient_house_number'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['vaccine_name'] ?>	</strong></td>
						<td style="width: 25%;"> <strong><?php echo $saefi['Saefi']['site_type'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['site_type_other'] ?>	</strong></td>
					</tr>
				</table>
				<hr>
				<table style="width: 100%;">
					<tr>
						<td style="width: 25%;">Date of first symptom</td>
						<td style="width: 25%;">Date hospitalized</td>
						<td style="width: 25%;">Date first reported</td>
						<td style="width: 25%;">Date first reported</td>
					</tr>
					<tr>
						<td style="width: 25%;"> <strong><?php echo $saefi['Saefi']['symptom_date'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['hospitalization_date'] ?>	</strong></td>
						<td style="width: 25%;"> <strong><?php echo $saefi['Saefi']['symptom_date'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['date_first_reported'] ?>	</strong></td>
					</tr>
				</table>
				<hr>
				<table style="width: 100%;">
					<tr>
						<td style="width: 25%;">Time of first symptom</td>
						<td style="width: 25%;">Date form filled</td>
						<td style="width: 25%;">Status on date</td>
						<td style="width: 25%;">Status on date</td>
					</tr>
					<tr>
						<td style="width: 25%;"> <strong><?php echo $saefi['Saefi']['time_of_first_symptom'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['date_form_filled'] ?>	</strong></td>
						<td style="width: 25%;"> <strong><?php echo $saefi['Saefi']['symptom_date'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['status_on_date'] ?>	</strong></td>
					</tr>
				</table>
				<hr>
				<table style="width: 100%;">
					<tr>
						<td style="width: 25%;">Date died</td>
						<td style="width: 25%;">Autopsy done?</td>
						<td style="width: 25%;">Autopsy planned</td>
						<td style="width: 25%;">Autopsy planned date</td>
					</tr>
					<tr>
						<td style="width: 25%;"> <strong><?php echo $saefi['Saefi']['died_date'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['autopsy_done'] ?>	</strong></td>
						<td style="width: 25%;"> <strong><?php echo $saefi['Saefi']['autopsy_planned'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['autopsy_planned_date'] ?>	</strong></td>
					</tr>
				</table>
				<hr>
				<!-- <table style="width: 100%;">
					<tr>
						<td style="width: 25%;">AUTOPSY PLANNED</td>
						<td style="width: 25%;"> <strong><?php echo $saefi['Saefi']['autopsy_planned'] ?>	</strong></td>
						<td style="width: 25%;">AUTOPSY PLANNED DATE</td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['autopsy_planned_date'] ?>	</strong></td>
					</tr>
				</table> -->
				 <hr>
				 <table id="change_order_items" style="width: 100%;" class="table table-bordered table-condensed table-pvborder">
	                <thead>
	                  <tr>
	                    <th colspan="4" ><label class="required" style="text-align:center;">Relevant patient information prior to immunization</label></th>
	                  </tr>
	                  <tr>
	                    <th style="width: 10%;"></th>
	                    <th style="width: 4%;"> <label class="required">FINDING </label></th>
	                    <th style="width: 7%"> <label class="required">REMARKS</label></th>
	                  </tr>
	                </thead>
	                <tbody>
	                  <tr>
	                    <td><p>Past history of similar event</p></td>
	                    <td><?php echo $saefi['Saefi']['past_history']?></td>
	                    <td><?php echo $saefi['Saefi']['past_history_remarks']?></td>
	                  </tr>
	                  <tr>
					  	<td><p>Adverse event after previous vaccination(s)</p></td>
	                    <td><?php echo $saefi['Saefi']['adverse_event']?></td>
	                    <td><?php echo $saefi['Saefi']['adverse_event_remarks']?></td>
	                  </tr>
	                  <tr>
					  	<td><p>History of allergy to vaccine, drug or food</p></td>
	                    <td><?php echo $saefi['Saefi']['allergy_history']?></td>
	                    <td><?php echo $saefi['Saefi']['allergy_history_remarks']?></td>
	                  </tr>
	                  <tr>
					  	<td><p>Pre-existing illness (30 days) / congenital disorder</p></td>
	                    <td><?php echo $saefi['Saefi']['existing_illness']?></td>
	                    <td><?php echo $saefi['Saefi']['existing_illness_remarks']?></td>
	                  </tr>
	                  <tr>
					  	<td><p>History of hospitalization in last 30 days, with cause</p></td>
	                    <td><?php echo $saefi['Saefi']['hospitalization_history']?></td>
	                    <td><?php echo $saefi['Saefi']['hospitalization_history_remarks']?></td>
	                  </tr>
	                  <tr>
					  	<td><p>Patient currently on concomitant medication?<br>
                        (If yes, name the drug, indication, doses & treatment dates)</p></td>
	                    <td><?php echo $saefi['Saefi']['medication_vaccination']?></td>
	                    <td><?php echo $saefi['Saefi']['medication_vaccination_remarks']?></td>
	                  </tr>
	                  <tr>
					  	<td><p>Family history of any disease (relevant to AEFI) or allergy </p></td>
	                    <td><?php echo $saefi['Saefi']['family_history']?></td>
	                    <td><?php echo $saefi['Saefi']['family_history_remarks']?></td>
	                  </tr>
	                </tbody>
          		</table>
				<hr>
				 <table id="change_order_items" style="width: 100%;" class="table table-bordered table-condensed table-pvborder">
	                <thead>
	                  <tr>
	                    <th colspan="4" ><label class="required">For Adult women</label></th>
	                  </tr>
	                  <tr>
	                    <th style="width: 10%;"></th>
	                    <th style="width: 10%;"></th>
	                  </tr>
	                </thead>
	                <tbody>
	                  <tr>
	                    <td><p>Currently pregnant?</p></td>
	                    <td><?php echo $saefi['Saefi']['pregnant']?></td>
	                    <td><?php echo $saefi['Saefi']['pregnant_weeks']?></td>
	                  </tr>
	                  <tr>
					  	<td><p>Currently breastfeeding?</p></td>
	                    <td><?php echo $saefi['Saefi']['breastfeeding']?></td>
	                    <td></td>
	                  </tr>
	                </tbody>
          		</table>
				 <table id="change_order_items" style="width: 100%;" class="table table-bordered table-condensed table-pvborder">
	                <thead>
	                  <tr>
	                    <th colspan="4" ><label class="required">For Infants:</label></th>
	                  </tr>
	                  <tr>
	                    <th style="width: 10%;"></th>
	                    <th style="width: 10%;"></th>
	                  </tr>
	                </thead>
	                <tbody>
	                  <tr>
	                    <td><p>The birth was:</p></td>
	                    <td><?php echo $saefi['Saefi']['infant']?></td>
	                  </tr>
	                  <tr>
					  	<td><p>Birth Weight</p></td>
	                    <td><?php echo $saefi['Saefi']['birth_weight']?></td>
	                  </tr>
	                  <tr>
					  	<td><p>Delivery procedure was</p></td>
	                    <td><?php echo $saefi['Saefi']['delivery_procedure']?></td>
	                  </tr>
	                  <tr>
					  	<td><p>Delivery procedure specify</p></td>
	                    <td><?php echo $saefi['Saefi']['delivery_procedure_specify']?></td>
	                  </tr>
	                </tbody>
          		</table>
				<hr>
				<table style="width: 100%;">
					<tr>
						<td colspan="4"><h5 style="text-align: center; color: #884805;">Details of first examination of serious AEFI case</h5> </td>
					</tr>
					<tr>
						<td style="width: 5%;"></td>
						<td style="width: 30%;">
							<p> <?php echo ($saefi['Saefi']['source_examination']   ? $ichecked : $nchecked ); ?> Examination by the investigator </p>
							<p> <?php echo ($saefi['Saefi']['source_documents']   ? $ichecked : $nchecked ); ?> Documents </p>
							<p> <?php echo ($saefi['Saefi']['source_verbal']   ? $ichecked : $nchecked ); ?> Verbal autopsy </p>
							<p> <?php echo ($saefi['Saefi']['source_other']   ? $ichecked : $nchecked ); ?> Other </p>
							<p> <?php echo $saefi['Saefi']['source_other_specify']; ?> </p>
						</td>

						<td style="width: 35%; vertical-align: top;">
							<p><strong>Brief details on the event</strong></p>
							<strong><?php echo $saefi['Saefi']['description_of_reaction'] ?>	</strong>
						</td>
					</tr>
				</table>
				<hr>
				<table style="width: 100%;">
					<tr>
						<td style="width: 25%;">verbal autopsy source </td>
						<td style="width: 25%;">Name of the person who first examined/treated the patient: </td>
						<td style="width: 25%;">Name of other persons treating the patient: </td>
						<td style="width: 25%;">Other sources who provided information </td>
					</tr>
					<tr>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['verbal_source'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['name_of_person_first_treated']?></strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['name_of_the_person_treating']?></strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['other_source_of_info']?></strong></td>
					</tr>
				</table>
				<hr>
				<table style="width: 100%;">
					<tr>
						<td style="width: 25%;">Signs and symptoms in chronological order from the time of vaccination: </td>
					</tr>
					<tr>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['signs_symptoms'] ?>	</strong><br></td>
					</tr>
				</table>
				 <hr>

			  	<table id="change_order_items" style="width: 100%;" class="table table-bordered table-condensed table-pvborder">
	                <thead>
	                  <tr>
	                    <th colspan="7" style="width: 60%"><label class="required">Details of Vaccines</label></th>
	                    <th colspan="4"><label class="required">Details of Diluents</label></th>
	                  </tr>
	                  <tr>
	                  	<th style="width: 1%;"><label>#</label></th>
	                    <th style="width: 10%;"> <label class="required">Name of Vaccine <span style="color:red;">*</span></label><small class="help-block">(e.g. BCG, DPT-Hib-HeB)</small></th>
	                    <th style="width: 7%"> <label class="required">Dose No.</label></th>
	                    <th> <label class="required"> Date vaccinated <span style="color:red;">*</span><br><small class="help-block">(dd-mm-yyyy)</small></label></th>
	                    <th> <label> Route,site of vaccination <br><small class="help-block">(i.m.,s.c., i.d.)</small></label></th>
	                    <th style="width: 5%"> <label class="required">Batch/Lot number <span style="color:red;">*</span></label></th>
	                    <th> <label class="required">Manufacturer's Name <span style="color:red;">*</span></label></th>
	                    <th> <label class="required">Expiry date <span style="color:red;">*</span></label></th>
	                    <th style="width: 7%"> <label class="required">Batch/ Lot Number <span style="color:red;">*</span></label></th>
	                    <th style="width: 10%"><label>Manufacturer's Name</label></th>
	                    <th> <label>Expiry date</label> </th>
	                  </tr>
	                </thead>
	                <tbody>
	                  <?php
	                  	$i = 0;
	                     foreach ($saefi['AefiListOfVaccine'] as $aefiListOfVaccine):
	                  ?>
	                  <tr>
	                    <td><?= $i+1; ?></td>
	                    <td><?php
	                    	echo (!empty($aefiListOfVaccine['Vaccine']['vaccine_name'])) ? $aefiListOfVaccine['Vaccine']['vaccine_name'] : '' ;
	                    	echo (!empty($aefiListOfVaccine['vaccine_name'])) ? $aefiListOfVaccine['vaccine_name'] : '' ;
	                    	?></td>
	                    <td><?php echo $aefiListOfVaccine['dosage'];?></td>
	                    <td><?php echo $aefiListOfVaccine['vaccination_date'].' ';
	                    			if(isset($aefiListOfVaccine['vaccination_time']['hour'])) echo $aefiListOfVaccine['vaccination_time']['hour'].':';
									if(isset($aefiListOfVaccine['vaccination_time']['min'])) echo $aefiListOfVaccine['vaccination_time']['min'];
	                    ?></td>
	                    <td><?php echo $aefiListOfVaccine['vaccination_route'];?></td>
	                    <td><?php echo $aefiListOfVaccine['batch_number'];?></td>
	                    <td><?php echo $aefiListOfVaccine['vaccine_manufacturer'];?></td>
	                    <td><?php echo $aefiListOfVaccine['expiry_date'];?></td>
	                    <td><?php echo $aefiListOfVaccine['diluent_batch_number'];?></td>
	                    <td><?php echo $aefiListOfVaccine['diluent_manufacturer'];?></td>
	                    <td><?php echo $aefiListOfVaccine['diluent_expiry_date'];?></td>
	                  </tr>

	                <?php endforeach; ?>

	                </tbody>
          		</table>
				<hr>
				<table id="change_order_items" style="width: 100%;" class="table table-bordered table-condensed table-pvborder">
	                <thead>
	                  <tr>
	                    <th colspan="4" ><label class="required">Name and contact information of person completing these clinical details</label></th>
	                  </tr>
	                  <tr>
	                    <th style="width: 10%;"></th>
	                    <th style="width: 10%;"></th>
	                  </tr>
	                </thead>
	                <tbody>
	                  <tr>
	                    <td><p>Name and Contact</p></td>
	                    <td><?php echo $saefi['Saefi']['person_details']?></td>
	                    <td><?php echo $saefi['Saefi']['person_details']?></td>
	                  </tr>
	                  <tr>
					  	<td><p>Designation</p></td>
	                    <td><?php echo $saefi['Saefi']['person_designation']?></td>
	                  </tr>
	                  <tr>
					  	<td><p>Date</p></td>
	                    <td><?php echo $saefi['Saefi']['person_date']?></td>
	                  </tr>
	                </tbody>
          		</table>
				<hr>
				<hr style="border-top: 1px solid #000;">
				<h4 style="text-align:center;">Section D ----- Details of vaccines provided at the site linked to AEFI on the corresponding day</h4>
				<hr style="border-top: 1px solid #000;">
				<table style="width: 100%;" class="table table-bordered table-condensed table-pvborder">
					<thead>
						<tr>
							<th style="width: 55%;"></th>
							<th style="width: 15%;"></th>
							<th style="width: 25%;"></th>
						</tr>
	                </thead>
					<tbody>
					
					<tr>
						<td style="width: 55%;">a) When was the patient immunized? (✓ the below and respond to ALL questions)</td>
						<td style="width: 15%;"><strong><?php echo $saefi['Saefi']['when_vaccinated'] ?>	</strong></td>
					</tr>
					
					<tr>
						<td style="width: 55%;">In case of multidose vials, was the vaccine given</td>
						<td style="width: 15%;"><strong><?php echo $saefi['Saefi']['when_vaccinated_specify'] ?>	</strong></td>
					</tr>
					
					<tr>
						<td style="width: 55%;">b) Was there an error in prescribing or non-adherence to recommendations for use of this vaccine?</td>
						<td style="width: 15%;"><strong><?php echo $saefi['Saefi']['prescribing_error'] ?>	</strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['prescribing_error_specify'] ?>	</strong></td>
					</tr>
					
					<tr>
						<td style="width: 55%;">c) Based on your investigation, do you feel that the vaccine (ingredients) administered could have been unsterile?</td>
						<td style="width: 15%;"><strong><?php echo $saefi['Saefi']['vaccine_unsterile'] ?></strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['vaccine_unsterile_specify'] ?>	</strong></td>
					</tr>
					
					<tr>
						<td style="width: 55%;">d) Based on your investigation, do you feel that the vaccine's physical condition (e.g. colour, turbidity, foreign substances etc.) was abnormal at the time of administration?</td>
						<td style="width: 15%;"><strong><?php echo $saefi['Saefi']['vaccine_condition'] ?></strong></td>
						<td style="width: 25%;"><?php echo $saefi['Saefi']['vaccine_condition_specify'] ?>	</strong></td>
					</tr>
					
					<tr>
						<td style="width: 55%;">e) Based on your investigation, do you feel that there was an error in vaccine
						reconstitution/preparation by the vaccinator (e.g. wrong product, wrong diluent, improper
						mixing, improper syringe filling etc.)?</td>
						<td style="width: 15%;"><strong><?php echo $saefi['Saefi']['vaccine_reconstitution'] ?></strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['vaccine_reconstitution_specify'] ?>	</strong></td>
					</tr>
					
					<tr>
						<td style="width: 55%;">f) Based on your investigation, do you feel that there was an error in vaccine handling (e.g. break in cold chain during transport, storage and/or immunization session etc.)?</td>
						<td style="width: 15%;"><strong><?php echo $saefi['Saefi']['vaccine_handling'] ?></strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['vaccine_handling_specify'] ?>	</strong></td>
					</tr>
					
					<tr>
						<td style="width: 55%;">g) Based on your investigation, do you feel that the vaccine was administered incorrectly (e.g. wrong dose, site or route of administration, wrong needle size, not following good injection practice etc.)?</td>
						<td style="width: 15%;"><strong><?php echo $saefi['Saefi']['vaccine_administered'] ?></strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['vaccine_administered_specify'] ?>	</strong></td>
					</tr>
					
					<tr>
						<td style="width: 55%;">h) Number immunized from the concerned vaccine vial/ampoule</td>
						<td style="width: 15%;"><strong><?php echo $saefi['Saefi']['vaccinated_vial'] ?></strong></td>
					</tr>
					
					<tr>
						<td style="width: 55%;">i) Number immunized with the concerned vaccine in the same session</td>
						<td style="width: 15%;"><strong><?php echo $saefi['Saefi']['vaccinated_session'] ?></strong></td>	</strong></td>
					</tr>
					
					<tr>
						<td style="width: 55%;">j) Number immunized with the concerned vaccine having the same batch number in other locations. Specify locations:</td>
						<td style="width: 15%;"><strong><?php echo $saefi['Saefi']['vaccinated_locations'] ?></strong></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['vaccinated_locations_specify'] ?>	</strong></td>
					</tr>
					
					<tr>
						<td style="width: 55%;">k) Is this case a part of a cluster?</td>
						<td style="width: 15%;"><strong><?php echo $saefi['Saefi']['vaccinated_cluster'] ?></strong></td>
					</tr>
					
					<tr>
						<td style="width: 55%;">k) i) If yes, how many other cases have been detected in the cluster?</td>
						<td style="width: 15%;"><strong><?php echo $saefi['Saefi']['vaccinated_cluster_number'] ?></strong></td>
					</tr>
					
					<tr>
						<td style="width: 55%;">K) i) a) Did all the cases in the cluster receive vaccine from the same vial?</td>
						<td style="width: 15%;"><strong><?php echo $saefi['Saefi']['vaccinated_cluster_vial'] ?></strong></td>
					</tr>
					
					<tr>
						<td style="width: 55%;">K) i) b) If no, number of vials used in the cluster (enter details separately)</td>
						<td style="width: 15%;"><strong><?php echo $saefi['Saefi']['vaccinated_cluster_vial_number'] ?></strong></td>
					</tr>
					

					</tbody>
				</table>
				<hr>
				<hr style="border-top: 1px solid #000;">
				<h4 style="text-align:center;">Section E --- Immunization practices at the place(s) where concerned vaccine was used</h4>
				<hr style="border-top: 1px solid #000;">
				<table style="width: 55%;" class="table table-bordered table-condensed table-pvborder">
					<thead>
						<tr>
							<th style="width: 45%;"></th>
							<th style="width: 25%;"></th>
						</tr>
	                </thead>
					<tbody>
					<tr>
						<td style="width: 25%;">Are AD syringes used for immunization?</td>
						<td style="width: 75%;"><strong><?php echo $saefi['Saefi']['syringes_used'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">If no, specify the type of syringes used:</td>
						<td style="width: 75%;"><strong><?php echo $saefi['Saefi']['syringes_used_specify'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">Syringes used other:</td>
						<td style="width: 75%;"><strong><?php echo $saefi['Saefi']['syringes_used_other_specify'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">Specific key findings/additional observations and comments:</td>
						<td style="width: 75%;"><strong><?php echo $saefi['Saefi']['syringes_used_findings'] ?>	</strong></td>
					</tr>
					</tbody>
				</table>
				<hr>
				<h5 style="text-align:center;">Reconstitution procedure (✓)</h5>
				<table style="width: 75%;" class="table table-bordered table-condensed table-pvborder">
					<thead>
						<tr>
							<th style="width: 65%;"></th>
							<th style="width: 25%;"></th>
						</tr>
	                </thead>
					<tbody>
					<tr>
						<td style="width: 25%;">Same reconstitution syringe used for multiple vials of same vaccine?</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['reconstitution_multiple'] ?>	</strong></td>
					</tr>
					
					<tr>
						<td style="width: 25%;">Same reconstitution syringe used for reconstituting different vaccines?</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['reconstitution_different'] ?>	</strong></td>
					</tr>
					
					<tr>
						<td style="width: 25%;">Separate reconstitution syringe for each vaccine vial?</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['reconstitution_vial'] ?>	</strong></td>
					</tr>
					
					<tr>
						<td style="width: 25%;">Separate reconstitution syringe for each vaccination?</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['reconstitution_syringe'] ?>	</strong></td>
					</tr>
					
					<tr>
						<td style="width: 25%;">Are the vaccines and diluents used the same as those recommended by the manufacturer?</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['reconstitution_vaccines'] ?>	</strong></td>
					</tr>
					
					<tr>
						<td style="width: 25%;">Specific key findings/additional observations and comments:</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['reconstitution_observations'] ?>	</strong></td>
					</tr>
					
					</tbody>
				</table>
				<hr>
				<h5 style="text-align:center;">Injection technique in vaccinator(s): (Observe another session in the same locality – same or different place)</h5>
				<table style="width: 75%;" class="table table-bordered table-condensed table-pvborder">
					<thead>
						<tr>
							<th style="width: 65%;"></th>
							<th style="width: 25%;"></th>
						</tr>
	                </thead>
					<tbody>
					<tr>
						<td style="width: 25%;">Correct dose and route?</td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['injection_dose_route'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">Time of reconstitution mentioned on the vial? (in case of freeze dried vaccines)</td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['injection_time_mentioned'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">Non-touch technique followed?</td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['injection_no_touch'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">Contraindications screened prior to vaccination?</td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['injection_contraindications'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">How many AEFI were reported from the centre that distributed the vaccine in the last 30 days?</td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['injection_reported'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">Training received by the vaccinator? (If Yes, specify the date of last training)</td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['vaccinator_training'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">Specific key findings/additional observations and comments:</td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['injection_observations'] ?>	</strong></td>
					</tr>
					</tbody>
				</table>
				<hr style="border-top: 1px solid #000;">
				<h4 style="text-align:center;">Section F --- Cold chain and transport</h4>
				<hr style="border-top: 1px solid #000;">
				<h5 style="text-align:center;">Last vaccine storage point:</h5>
				<hr>
				<table style="width: 100%;" class="table table-bordered table-condensed table-pvborder">
					<thead>
						<tr>
							<th style="width: 65%;"></th>
							<th style="width: 25%;"></th>
						</tr>
	                </thead>
					<tbody>
					<tr>
						<td style="width: 17%;">Is the temperature of the vaccine storage refrigerator monitored?</td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['cold_temperature'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 17%;">If “yes”, was there any deviation outside of 2-8 ° C after the vaccine was placed inside?</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['cold_temperature_deviation'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 17%;">If “yes”, provide details of monitoring separately.</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['cold_temperature_specify'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 17%;">Was the correct procedure for storing vaccines, diluents and syringes followed?</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['procedure_followed'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 17%;">Was any other item (other than EPI vaccines and diluents) in the refrigerator or freezer?</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['other_items'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 17%;">Were any partially used reconstituted vaccines in the refrigerator?</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['partial_vaccines'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 17%;">Were any unusable vaccines (expired, no label, VVM at stages 3 or 4, frozen) in the refrigerator?</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['unusable_vaccines'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 17%;">Were any unusable diluents (expired, manufacturer not matched, cracked, dirty ampoule) in the store?</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['unusable_diluents'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 17%;">Specific key findings/additional observations and comments:</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['additional_observations'] ?>	</strong></td>
					</tr>
					</tbody>
				</table>
				<h5 style="text-align:center;">Vaccine transportation:</h5>
				<table style="width: 100%;" class="table table-bordered table-condensed table-pvborder">
					<thead>
						<tr>
							<th style="width: 65%;"></th>
							<th style="width: 25%;"></th>
						</tr>
	                </thead>
					<tbody>
					<tr>
						<td style="width: 17%;">Type of vaccine carrier used</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['cold_transportation'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 17%;">Was the vaccine carrier sent to the site on the same day as vaccination?</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['vaccine_carrier'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 17%;">Was the vaccine carrier returned from the site on the same day as vaccination?</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['transport_findings'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 17%;">Was a conditioned ice-pack used?</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['coolant_packs'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 17%;">Specific key findings/additional observations and comments:</td>
						<td style="width: 7%;"><strong><?php echo $saefi['Saefi']['transport_findings'] ?>	</strong></td>
					</tr>
					</tbody>
				</table>
				<hr style="border-top: 1px solid #000;">
				<h4 style="text-align:center;">Section G --- Community investigation (Please visit locality and interview parents/others)</h4>
				<hr style="border-top: 1px solid #000;">
				<table style="width: 75%;" class="table table-bordered table-condensed table-pvborder">
					<thead>
						<tr>
							<th style="width: 25%;"></th>
							<th style="width: 75%;"></th>
						</tr>
	                </thead>
					<tbody>
					<tr>
						<td style="width: 25%;">Were any similar events reported within a time period similar to when the adverse event occurred and in the same locality?</td>
						<td style="width: 75%;"><strong><?php echo $saefi['Saefi']['similar_events'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">If yes, describe:</td>
						<td style="width: 75%;"><strong><?php echo $saefi['Saefi']['similar_events_describe'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">If yes, how many events/episodes?</td>
						<td style="width: 75%;"><strong><?php echo $saefi['Saefi']['similar_events_episodes'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 100%;">Of those effected, how many are:</td>
					</tr>
					<tr>
						<td style="width: 25%;">Vaccinated:</td>
						<td style="width: 75%;"><strong><?php echo $saefi['Saefi']['affected_vaccinated'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">Not vaccinated:</td>
						<td style="width: 75%;"><strong><?php echo $saefi['Saefi']['affected_not_vaccinated'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">Unknown</td>
						<td style="width: 75%;"><strong><?php echo $saefi['Saefi']['affected_unknown'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">Other comments:</td>
						<td style="width: 75%;"><strong><?php echo $saefi['Saefi']['community_comments'] ?>	</strong></td>
					</tr>
					</tbody>
				</table>
				<table style="width: 100%;">
					<thead>
						<tr>
							<td colspan="2" style="border-top: 1px solid #000;"></td>
						</tr>
						<tr>
							<th colspan="4" ><label class="required">Section H --- Other findings/observations/comments</label></th>
						</tr>
						<tr>
							<td colspan="2" style="border-top: 1px solid #000;"></td>
						</tr>
					<thead>
					<tbody>
						<tr>
							<td style="width: 75%;"><label class="required">Other findings/observations/comments</label></td>
							<td style="width: 75%;"><strong><?php echo $saefi['Saefi']['relevant_findings'] ?>	</strong></td>
						</tr>
					</tbody>
				</table>
				 <hr>

				<!-- <table style="width: 100%;">
					<tr>
						<td style="width: 25%;">Serious</td>
						<td style="width: 75%;"><strong><?php echo $saefi['Saefi']['serious'] ?>	</strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">If Yes</td>
						<td style="width: 75%;"><strong>
							<?php echo $saefi['Saefi']['serious_yes'] ?>	<br>
							<?php echo $saefi['Saefi']['serious_other'] ?>
						</strong></td>
					</tr>
				</table>
				 <hr> -->

<!--
				<table style="width: 100%;">
					<tr>
						<td colspan="2"><p style="text-align: center;">Vaccine name</p></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['vaccine_given'] ?></strong></td>

					</tr>
					<tr>
					<td colspan="2"><p style="text-align: center;">Number of doses</p></td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['doses_given'] ?></strong></td>
					</tr>
				</table>
				 <hr> -->

				<?php if (count($saefi['Attachment']) > 0) { ?>
				<table  class="change_order_items" style="width: 100%;">
					<tbody>
					  <tr id="attachmentsTableHeader">
						<th>#</th>
						<th class="required" style="width : 30%;"><label class="required">FILE</label></th>
						<th class="required"><label class="required">A DESCRIPTION OF THE CONTENTS</label></th>
					  </tr>
					<?php
						$i = 1;
						foreach ($saefi['Attachment'] as $attachment): ?>
						<tr>
							<td style="width: 10%;"><?php echo $i++;?></td>
							<td>
								<a href="<?php echo $root?>attachments/download/<?php echo $attachment['id']; ?>"><?php echo __($attachment['basename']);?></a>
							</td>
							<td><?php echo $attachment['description'];?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
				<?php } ;?>

				<?php
					if($this->Session->read('Auth.User.user_type') != 'Public Health Program') {
				?>
				<table style="width: 100%;">
					<tr>
						<td style="width: 25%;">NAME OF PERSON REPORTING:</td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['reporter_name'] ?></strong></td>
						<td style="width: 25%;">DESIGNATION:</td>
						<td style="width: 25%;"><strong><?php echo $saefi['Designation']['name'] ?></strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">E-MAIL ADDRESS: </td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['reporter_email'] ?></strong></td>
						<td style="width: 25%;">PHONE NO.</td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['reporter_phone'] ?></strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">Date:</td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['reporter_date'] ?></strong></td>
						<td style="width: 25%;"></td>
						<td style="width: 25%;"></td>
					</tr>
				</table>
				 <hr>
				 <hr>
				<table style="width: 100%;">
					<tr>
						<td style="width: 25%;">NAME OF PERSON REPORTING:</td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['reporter_name_diff'] ?></strong></td>
						<td style="width: 25%;">E-MAIL ADDRESS: </td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['reporter_email_diff'] ?></strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">DESIGNATION:</td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['reporter_designation_diff'] ?></strong></td>
						<td style="width: 25%;">PHONE NO.</td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['reporter_phone_diff'] ?></strong></td>
					</tr>
					<tr>
						<td style="width: 25%;">Date:</td>
						<td style="width: 25%;"><strong><?php echo $saefi['Saefi']['reporter_date_diff'] ?></strong></td>
						<td style="width: 25%;"></td>
						<td style="width: 25%;"></td>
					</tr>
				</table>
				 <hr>
				 <?php
				 	}
				 ?>

				</div> <!-- /art-sheet -->
			</div> <!-- /art-sheet -->