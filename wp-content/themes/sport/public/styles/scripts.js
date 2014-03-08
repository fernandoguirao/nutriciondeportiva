var $j, home;
$j = jQuery;
home = $j('.home');

$j(document).ready(function(){
	if(home.length > 0) {
		alert('jlñ');
		$j('.entrada').removeClass('entrada');
	}
	return;
});

