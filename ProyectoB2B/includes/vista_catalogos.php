<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
</script>
<!-- DATATABLES -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
</script>
<!-- BOOTSTRAP -->
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
</script>
<script>
    $(document).ready(function () {
        $('#tabla_catalogo').DataTable({
            language: {
                processing: "Actualizando datos...",
                search: "Buscar&nbsp;:",
                lengthMenu: "Cantidad de datos a mostrar: _MENU_",
                info: "Hay un total de _TOTAL_ datos.",
                infoEmpty: "No existen datos.",
                infoFiltered: "",
                infoPostFix: "",
                loadingRecords: "Cargando...",
                zeroRecords: "No se encontraron datos con tu busqueda,",
                emptyTable: "No hay datos disponibles.",
                paginate: {
                    first: "Primero",
                    previous: "Anterior",
                    next: "Siguiente",
                    last: "Ultimo"
                },
                aria: {
                    sortAscending: ": Orden ascendente",
                    sortDescending: ": Orden descendente"
                }
            },
            scrollY: 650,
            lengthMenu: [ [10, 25, -1], [10, 25, "Todos"] ],
        });
    });
</script>