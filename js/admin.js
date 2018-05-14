function admin_click(id) {
	if (id==1) {
		$('#2').hide();
		$('#3').hide();
		$('#1').show();
	}
	else if (id==2) {
		$('#1').hide();
		$('#3').hide();
		$('#2').show();
	}
	else{
		$('#1').hide();
		$('#2').hide();
		$('#3').show();
	}
}