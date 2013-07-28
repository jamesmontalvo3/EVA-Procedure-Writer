window.epw = {

	currentStepNumber : 1,

	getCurrentStepNumber : function () {
		return this.currentStepNumber++;
	},

	/** This is a test
	 *
	 **/
	parse : function (input) {

		var output = '';
		this.tokens = input.split("\n");

		for (var line=0; line<this.tokens.length; line++) {

			if (this.tokens[line].trim() != '')
				output += this.handleList( line );

		}

		return output;

	},

	handleList : function(lineNum) {

		var line = this.tokens[lineNum];

		if ( line[0] == "#" ) {

			return "<div>" + this.getCurrentStepNumber() + ') ' + line.substring(1) + "</div>";

		}

		return "";

	}

}