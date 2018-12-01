<!DOCTYPE html>
	<html>
		<head>
	  	<meta charset="UTF-8" />
      <title>Sakura Card Helper</title>
			<link rel="stylesheet" href="sakura.css" />
	</head>
	<body>
		<main>
			<section>
				<article id="nav" class="index">
						<h2>Clow/Sakura Card Divination Helper</h2>
						<p>
							<a href="cards.php">Sakura<br />cards</a>
							<a href="shuffling.php">Shuffling<br />instructions</a>
							<a href="reading.php">Reading<br />helper</a>
							<a href="https://github.com/nymunariya/Sakura-Cards/">Github<br />Repository</a>
						</p>
				</article>
				<article id="cardslist" class="Sakura" style="position: relative; z-index: 1;">
						<p>As a fan of the anime &amp; manga <a href="https://en.wikipedia.org/wiki/Cardcaptor_Sakura">CardCaptor Sakura</a> from <a href="https://en.wikipedia.org/wiki/Clamp_(manga_artists)">Clamp</a>, I was estatic to find out that I could buy ACTUAL CLOW CARDS!  Unfortunately, the instructions I received were not in English.  After scouring the internet, I gatherd all the translations that I could and put together this online tool.  Everything is coded in HTML, JS, and PHP.  If you would like to copy these pages for your own website, or even improve on them, I have uploaded the source code to <a href="https://github.com/nymunariya/Sakura-Cards/">Github</a>. If you have any questions regarding these pages, or have any requests, feel free to get in touch with me via Twitter @<a href="http://www.twitter.com/nymunariya">Nymunariya</a>.</p>
						<p>If you have an iOS device, you can also play around with the cards and make your own readings with the <a href="sakura_drag.php">Draggable Sakura Cards</a>!</p>
						<p>When you use the reading helping, cards will be randomised by JavaScript, you can have test readings.  The results of those or your actual readings, can be saved and shared with others by copying the URL of the reading.</p>
						<p>If you do own Crow or Sakura Cards, they should be kept in the north "end" of your house/room and outside of sunlight.</p>
						<p>Clow &amp; Sakura card pictures ripped from "Card Captor Sakura: Sakura Card-hen Sakura Card to Tomodachi (GBA)" by Nightmare.</p>
						<div id="index_flip">
							<div id="magiccircle" class="spin"></div>
							<div class="cardflip" ontouchstart="this.classList.toggle('hover');">
								<div class="cardsflip">
									<div id="back" class="card_img" style="background-position: -5px -3px;"></div>
									<div id="front" class="card_img" style="background-position: -626px -587px;"></div>
								</div>
							</div>
						</center>
						<br clear="both" />
				</article>
			</section>
			<footer>
				<p>Copyleft Nymunariya | Cards ripped by Nightmare</p>
			</footer>
		</main>
	</body>
</html>
