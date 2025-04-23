/*
Template Name: Mus Custom Template
Author: Mus
Version: 1.0.0.
Website: -
Contact: muhamadmustaqim.mzln@gmail.com
File: Custom Js File
*/


function triggerSwal(thisObject) {
    console.log(thisObject, thisObject.hasClass('btn-submit')); // Corrected class check
    if (thisObject.hasClass('btn-submit')) {  // No dot here
        Swal.fire({
            title: 'Hantar maklumat?', // Add language translation if needed
            text: 'Test',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya',
        }).then((result) => {
            if (result.isConfirmed) {
                // Optional: submit a form or do an AJAX call
                console.log('Confirmed!');
            }
        });
    }
}

$(document).ready(function() {
    $(document).on('click', '.btn-submit, .btn-delete', function(e) {
        e.preventDefault();

        console.log('btn submit triggered');
        triggerSwal($(this)); // Pass the clicked element
    });
});
