/* CUSTOM JS */
$(function () {
    BASEURL = window.location.origin + "/guia-medico/admin/";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /* 
     * SAVE PROVIDER GUIDE 
    */
    $("#btn-save").click(function () {
        console.log('Click');
        var form = $("#form-new-provider")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        } else {
            var formData = form.serialize();
            //console.log(formData);
            $.ajax({
                url: BASEURL + 'guia/operadora/store',
                type: "POST",
                data: formData,
                beforeSend: function (data) {                
                    $.blockUI({
                        message: "<h3>processando...</h3>",
                        css: {
                            border: "none",
                            padding: "15px",
                            backgroundColor: "#000",
                            "-webkit-border-radius": "10px",
                            "-moz-border-radius": "10px",
                            opacity: 0.5,
                            color: "#fff",
                        },
                    });
                },
                success: function (data) {
                    $.unblockUI();      
                    console.log(data);          
                    if (data === 'TRUE') {                    	
                        Swal.fire(
                            "Parabéns",
                            "Cadastro realizado com sucesso",
                            "success"
                        );
                        $(location).attr('href', BASEURL + 'guia/operadora');
                    } else if (data === 'FALSE') {
                        $.unblockUI();
                        Swal.fire(
                            "Poxa :(",
                            "Dados não cadastrados, por favor, tente novamente",
                            "warning"
                        );
                    }
                },
                error: function (data) {
                    $.unblockUI();
                    Swal.fire(
                        "Atenção",
                        "Erro na operação, consulte o administrador do sistema!",
                        "error"
                    );
                },
            }); 
        }
        form.addClass('was-validated');
    });

    /* 
     * SAVE PROVIDER GUIDE 
    */
    $("#btn-update").click(function () {
        console.log('Click');
        var form = $("#form-new-provider")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        } else {
            var formData = form.serialize();
            //console.log(formData);
            $.ajax({
                url: BASEURL + 'guia/operadora/store',
                type: "POST",
                data: formData,
                beforeSend: function (data) {                
                    $.blockUI({
                        message: "<h3>processando...</h3>",
                        css: {
                            border: "none",
                            padding: "15px",
                            backgroundColor: "#000",
                            "-webkit-border-radius": "10px",
                            "-moz-border-radius": "10px",
                            opacity: 0.5,
                            color: "#fff",
                        },
                    });
                },
                success: function (data) {
                    $.unblockUI();      
                    console.log(data);          
                    if (data === 'TRUE') {                    	
                        Swal.fire(
                            "Parabéns",
                            "Cadastro realizado com sucesso",
                            "success"
                        );
                        $(location).attr('href', BASEURL + 'guia/operadora');
                    } else if (data === 'FALSE') {
                        $.unblockUI();
                        Swal.fire(
                            "Poxa :(",
                            "Dados não cadastrados, por favor, tente novamente",
                            "warning"
                        );
                    }
                },
                error: function (data) {
                    $.unblockUI();
                    Swal.fire(
                        "Atenção",
                        "Erro na operação, consulte o administrador do sistema!",
                        "error"
                    );
                },
            }); 
        }
        form.addClass('was-validated');
    });






    /* LOADING ADDRESS */
    $(".btn-contact").on('click', function () {
        var cd_prestador = 'cd-prestador=' + $(this).attr('data-id');
        //console.log(cd_prestador);
        $.ajax({
            type: "POST",
            url: BASEURL + "operadora/search-address",
            data: cd_prestador,
            beforeSend: function (data) {
                $.blockUI({
                    message: "<h3>processando...</h3>",
                    css: {
                        border: "none",
                        padding: "15px",
                        backgroundColor: "#000",
                        "-webkit-border-radius": "10px",
                        "-moz-border-radius": "10px",
                        opacity: 0.5,
                        color: "#fff",
                    },
                });
            },
            success: function (data) {
                $.unblockUI();
                if (data) {
                    $(".open-modal-contact").click();
                    $("#modal-info-contact .return").html(data[0]['endereco']);
                } else {
                    $.unblockUI();
                    Swal.fire(
                        "Atenção",
                        "Nenhum endereço encontrado",
                        "warning"
                    );
                }
            },
            error: function (data) {
                $.unblockUI();
                Swal.fire(
                    "Atenção",
                    "Erro na operação, consulte o administrador do sistema!",
                    "warning"
                );
            },
        });
    });

});