
tippy('[data-tippy-content]');
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#profile_iamge_preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$( document ).ready(function() {
    setTimeout(() => {
        $('.loader').fadeOut('fast');
    }, 2000);
});

$('#profile_image').change(function(){
    readURL(this);
    var fd = new FormData(document.getElementById("profile_image_upload_form"));
    $.ajax({
        url: "profile",
        type: "POST",
        data: fd,
        processData: false,  // tell jQuery not to process the data
        contentType: false   // tell jQuery not to set contentType
        }).done(function () {
            location.reload();
        })
});