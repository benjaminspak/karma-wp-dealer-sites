<?php
	/*
		Template Name: Service Template
	*/
get_header(); ?>

	<div class="contactPageMain pageCenter">
<?php while(have_posts()) {the_post(); ?>
<div class="titleArea">
    <div class="title1"><h2><?php the_title(); ?></h2></div>
    <div class="vert-middle">Karma is committed to providing expert service for all of your needs.  Our trained technicians understand the Karma brand and have the necessary skills to complete any repair.  Please call us or stop by and visit.</div>
</div>
<hr>
<p><?php the_content(); ?></p>

<?php
	}
?>
        </div>

<?php if (isset($_GET['stocknum'])) { ?>
	<script>


		document.getElementById('messagebox').textContent = "I'm interested in Stock # <?php print($_GET['stocknum']); ?>";
	</script>
<?php } ?>

<?php if (isset($_GET['testdrive'])) { ?>
	<script>
		document.getElementById('messagebox').textContent = "I’m interested in scheduling a test drive.";
	</script>
<?php } ?>

<?php
	include(locate_template('template_part/map.php'));
?>

<?php
	get_footer();
?>

