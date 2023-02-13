// Preloader
jQuery(".pa-ellipsis").fadeOut(), jQuery(".pa-preloader").delay(500).fadeOut("500");

// Ck editor
if($('#description').length > 0){
    CKEDITOR.replace( 'description' );
}
// Ck editor 
if($('#HCKEditor1').length > 0){
    CKEDITOR.replace( 'HCKEditor1' );
}
// Ck editor 
if($('#HCKEditor2').length > 0){
    CKEDITOR.replace( 'HCKEditor2' );
}
// Ck editor 
if($('#HCKEditor3').length > 0){
    CKEDITOR.replace( 'HCKEditor3' );
}
// Ck editor 
if($('#HCKEditor4').length > 0){
    CKEDITOR.replace( 'HCKEditor4' );
}
// Ck editor 
if($('#ckFaq').length > 0){
    CKEDITOR.replace( 'ckFaq' );
}
// Ck editor 
if($('#ckPrivacyPolicy').length > 0){
    CKEDITOR.replace( 'ckPrivacyPolicy' );
}
// Ck editor 
if($('#ckTermsOfUse').length > 0){
    CKEDITOR.replace( 'ckTermsOfUse' );
}


// Invoice Print
function myPrintFunction(){
  window.print();
}

//Remove Select Box Duplicates
var seen = {};
$('#commonSelect option').each(function() {
    var txt = $(this).val();
    if (seen[txt]){
        $(this).remove();
    }else{
        seen[txt] = true;
    }
});

// Data Delete Btn Sweet Alert (Delete Method)
$('.data-delete-btn').on('click', function(e){
    e.preventDefault();
    swal({
        title: "Careful!",
        text: "Are you sure?",
        icon: "warning",
        dangerMode: true,
        buttons: {
          cancel: "Exit",
          confirm: "Confirm",
        },
    })
    .then ((willDelete) => {
        if (willDelete) {
           $(this).closest("form").submit();
        }
    });
});
// Data Delete Btn Sweet Alert (Get Method)
$('.data-delete-btn-label').on('click', function(e){
    e.preventDefault();
    swal({
        title: "Careful!",
        text: "Are you sure?",
        icon: "warning",
        dangerMode: true,
        buttons: {
          cancel: "Cancel",
          confirm: "Confirm",
        },
    })
    .then ((willDelete) => {
        if (willDelete) {
           $(this).parent('.data-item-remove-btn')[0].click();
        }
    });
});

// Sidebar Collapse Show Hide On Url Request Basis 
$('.vertical-nav-menu li a.mm-active').closest('.sm-link').addClass('mm-active');

$('#SMDataTable').DataTable( {
    // "order": [[ 0, "desc" ]]
});


// Product Multiple Picture Upload with Default Check
$(document).on('click','.p-image-item-remove-btn', function(){
    $(this).closest('.product-cover-photo').remove();
});
$(document).on('click','.p-image-new-item-add-btn', function(){
    $(this).closest('.product-cover-photo-items-wrapper').append('<div class="product-cover-photo">\
        <input class="p-cover-photo" type="file" accept=".jpg,.png,.jpeg" name="product_image[]" required>\
        <div class="check-wrapper">\
            <input class="product-cover-default-checkbox" type="checkbox" name="default_image[]" checked value="0">\
            <div class="box"></div>\
            <label>Make As Cover</label>\
        </div>\
        <div class="p-image-item-remove-btn"><i class="fas fa-times"></i></div>\
    </div>');
});

// Uncheck other chekbox if checked in one
$('.product-cover-photo .check-wrapper .box').css('opacity','0');
$('.product-cover-photo .check-wrapper').find('.product-cover-default-checkbox').val(1)
$(document).on('click', '.product-cover-photo .check-wrapper .box', function(){
    $(this).closest('.product-cover-photo-items-wrapper').find('.check-wrapper .box').each(function(){
        $(this).css('opacity','1');
    });
    $(this).css('opacity','0');

    $(this).closest('.product-cover-photo-items-wrapper').find('.product-cover-default-checkbox').each(function(){
        $(this).val(0);
    });
    $(this).closest('.check-wrapper').find('.product-cover-default-checkbox').val(1);
});

// Remove Custom toastr message
$(document).on('click', '.variation-data-toastr-msg .removeBtn', function(e){
    $(this).closest('.variation-data-toastr-msg').remove();
});