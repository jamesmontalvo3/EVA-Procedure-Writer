$(document).ready(function(){
	$("#tabs").tabs();

	$("button").button();

	$("#themeswitcher").change(function(){
		$("#jquery-ui-css").attr("href", $(this).find("option:selected").val() );
	});
});
