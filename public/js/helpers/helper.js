class Helper {

    CarregarDatatables(elemento, settings) {

      const datatable =  new DataTable(elemento, {
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


        // if (!settings.urlNovoRegistro && !(settings.functionNovoRegistro && typeof settings.functionNovoRegistro === 'function')) {
        //     // datatable.buttons([0, '0']).disable();
        // }

        // $(`#${elemento} tbody`).on('click', 'tr', function () {
        //     var rowData = datatable.row(this).data();
        //     var id = rowData.id;

        //     if (settings.field) {
        //         id = rowData[settings.field];
        //     }

        //     if (settings.urlDetalhes) {
        //         var endereco = `${settings.urlDetalhes}?id=${id}`;
        //         window.location.href = endereco;
        //     } else if (settings.functionDetalhes && typeof settings.functionDetalhes === 'function') {
        //         settings.functionDetalhes(rowData);
        //     }
        // });

        return datatable;
    }

    CarregarSelect2Materialize(idElemento, listaDados, dropdownParent) {

        if (dropdownParent === undefined) {
            dropdownParent = "";
        }

        const elemento = document.querySelector(idElemento);
        const placeholder = this.dataset.placeholder;

        const select2 = new Select2(elemento, {
            placeholder: placeholder,
            closeOnSelect: true,
            dropdownParent: dropdownParent
        });

        listaDados.forEach(value => {
            const option = document.createElement('option');
            option.dataset.nome = value.nome;
            option.dataset.email = value.emailPrincipal;
            option.dataset.value = value.id;
            option.value = value.id;
            option.textContent = value.nome + (value.sobrenome ? ` ${value.sobrenome}` : "");
            elemento.appendChild(option);
        });

        const labels = document.querySelectorAll('label');
        labels.forEach(label => {
            label.classList.add('active');
        });

        return select2;
    }
}