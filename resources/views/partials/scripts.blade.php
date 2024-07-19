<!-- JS Dependencies -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            const passwordField = $('#show_hide_password input');
            const icon = $('#show_hide_password i');
            if (passwordField.attr("type") === "text") {
                passwordField.attr('type', 'password');
                icon.addClass("bx-hide").removeClass("bx-show");
            } else {
                passwordField.attr('type', 'text');
                icon.removeClass("bx-hide").addClass("bx-show");
            }
        });
    });
</script>
