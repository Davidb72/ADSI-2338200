Swal.fire({
    title: '<span class="alert__title">Welcome!</span>',
    /*html: '<b class="Pe">Menu Themes</b>',*/
    icon: 'success',
    confirmButtonText: '<p class="alert__continue">Continue</p>',
    footer: '<b class="Pa">Built by David Baron All rights reserved.©</b>',
    /*width: '50%',*/
    background: '#1E1E1E',
    backdrop: 'true',
    allowOutsideClick : false, //Para que no se cierre la ventana si le da click afuera
    

    //Input
    input: 'text',
    inputPlaceholder: 'Name',
    inputValue: ''
});