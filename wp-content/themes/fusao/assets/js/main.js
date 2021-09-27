jQuery(function($) {
    $('body, .navbar-collapse form[role="search"] button[type="reset"]').on('click keyup', function(event) {
        console.log(event.currentTarget);
        if (event.which == 27 && $('.navbar-collapse form[role="search"]').hasClass('active') ||
            $(event.currentTarget).attr('type') == 'reset') {
            closeSearch();
        }
    });

    function closeSearch() {
        var $form = $('.navbar-collapse form[role="search"].active');
        $form.find('input').val('');
        $form.removeClass('active');
    }

    // add click on the document for "submit" type button
    $(document).on('click', '.navbar-collapse form[role="search"]:not(.active) button[type="submit"]', function(event) {
        // prevent default functionality for button
        event.preventDefault();
        var $form = $(this).closest('form'),
            $input = $form.find('input');

        // make the class active (show it)
        $form.addClass('active');

        // put the cursor on the input box
        $input.focus();

    });
});