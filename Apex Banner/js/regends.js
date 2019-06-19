$( document ).ready( function() {
        var jbOffset = $( '.regends' ).offset();
        $( window ).scroll( function() {
          if ( $( document ).scrollTop() > jbOffset.top ) {
            $( '.regends' ).addClass( 'jbFixed' );
            
          }
          else {
            $( '.regends' ).removeClass( 'jbFixed' );
          }
        });
        } );