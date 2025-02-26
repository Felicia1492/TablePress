jQuery(document).ready(function($) {
    $('a').filter(function() {
        return this.hostname && this.hostname !== location.hostname;
    }).on('click', function(e) {
        e.preventDefault();
        const link = $(this).attr('href');

        Swal.fire({
            title: 'You are leaving our website',
            text: "Do you want to continue to " + link + "?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, proceed',
            cancelButtonText: 'Cancel',
        }).then((result) => {
            if (result.isConfirmed) {
                window.open(link, '_blank');
            }
        });
    });
});
