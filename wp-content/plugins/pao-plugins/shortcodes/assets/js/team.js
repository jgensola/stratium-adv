jQuery( function( $ ) {

    $(window).on('load resize', function() {
        // make square images for inline team
        makeSquareImages( $('.team-members-wrap.inline .team-member:not(.height_class)') );
    });

    function makeSquareImages( $imagesSelector ) {
        var $imagesWidth = $imagesSelector.innerWidth();
        $imagesSelector.each( function() {
            $(this).innerHeight( $imagesWidth );
        });
    }
});