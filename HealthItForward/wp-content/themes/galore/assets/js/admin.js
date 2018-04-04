jQuery(document).ready(function($) {

    $(document).on("click", ".galore-accordion", function (e) {
        e.preventDefault();
        var $button = $(this);

        $button.next('.galore-panel').slideToggle();
    
    });

    function galore_contentTypeChange() {
        $( '.content-type' ).on( 'change', function() {
            var $this = $( this );
            var parent = $this.parent().parent();
            var block = parent.find( '.block' );
            var same = parent.find( '.'+ $this.val() );
            block.removeClass( 'block' ).addClass( 'none' );
            same.removeClass( 'none' ).addClass( 'block' );
        } );
    }
    galore_contentTypeChange();

    function galore_widget_chosen() {
        $(".galore-widget-chosen-select").chosen({
            width: "100%"
        });
    }
    galore_widget_chosen();

    $(document).on('widget-updated widget-added', function(){

        galore_widget_chosen();

        galore_contentTypeChange();
    });
});
