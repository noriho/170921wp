<footer>
<div class="container">
	<small>
		Copyright &copy; <?php bloginfo( 'name' ); ?>
	</small>
</div>
echo "test";

<?php dynamic_sidebar('footerbar');  ?>
<?php dynamic_sidebar('footer_left');  ?>
<?php dynamic_sidebar('footer_right');  ?>
</footer>


<?php wp_footer(); ?> 
</body>
</html>