<?php 	
	$shuffle = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51);
	
	shuffle( $shuffle );
	
	$array_invert = array("","checked");
	$array_inverted = array("","inverted");
	
	
	require_once('cards_db.php'); 
	$SakuraDeck = new SakuraDeck;
	
	function choose_card( $num = "", $pre_card = "" ) {
		//global $cards_select;
		global $SakuraDeck;
		
		$cards_list = "<select name='card_" . $num . "'>\n";
		
		foreach( $SakuraDeck->cards as $card ) {
			$cards_list .= "<option value=\"" . $card['id'] . "\"";
			if( $card['id'] == $pre_card ) $cards_list .= " selected";
			$cards_list .= ">The " . $card['name'] . "</option>\n";
		}
		
		$cards_list .= "</select>";
		
		return $cards_list;
	} 
	?>
<html>
	<head>
    <title>Sakura Card Helper &laquo; Reading</title>
    <link rel="stylesheet" href="sakura.css" />
	</head>
	<body>
		<h2>Clow/Sakura Card Divination Helper</h2>
		<p>Please choose one of the following:<br />
			<ul>
				<li><a href="shuffling.php">Shuffling instructions</a></li>
				<li><a href="reading.php">Reading helper</a></li>
				<li><a href="cards.php">View Sakura cards</a></li>
				<li><a href="https://github.com/nymunariya/Sakura-Cards/">Github Repository</a></li>
			</ul>
		</p>
		
		<h2>Reading Helper</h2>
		<p><center>Choose a spread: 
			<form>
				<select name="spread" <?php if( $_GET['spread'] == "" ) echo "onchange=\"document.getElementById('spread').setAttribute('class', this.options[this.selectedIndex].text);\""; ?>>
					<option value="">Select Spread</option>
					<?php
					foreach( $SakuraDeck->spreads as $spread ) {
						if( $_GET['spread'] != "" && $_GET['spread'] == $spread['id'] ) $selected = " selected";
						else $selected = "";
						echo( "<option value=\"" . $spread['id'] . "\"" . $selected . ">" . $spread['name'] . "</option>\n" );
					} ?>
				</select>
		    <input type="submit" value="Show" />
			</form>
		</center>
							
							<?php if( $_GET['spread'] == "" ) { ?>
							<p>
								<div id="spread" class="" style="">
									<?php for( $i = 52; $i > 0; $i-- ) { ?>
										<div class="card_img" id="card<?php echo $i; ?>" style="background-position: -5px -3px;"><?php echo $i; ?></div>
									<?php } ?>
								</div>
							</p>
							<?php }  else if( $_GET['spread'] == 2 ) { 
							
								$spread = $SakuraDeck->spreads[$_GET['spread']];
							?>
									<style>
										ol.cards li.position {
											min-height: 160px;
											clear: left;
											padding-bottom: 10px;
										}
										span.description {
											padding-top:  3px;
											position:  absolute;
										}
										
										.inverted {
										    -webkit-transform: rotate(180deg);
										    -moz-transform: rotate(180deg);
										    -o-transform: rotate(180deg);
										    -ms-transform: rotate(180deg);
										    transform: rotate(180deg);
										}
										
										.inverted span {
											position:absolute;
											margin-left:-10px;
										    -webkit-transform: rotate(180deg);
										    -moz-transform: rotate(180deg);
										    -o-transform: rotate(180deg);
										    -ms-transform: rotate(180deg);
										    transform: rotate(180deg);
										}
										.meaning_hidden {
											display: none;
										}
										.meaning {
										
										}
									</style>
							
							
							
								<p>
									<center>
										<h2><?php echo $spread['name']; ?> Reading</h2><br />
										<?php echo $spread['description']; ?>
									</center>
								</p>
									<div class="instructions">
									<p>
										<div id="spread" class="<?php echo $spread['name']; ?>" style="width: 100%;">
											<?php for( $i = 0; $i < 52; $i++ ) { 
												$invert = $array_inverted[array_rand($array_inverted)];
												$card_id = $shuffle[$i];
											?>
												<a class="card_img" href="http://nymunariya.org/projekte/sakura/reading.php?spread=2&card_0=<?php echo $SakuraDeck->cards[$card_id]['id']; ?>&inv_0=<?php echo $invert; ?>&meanings=Show+Card+Meanings" id="" style="position: absolute; left: <?php echo $i * 14; ?>px;; background-position: -5px -3px;" onclick="document.getElementById("card_meading_card<?php echo $SakuraDeck->cards[$card_id]['id']; ?>").className = "meaning";"></a>
											<?php } ?>
										</div>
									</p	
									
									<p id="method">
											<center><h3>Method</h3></center>
											<ol>
												<?php $methods = explode( "||", $spread['method'] );
													foreach( $methods as $method ) {
														echo "<li>" . $method . "</li>\n"; 
													} ?>
											</ol>
									</p>
							
							<p>&nbsp;</p>
								<form style="width: 600px; margin-left: auto;margin-right: auto;" >
							<p><center><b>What each card in their respective positions means:</b><br />use the checkboxes to indicate if a card if upside down</center>
									<input type="hidden" name="spread" value="<?php echo $_GET['spread']; ?>" />
									<span id="cards">
										<style>
											ol.cards li {
												margin-bottom: 5px;
											}
											ol.cards li select {
												float:  right;
											}
											ol.cards li input {
												float:  right;
											}
											ol.cards li span {
												width: 435px;
												display: inline-block;
											}
										</style>
										<ol class="cards"> 
											<?php $i = 0;
												$cards = explode( "||", $spread['cards'] );
												foreach( $cards as $card ) {
													echo "<li><span>" . $card . "</span><input type=\"checkbox\" name=\"inv_" . $i . "\" value=\"inverted\" " . $array_invert[array_rand($array_invert)] . " />" . choose_card( $i, $shuffle[$i] ) . "</li>\n"; 
												$i++;
												} ?>
										</ol>
									</span>
									<center> <input type="submit" name="meanings" value="Show Card Meanings" /></center>
									<br clear="both" />
							</p>
								</form>
							
							
							<?php } else { ?>
								<?php 
									$spread = $SakuraDeck->spreads[$_GET['spread']];
								?>
								<p>
										<center>
											<h2><?php echo $spread['name']; ?> Reading</h2><br />
											<?php echo $spread['description']; ?>
										</center>
									<?php if( $_GET['meanings'] == "" ) { ?>
									<div class="instructions">
										<?php if( $spread['img'] != "" ) { ?>
											<center><img src="<?php echo $spread['img']; ?>" /></center>
										<?php } else { ?>
											<div id="spread" class="<?php echo $spread['name']; ?>" style="">
												<?php for( $i = 1; $i < 52; $i++ ) { 
													if( $spread == 2 ) $select_id = 0;
													else $select_id = $i;
												?>
													<div class="card_img" id="card<?php echo $i; ?>" style="background-position: -5px -3px;" onclick="document.getElementById('card_<?php echo $select_id; ?>').value='<?php echo $shuffle[$i]; ?>'"><?php echo $i; ?></div>
												<?php } ?>
											</div>
										<?php } ?>
								</p>
								<p id="method">
										<center><h3>Method</h3></center>
										<ol>
											<?php $methods = explode( "||", $spread['method'] );
												foreach( $methods as $method ) {
													echo "<li>" . $method . "</li>\n"; 
												} ?>
										</ol>
								</p>
								<p>&nbsp;</p>
									<form style="width: 600px; margin-left: auto;margin-right: auto;" >
								<p><center><b>What each card in their respective positions means:</b><br />use the checkboxes to indicate if a card if upside down</center>
										<input type="hidden" name="spread" value="<?php echo $_GET['spread']; ?>" />
										<span id="cards">
											<style>
												ol.cards li {
													margin-bottom: 5px;
												}
												ol.cards li select {
													float:  right;
												}
												ol.cards li input {
													float:  right;
												}
												ol.cards li span {
													width: 435px;
													display: inline-block;
												}
											</style>
											<ol class="cards"> 
												<?php $i = 0;
													$cards = explode( "||", $spread['cards'] );
													foreach( $cards as $card ) {
														echo "<li><span>" . $card . "</span><input type=\"checkbox\" name=\"inv_" . $i . "\" value=\"inverted\" " . $array_invert[array_rand($array_invert)] . " />" . choose_card( $i, $shuffle[$i] ) . "</li>\n"; 
													$i++;
													} ?>
											</ol>
										</span>
										<center> <input type="submit" name="meanings" value="Show Card Meanings" /></center>
										<br clear="both" />
								</p>
									</form>
									<?php } else { ?>
								<p>
										<style>
											
											
										</style>
										<div id="spread" class="<?php echo $spread['name']; ?>" style="">
											<?php $i = 1;
												$spread_cards = explode( "||", $spread['cards'] );
												for( $i = 0; $i < $spread['cards_num']; $i++ ) {
												//foreach( $spread_cards as $spread_card ) {
													$position = explode(",",$SakuraDeck->cards[$_GET['card_' . $i]]['img']); ?>
												<div class="card_img  <?php echo $_GET['inv_' . $i] ; ?>" id="card<?php echo $i + 1; ?>" style="background-position: -<?php echo( $position[0] ); ?>px -<?php echo( $position[1] ); ?>px;"><span><?php echo $i + 1; ?></span></div>
												<?php } 
												?>	
										</div>
								</p>
									
									
								<p>
										<style>
											ol.cards li.position {
												min-height: 160px;
												clear: left;
												padding-bottom: 10px;
											}
											span.description {
												padding-top:  3px;
												position:  absolute;
											}
											
											.inverted {
											    -webkit-transform: rotate(180deg);
											    -moz-transform: rotate(180deg);
											    -o-transform: rotate(180deg);
											    -ms-transform: rotate(180deg);
											    transform: rotate(180deg);
											}
											
											.inverted span {
												position:absolute;
												margin-left:-10px;
											    -webkit-transform: rotate(180deg);
											    -moz-transform: rotate(180deg);
											    -o-transform: rotate(180deg);
											    -ms-transform: rotate(180deg);
											    transform: rotate(180deg);
											}
										</style>
										<ol class="cards"> 
											<?php $i = 0;
												$spread_cards = explode( "||", $spread['cards'] );
												foreach( $spread_cards as $spread_card ) {
													
													$position = explode(",",$SakuraDeck->cards[$_GET['card_' . $i]]['img']);
													?>
												<li class="position"><?php	echo $spread_card; 
													if( $_GET['inv_' . $i] == "inverted" ) echo( " (inverted)" );
												?>
													<ul>
														<li>
															<div class="card_img <?php echo $_GET['inv_' . $i] ; ?>" style="width: 59px; height: 136px; margin-right: 15px; float: left; background: url('CCS-SakuraCards.png'); background-position-x:-<?php echo( $position[0] ); ?>px; background-position-y:-<?php echo( $position[1] ); ?>px;">&nbsp;</div>
															<div class="title"><h2 style="text-align: left; display: inline;">The <?php echo( $SakuraDeck->cards[$_GET['card_' . $i]]['name'] ); ?></h2><span class="description">  <?php echo( $SakuraDeck->cards[$_GET['card_' . $i]]['summary'] ); ?></span></div>
														</li>
														
														<?php
															if( $_GET['inv_' . $i] == "inverted" ) { 
																echo( "<li><strong class=\"pink\">Card's Warning</strong>: " . $SakuraDeck->cards[$_GET['card_' . $i]]['warning'] . "</li>" );
															} else {
																echo( "<li><strong class=\"pink\">Card's Message</strong>: " . $SakuraDeck->cards[$_GET['card_' . $i]]['message'] . "</li>" );
															} ?>
													</ul>
												</li>
												<?php
												$i++;
												} ?>
										</ol>
								</p>
									<?php } ?>	
								<?php } ?>
								</div>
					
	</body>
</html>