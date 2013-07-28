$(document).ready(function(){
	$("#tabs").tabs();

	$("button").button();

	$("#themeswitcher").change(function(){
		$("#jquery-ui-css").attr("href", $(this).find("option:selected").val() );
	});

	$("#raw-to-display").click(function () {
		var html = epw.parse(
			$("#raw textarea").first().val()
		);

		$("#display").html( html );

		$("#tabs").tabs("option", "active", 2);
	});
});
