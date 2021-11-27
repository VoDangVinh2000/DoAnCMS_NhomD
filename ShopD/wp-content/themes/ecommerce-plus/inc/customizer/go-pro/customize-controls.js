( function( api ) {

	// Extends our custom "one page" section.
	api.sectionConstructor['ecommerce-plus'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
