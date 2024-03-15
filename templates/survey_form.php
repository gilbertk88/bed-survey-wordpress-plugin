<?php echo ''; ?>


<style>
			
	.b_span, #fselect{

		padding: 5px 15px;
		border: 1px solid #fff;
		border-radius: 35px;
		margin: 5px;
		margin-left: 5px;
		overflow: auto;
		cursor: pointer;
		float: left;
		background: #fff;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

	}
	.answer_span{
		padding: 5px;
	}
	.td_area{
		padding: 20px;
		background: #fff9;
	}
	a{
		color:gray;
		text-decoration:none !important;
	}
	#fselect{
	color:gray;
	}
	.person{
		float: left;
		padding-left: 3%;
		display: none;
		max-width: 45%;
		min-width: 250px;
	}
	.submit1{
	width:100%;
	border:0px solid;
	}
	td{
		border:0px solid;
	}
	#submit1{
		padding: 10px;
		background: #545366;
		border: 0px solid;
		border-radius: 30px;
		color: #fff;
		font-size: 18px;
		margin-top: 50px;
		width: 80%;
	}
	.2person, .1person{
		min-height:90%;
		float:left;
	}
	.dbody{
		min-height:300px;
	}
	.personid td{

		font-size: 16px;
		background-color: #fff;
		color: #323232;
		padding: 10px 20px;
		margin-right: 20px;
		border: 0px solid #c5c5d8;
		border-radius: 0px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

	}
	#padda{
		padding-top:5px;
	}
	#ppselector{
		background: #fff;
		color: #323232;
		border-radius: 30px;
		padding: 9px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		width: 80%;
	}
	table{
		border:0px;
	}
	#personNo{
		padding-top:0px;
	}
	@media screen and (min-width: 501px) {
		.persondef{
		width:100%;
		font-weight:bold;
		text-align:center;
		color:#323232;
		padding-bottom: 20px;
		}
		.personhiphen{
		display:none;
		}
		.p1{
			width: 40%;
			text-align: center;
			float: left;
			padding-left: 50px;
			margin-top: 20px;
			margin-bottom: 30px;
		}
		.sbody{
			max-width: 900px;
			background: url( '/wp-content/plugins/Amore-survey/assets/img/background.png' );
			background-repeat: repeat;
			background-size: auto;
			background-repeat: repeat;
			background-size: auto;
			background-size: 100% 100%;
			background-repeat: no-repeat;
			padding-bottom: 100px;
			padding-top: 50px;
			border: 0px solid gray;
			border-radius: 30px;
		}
	}

	#p1, #p2{
		width:60%;
		border-radius:30px;
		margin-left: 20px;
	}

	@media screen and (max-width: 500px) {
		.persondef{
		float:left;
		font-weight:bold;
		color:#323232;
		padding-bottom: 20px;
		}
		.personhiphen{
		float:left;
		padding:0px 3px;
		}
		.sbody{
		max-width:900px;
		background:url('wp-content/plugins/amoresurvey/88681.png');
		background-size: 100% 100%;
		background-repeat: no-repeat;
		padding-left:30px;
		padding-right:20px;
		padding-bottom:20px;
		padding-left: 20px;
		padding-right: 20px;
		}
		.person{
			float: left;
			padding: 3%;
			display: none;
			max-width: 40%;
			min-width: 250px;
			border: 1px solid #32323214;
		}
		.1person {
			padding-top:100px;
			min-width: 90%;
		}
		.p1{
			width: 40%;
			text-align: center;
			float: left;
			padding-left: 50px;
			margin-top: 20px;
			margin-bottom: 40px;
		}
		.dontknow{
		width:100%;
		padding:8px 0px;
		}

		#q1null, #Aq1null, #Bq1null{
			padding:5% 30% !important;
		}
	}
</style>
<center>

	<div id="ppselector">How many people will be sleeping in the bed?</div>
	<?php echo '<form method="POST" id="main_form">'; // wp_nonce_field('user_data_s'); ?>

	<input type="hidden" name="user_data_s_r1" id="user_data_s_r1">
	<input type="hidden" name="ans1" id="ans1">

	<input type="hidden" name="user_data_s_r2" id="user_data_s_r2">
	<input type="hidden" name="ans2" id="ans2">

	<?php //submit_button('Send Data');
		echo '</form>'; 
	?>

	<div class="sbody">
	<div id="personNo">

		<div>
			<div class="p1">
				<center><span class="b_span" class="b_span" id="p1">One Person</span></center>
			</div>
			<div class="p1">
				<span class="b_span"  id="p2">Two People</span>
			</div>
		</div>

	</div>

	<div class="dbody">

		<div id="test_pod">
			<div class="1person">
				<table>
					<tr class="personid">
						<td class="td_area">One Person</td>
					</tr>
					<tr>
						<td class="td_area"  id="q1"> 
							I typically like my mattress to be:<br>
							<div id="q1e"></div>
							<div class="answer_span">
								<span class="b_span" id="q1s">Soft</span>
								<span class="b_span" id="q1m">Medium</span>
								<span class="b_span" id="q1f">Firm</span>
								<div class="dontknow">
									<span class="b_span" id="q1null">I Don't Know</span>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="td_area" id="q2">
							My preferred sleeping position is:<br><div id="q2e"></div>
							<div class="answer_span">
								<span class="b_span" id="q2b">Back</span>
								<span class="b_span" id="q2s">Stomach</span>
								<span class="b_span"  id="q2si">Side</span>
								<span class="b_span"  id="q2a">All Over the Place</span>
							</div>
						</td>
					</tr>
					<tr>
						<td class="td_area" id="q3">
							My body frame type is:<br><div id="q3e"></div>
							<div class="answer_span">
								<span class="b_span" id="q3s">Small</span>
								<span class="b_span" id="q3a">Average</span>
								<span class="b_span" id="q3l">Large</span>
							</div>
						</td>
					</tr>
					<tr>
						<td class="td_area" id="q4">
							My age is:<br><div id="q4e"></div>
							<div class="answer_span">
								<span class="b_span" id="q4s">Up to 30</span>
								<span class="b_span"  id="q4a">31-55</span>
								<span class="b_span"  id="q4l">56+</span>
							</div>
						</td>
					</tr>
					<tr>
						<td class="td_area" id="q5">
							I suffer from back / joint pain:<br><div id="q5e"></div>
							<div class="answer_span">
								<span class="b_span" id="q5s">Never</span>
								<span class="b_span"  id="q5a">Sometimes</span>
								<span class="b_span"  id="q5l">Often</span>
							</div>
						</td>
					</tr>
					<tr>
						<td class="td_area" id="q6">
							I prefer a healthier sleep environment:<br><div id="q6e"></div>
							<div class="answer_span">
								<span class="b_span" id="q6s">Yes</span>
								<span class="b_span"  id="q6a">No</span>
							</div>
						</td>
					</tr>
				</table>
			</div>

			<div class="2person" >
				<div class="person">
					<table>
						<tr class="personid">
							<td class="td_area">PERSON 1/ Left side</td>
						</tr>
						<tr>
							<td class="td_area"  id="Aq1">
								<div class="persondef">Left Person</div> <div class="personhiphen"> - </div> I typically like my mattress to be:<div id="Aq1e"></div>
								<div class="answer_span"><span class="b_span" id="Aq1s">Soft</span><span class="b_span"  id="Aq1m">Medium</span><span class="b_span"  id="Aq1f">Firm</span>
								<div class="dontknow"><span class="b_span" id="Aq1null">I Don't Know</span></div></div>
							</td>
						</tr>
						<tr>
							<td class="td_area" id="Aq2">
								My preferred sleeping position is:<br><div id="Aq2e"></div>
								<div class="answer_span">
									<span class="b_span" id="Aq2b">Back</span>
									<span class="b_span" id="Aq2s">Stomach</span>
									<span class="b_span"  id="Aq2si">Side</span>
									<div id="padda">
										<span class="b_span"  id="Aq2a">All Over the Place</span>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="td_area" id="Aq3">
								My body frame type is:<br><div id="Aq3e"></div>
								<div class="answer_span">
									<span class="b_span" id="Aq3s">Small</span>
									<span class="b_span"  id="Aq3a">Average</span>
									<span class="b_span"  id="Aq3l">Large</span>
								</div>
							</td>
						</tr>
						<tr>
							<td class="td_area" id="Aq4">
								My age is:<br><div id="Aq4e"></div>
								<div class="answer_span">
									<span class="b_span" id="Aq4s">Up to 30</span>
									<span class="b_span"  id="Aq4a">31-55</span>
									<span class="b_span"  id="Aq4l">56+</span>
								</div>
							</td>
						</tr>
						<tr>
							<td class="td_area" id="Aq5">
								I suffer from back / joint pain:<br><div id="Aq5e"></div>
								<div class="answer_span">
									<span class="b_span" id="Aq5s">Never</span>
									<span class="b_span" id="Aq5a">Sometimes</span>
									<span class="b_span" id="Aq5l">Often</span>
								</div>
							</td>
						</tr>
						<tr>
							<td class="td_area" id="Aq6">
								I prefer a healthier sleep<br>environment:<br><div id="Aq6e"></div>
								<div class="answer_span">
									<span class="b_span" id="Aq6s">Yes</span>
									<span class="b_span"  id="Aq6a">No</span>
								</div>
							</td>
						</tr>
					</table>
				</div>
				<div class="person">
					<table>
						<tr class="personid">
							<td class="td_area">PERSON 2/ Right side</td>
						</tr>
						<tr>
							<td class="td_area"  id="Bq1">
								<div style="">
									<div class="persondef">Right Person</div>
									<div class="personhiphen">-</div> 
									I typically like my mattress to be:<div id="Bq1e"></div>
								</div>
								<div class="answer_span">
									<span class="b_span" id="Bq1s">Soft</span>
									<span class="b_span"  id="Bq1m">Medium</span>
									<span class="b_span"  id="Bq1f">Firm</span>
									<div class="dontknow">
										<span class="b_span" id="Bq1null">I Don't Know</span>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="td_area" id="Bq2">
								My preferred sleeping position is:<br><div id="Bq2e"></div>
								<div class="answer_span">
									<span class="b_span" id="Bq2b">Back</span>
									<span class="b_span"  id="Bq2s">Stomach</span>
									<span class="b_span"  id="Bq2si">Side</span>
									<div id="padda">
										<span class="b_span"  id="Bq2a">All Over the Place</span>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="td_area" id="Bq3">
								My body frame type is:<br><div id="Bq3e"></div>
								<div class="answer_span">
									<span class="b_span" id="Bq3s">Small</span>
									<span class="b_span"  id="Bq3a">Average</span>
									<span class="b_span"  id="Bq3l">Large</span>
								</div>
							</td>
						</tr>
						<tr>
							<td class="td_area" id="Bq4">
								My age is:<br><div id="Bq4e"></div>
								<div class="answer_span">
									<span class="b_span" id="Bq4s">Up to 30</span>
									<span class="b_span"  id="Bq4a">31-55</span>
									<span class="b_span"  id="Bq4l">56+</span>
								</div>
							</td>
						</tr>
						<tr>
							<td class="td_area" id="Bq5">
								I suffer from back / joint pain:<br><div id="Bq5e"></div>
								<div class="answer_span">
									<span class="b_span" id="Bq5s">Never</span>
									<span class="b_span"  id="Bq5a">Sometimes</span>
									<span class="b_span"  id="Bq5l">Often</span>
								</div>
							</td>
						</tr>
						<tr>
							<td class="td_area" id="Bq6">
								I prefer a healthier sleep<br>environment:<br><div id="Bq6e"></div>
								<div class="answer_span">
									<span class="b_span" id="Bq6s">Yes</span>
									<span class="b_span"  id="Bq6a">No</span>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div><br>

		<div id="result_pod"></div>

	</div>

	<div class="submit1">
		<input type="button" value="SUBMIT" id="submit1"></div>
	</div>

	<script type="text/javascript">
		jQuery(document).on('click', '#signup_submit', function(){jQuery("#signup_form").hide("slow");
		jQuery("#actual_results").show("slow");});
	</script>