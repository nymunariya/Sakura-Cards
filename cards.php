<?php 		
require_once('cards_db.php'); 
$SakuraDeck = new SakuraDeck;


function choose_card( $num = "", $pre_card = "" ) {
	//global $cards_select;
	global $SakuraDeck;
	
	$cards_list = "<select name=\"card_" . $num . "\">\n";//" . $num . "
	foreach( $SakuraDeck->cards as $card ) {
		$cards_list .= "<option value=\"" . $card['id'] . "\"";
		if( $card['id'] == $pre_card ) $cards_list .= " selected";
		$cards_list .= ">The " . $card['name'] . "</option>\n";
	}
	
	$cards_list .= "</select>";
	
	return $cards_list;
} ?>
<html>
	<head>
    <title>Sakura Card Helper &laquo; Cards</title>
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
		
		<h2>Cards</h2>
		<div id="cardlist" class="showall">
			<?php
				foreach( $SakuraDeck->cards as $card ) {
				$position = explode(",",$card['img']);
			?>
			<div class="card_hide" id="<?php echo( $card['id'] ); ?>" style="">
				<!--<img src="CCS_Sakura_Card01.jpg" width="60" style="float: left;" alt="The <?php echo( $card['name'] ); ?>" title="The <?php echo( $card['name'] ); ?>" />-->
				<div class="card_img" style="width: 59px; height: 136px; float: left; background: url('CCS-SakuraCards.png'); background-position-x:-<?php echo( $position[0] ); ?>px; background-position-y:-<?php echo( $position[1] ); ?>px;">&nbsp;</div>
				<span class="title"><h3>The <?php echo( $card['name'] ); ?></h3></span><br />
				<span class="summary"><?php echo( $card['summary'] ); ?></span>
			</div>
		<? } ?>							
	</body>
</html>