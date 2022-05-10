
// Text animations 
var options = {
    strings: ['Web Development Services', 'Digital Marketing Services', 'Content Writing Services', 'Graphic Designing Services', 'Software Services'],
    typeSpeed: 80,
    backSpeed: 40,
    loop: true,
};

var typed = new Typed('.typing', options);

// Owl carousel 
$(document).ready(function () {

    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        singleItem: true,
        items: 1,
        rewindNav: true,
        autoPlay: true,
        slideSpeed: 300,
        paginationSpeed: 500,
        singleItem: true,
        // dotsEach: 2,
    });

});

function openEnquiryForm() {
    document.body.classList.add("showLoginForm");
}
function closeLoginForm() {
    document.body.classList.remove("showLoginForm");
}

// Display an info toast with no title
function submitContactForm() {

    let name = $('#form_name').val();
    let email = $('#form_email').val();
    let phone = $('#form_phone').val();
    let subject = $('#form_subject').val();
    let message = $('#form_message').val();
    let field_error = $('#field_error').val();

    if (name == "" || email == "" || phone == "" || subject == "" || message == "") {
        $('#field_error').html('*All fields are required')
    }
    else {
        $('#field_error').html('')
        $.ajax({
            type: 'POST',
            url: 'manage_forms.php',
            data: `name=${name}&email=${email}&phone=${phone}&subject=${subject}&message=${message}&formtype=contactusform&submit`,
            success: function (result) {
                if (result == 'submit') {
                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-center",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };
                    toastr["success"]("Thank you for contacting us. Our team will reach you soon!", "");
                    $('#contactForm').hide();
                    $('#thankyou-image').show();
                }
            }
        });
    }
}

// Display an info toast with no title
function submitEnquiry() {

    let name = $('#e_name').val();
    let email = $('#e_email').val();
    let phone = $('#e_phone').val();
    if (name == "" || email == "" || phone == "") {
        $('#field_error').html('*All fields are required')
    }
    else {
        $('#field_error').html('')
        $.ajax({
            type: 'POST',
            url: 'manage_forms.php',
            data: `name=${name}&email=${email}&phone=${phone}&formtype=enquiryform&submit`,
            success: function (result) {
                if (result == 'submit') {
                    closeLoginForm();
                    $('input').val('');
                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-center",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };
                    toastr["success"]("Thank you for enquiry. Our team will reach you soon!", "");

                }
            }
        });
    }
}

$(document).ready(function () {
    var url = window.location;
    $('ul.nav a[href="' + url + '"]').parent().addClass('active');
    $('ul.nav a').filter(function () {
        return this.href == url;
    }).parent().addClass('active');
});