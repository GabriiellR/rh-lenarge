class Helper {

    CarregarDatatables(elemento, settings) {

        const datatable = new DataTable(elemento, {
            "dom": 'lBfrtip',
            "paging": true,
            "searching": true,
            "responsive": true,
            "pagingType": "full_numbers",
            "pageLength": 10,
            // "rowCallback": function (row, data) {
            //     $('select').formSelect();
            // },
            "ajax": settings.ajax,
            "data": settings.data,
            "columns": settings.columns,
            "lengthMenu": [
                [10, 25, 50, 100],
                [10, 25, 50, 100]
            ],
            "lengthChange": true,
            "order": [
                [0, "asc"]
            ],
            "buttons": [
                {
                    "text": "Novo",
                    "className": "btn btn-green-jungle btn-novo",
                    "action": function (e, dt, node, config) {

                        if (settings.urlNovoRegistro) {
                            window.location.href = settings.urlNovoRegistro;
                        } else if (settings.functionNovoRegistro && typeof settings.functionNovoRegistro === 'function') {
                            settings.functionNovoRegistro();
                        }
                    }
                },
                {
                    "extend": "excel",
                    "className": "btn btn-primary"
                },
                {
                    "text": "Recarregar",
                    "className": "btn btn-primary",
                    "action": function (e, dt, node, config) {
                        dt.ajax.reload();
                    }
                }
            ],
            "language": {
                "url": "../../js/datatables/pt_BR.json"
            }
        })


        if (!settings.urlNovoRegistro && !(settings.functionNovoRegistro && typeof settings.functionNovoRegistro === 'function')) {
            datatable.buttons([0, '0']).disable();
        }

        $(`${elemento} tbody`).on('click', 'tr', function () {
            var rowData = datatable.row(this).data();
            var id = rowData.id;

            if (settings.field) {
                id = rowData[settings.field];
            }

            if (settings.urlDetalhes) {
                var endereco = `${settings.urlDetalhes}/${id}`;
                window.location.href = endereco;
            } else if (settings.functionDetalhes && typeof settings.functionDetalhes === 'function') {
                settings.functionDetalhes(rowData);
            }
        });

        return datatable;
    }

    CarregarSelect2(idElemento, dropdownParent) {

        if (dropdownParent == undefined) {
            dropdownParent = "";
        }

        const select2 = $(idElemento).select2({
            closeOnSelect: true,
            dropdownAutoWidth: true,
            dropdownParent: dropdownParent
        });

        return select2;
    }

    PreencherDados(response) {
        const funcoesPorTipoCampo = {
            text: function (objeto, valor, response) {
                objeto.html(valor);
            },
            image: function (objeto, valor) {
                objeto.attr('src', `data:image/png;base64,${valor}`);
            },
            input: function (objeto, valor) {
                objeto.val(valor);
            },
            select: function (objeto, valor) {
                objeto.val(valor).change();
            },
            dinheiro: function (objeto, valor) {
                var valorMoeda = parseFloat(valor).toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
                objeto.val(valorMoeda).html(valorMoeda);
            },
            data: function (objeto, valor) {
                objeto.val(valor).html(valor);
            },
            checkbox: function (objeto, valor) {
                objeto.prop('checked', !!valor);
            },
            radio: function (objeto, valor) {
                console.log(objeto);
                const valorCampo = objeto.val();
                objeto.prop('checked', valorCampo == valor);
            }
        };

        $('[data-field]').each(function () {

            var objeto = $(this);
            var campo = objeto.data('field');
            var valor = response[campo];
            var tipo = objeto.data('type');

            var funcao = funcoesPorTipoCampo[tipo];

            if (funcao) {
                funcao(objeto, valor, response);
            }
        });

    }

    MostrarAlerta(type, mensagem, callback){
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didClose: callback
          });
          Toast.fire({
            icon: type,
            title: mensagem
          });

          return Toast;
    }
}