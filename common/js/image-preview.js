/**
 * UPLOAD IMAGE AND DISPLAY PREVIEW TO IMG TAG
 */
$('input[type=file]').change(function(event) {
    if (!this.files || !this.files[0]) {
        return;
    }

    var input = $(this);
    if (!!this.files && !!this.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#pre' + input.prop('id').substr(4, 2)).prop('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    }
});
