<?php get_header(); ?>
<?php  

/*
	Template Name: contact_page		
*/

?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<article>
						<div class="comment">
							Your email address will not be published. Required fields are marked *<br><br>
							<form>
								<div> Name * <input type="text" name="name" id="name"></div>
								<div> Email * <input type="email" name="email" id="email"></div>
								<div> Website <input type="url" name="website" id="website"></div>
								<div><textarea rows="10" name="comment" id="comment"></textarea></div>
								<div><input type="submit" name="submit" value="Submit"></div>
							</form>
						</div>
					</article>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Find Us</h2></div>
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/images/map.png"/>
							<p>Petru Zadnipru 15/2 Chisinau 2044, Republic of Moldova</p>
							<p>Freephone : +1 800 445 7880</p>
							<p>Telephone : +1 800 995 6880</p>
							<p>Fax : +1 800 465 1990</p>
							<p>Email : zerotheme@demolink.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>