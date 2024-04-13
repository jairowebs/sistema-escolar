$("#tableusuarios").DataTable();

document.addEventListener('DOMContentLoaded', function () {
  tableusuarios =$('#tableusuarios').DataTable({
      "aProcessing": true,
      "aServerSide": true,
      "language": {
    "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"

      },
      "ajax": {
       "url" : "./models/usuarios/table_usuarios.php",
       "dataSrc" : ""
      },

      "columns":[
          { "data": "acciones" },
          { "data": "usuario_id" },
          { "data": "nombre" },
          { "data": "usuario" },
          { "data": "nombre_rol" },
          { "data": "estado" }
         
      ],

      "responsive": true,
      "bDestroy": true,
      "iDisplayLength": 10,
     "order": [[0, "asc"]]
    })
})

function openModal() {
  $("#modalUsuario").modal("show");
}
