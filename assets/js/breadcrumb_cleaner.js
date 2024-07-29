( function( $ ) {
	$( document ).ready( function() {
		$.each( $( 'nav >ul >li >a' ), function( index, value ) {
			var breadcrumb = $( value ).html();
			if ( breadcrumb !== 'Home' ) {
				breadcrumb = decodeURI( breadcrumb );
				breadcrumb = breadcrumb.replace( /-/g,' ' );
				breadcrumb = breadcrumb.replace( /ae/g, 'ä' );
				breadcrumb = breadcrumb.replace( /oe/g, 'ö' );
				breadcrumb = breadcrumb.replace( /ue\s+/g, 'ü' );
				$( value ).html( breadcrumb );
			}
		} );
	} );
} )( jQuery );
