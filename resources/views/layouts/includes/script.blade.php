<!-- all js here -->
<!-- jquery latest version -->
<script src="/theme/js/vendor/jquery-1.12.0.min.js"></script>
<!-- bootstrap js -->
<script src="/theme/js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="/theme/js/owl.carousel.min.js"></script>
<!-- meanmenu js -->
<script src="/theme/js/jquery.meanmenu.js"></script>
<!-- wow js -->
<script src="/theme/js/wow.min.js"></script>
<!-- jquery.parallax-1.1.3.js -->
<script src="/theme/js/jquery.parallax-1.1.3.js"></script>
<!-- jquery.countdown.min.js -->
<script src="/theme/js/jquery.countdown.min.js"></script>
<!-- jquery.flexslider.js -->
<script src="/theme/js/jquery.flexslider.js"></script>
<!-- chosen.jquery.min.js -->
<script src="/theme/js/chosen.jquery.min.js"></script>
<!-- jquery.counterup.min.js -->
<script src="/theme/js/jquery.counterup.min.js"></script>
<!-- waypoints.min.js -->
<script src="/theme/js/waypoints.min.js"></script>
<!-- plugins js -->
<script src="/theme/js/plugins.js"></script>
<!-- main js -->
<script src="/theme/js/main.js"></script>
<!-- datepicker js -->
<script src="/theme/js/bootstrap-datepicker.min.js"></script>
<!-- inputMask Jquery -->
<script src="/theme/js/jquery.inputmask.bundle.min.js"></script>
<script src="/theme/js/inputmask.numeric.extensions.js"></script>

<script type="text/javascript">
	$('#datepicker').datepicker({
	    format: 'yyyy-mm-dd',
	})

	$("#currency").inputmask({
/*	    'alias': 'numeric',
	    'rightAlign': false,
	    'suffix': " ₫",
	    'groupSeparator': '.',
	    'radixPoint': ',',
	    'autoGroup': true,*/
	    alias: 'numeric',
        rightAlign: false,
        digitsOptional: true,
      	radixPoint: ',',
        groupSeparator: '.',
        autoGroup: true,
        placeholder: '',
        removeMaskOnSubmit: true
  	});
</script>
