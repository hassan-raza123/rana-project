function validateFormFields() {

    var valid = true;
    $("form").find('.my_danger_alert').remove();
    $(".valid_control:visible").each(function () {
        if ($(this).val() == "") {
            $(this).closest("div").find(".my_danger_alert").remove();
            $(this)
            .closest("div")
            .append('<div class="my_danger_alert mb-2">This field is required</div>');
            valid = false;
        }
        else {
            $(this).closest("div").find(".my_danger_alert").remove();
        }
    });
    if (!valid) {
        $("html, body").animate(
            {
                scrollTop: $(".alert-danger:first").offset().top-80,
            },
            100
        );
    }
    return valid;

}



function onClickSubmitButton($btn_class, $form_class)
{
    $(document).on("click", $btn_class, function(e){
        e.preventDefault();
        if(validateFormFields())
        {
            $($form_class).submit();
        }
        
    });
}


function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}