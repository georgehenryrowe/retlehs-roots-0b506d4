<footer id="content-info" class="container" role="contentinfo">
  <?php dynamic_sidebar('sidebar-footer'); ?>
  <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
	  <!-- Highlighting page -->
	<script type="text/javascript">
		// CORINS
	var uri = encodeURI(window.location.href).toLowerCase();
	$(uri).addClass('current')
	</script>

	<script type="text/javascript">
	var anchors  = document.getElementsByTagName("a");
	var uri = encodeURI(window.location.href).toLowerCase();
	for(var i=0, n=anchors.length; i<n; ++i) {
		if(uri==encodeURI(anchors[i].href).toLowerCase()) {
			anchors[i].className += " current ";
			break;
			}
		}
	</script>
</footer>

<?php wp_footer(); ?>