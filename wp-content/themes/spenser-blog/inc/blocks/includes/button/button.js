( function( api ) {

	if( api && api.Section ) {

		// Extends our custom "upgrade-to-pro" section.
		api.sectionConstructor['button'] = api.Section.extend( {

			// No events for this type of section.
			attachEvents: function () {},

			// Always make the section active.
			isContextuallyActive: function () {
				return true;
			}
		} );
	}

} )( wp.customize );