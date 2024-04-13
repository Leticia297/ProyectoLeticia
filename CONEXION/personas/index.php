<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css
" rel="stylesheet">

  <title>Personas</title>
  <link href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.bootstrap5.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

 <!-- Inicia menú -->
 <?php
  require '../menu/menu.php';
 ?>
<!-- Termina menú -->

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <H2>ADMINISTRACIÓN DE PERSONAS</H2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table id="lista_personas" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <th>#</th>
              <th>Nombre</th>
              <th>Ap. Paterno</th>
              <th>Ap. Materno</th>
              <th>Sexo</th>
              <th>CURP</th>
              <th>Fecha</th>
              <th width="5%"> Opciones</th>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ModalNuevo">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-tittle">Personas | Nuevo Registro</h4>
          <button type="button" class="close" data-dismiss="modal" arial-label="true">
            <span arial-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="post" id="persona">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" name="nombre " id="nombre" class="form-control" placeholder="Nombre">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="apPaterno">Ap. Paterno:</label>
                  <input type="text" name="ap_paterno " id="ap_paterno" class="form-control" placeholder="Ap. Paterno">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="apMaterno">Ap. Materno:</label>
                  <input type="text" name="ap_materno " id="ap_materno" class="form-control" placeholder="Ap. Materno">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="sexo">Sexo:</label>
                  <input type="text" name="sexo" id="sexo" class="form-control" placeholder="Sexo">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="curp">CURP:</label>
                  <input type="text" name="curp" id="curp" class="form-control" placeholder="CURP">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar </button>
          <button type="button" id="btnGuardar" class="btn btn-danger">Guardar </button>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
  <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js
"></script>
  <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.print.min.js"></script>
  <script>
  //Todo lo que esta dentro se ejcuta al dar click al boton
  $("#btnGuardar").click(function() {
    var nombre = $("#nombre").val();
    var ap_paterno = $("#ap_paterno").val();
    var ap_materno = $("#ap_materno").val();
    var sexo = $("#sexo").val();
    var curp = $("#curp").val();
    if (nombre == "" || ap_paterno == "" || ap_materno == "") {
      Swal.fire({
              text: "Existen campos vacios.",
              icon: "warning",
              confirmButtonText: "Aceptar"
            });
    } else {
      $.ajax({
        url: "insertar_personas.php",
        type: "POST",
        data: {
          nombre: nombre,
          ap_paterno: ap_paterno,
          ap_materno: ap_materno,
          sexo: sexo,
          curp: curp
        },
        success: function(response) {
          if (response == "ok") {
            $("#ModalNuevo").modal("toggle");
            $("#nombre").val("");
            $("#ap_paterno").val("");
            $("#ap_materno").val("");
            $("#sexo").val("");
            $("#curp").val("");
            Swal.fire({
              title: "¡Guardado!",
              text: "Registro insertado correctamente.",
              icon: "success",
              confirmButtonText: "Cerrar"
            });;
            var table = $("#lista_personas").dataTable().api();
            table.ajax.reload();
          } else {
            Swal.fire({
              icon: "error",
              title: "Lo siento.",
              text: "Ha ocurrido un error.",
              footer: '<a href="#"></a>'
            });
            console.log(response);
          }
        }
      })
    }
  })

  $(document).ready(function() {
    cargar_tabla();
  });
  br

  function cargar_tabla() {
    // $("#lista_personas").dataTable().fnDestroy();
    $("#lista_personas").dataTable({
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
      },
      responsive: "true",
      dom: 'Bfrtilp',
      buttons: [{
          extend: 'excelHtml5',
          text: '<i class="fa fa-file-excel"> Excel</i> ',
          titleAttr: 'Exportar a Excel',
          className: 'btn btn-success'
        },
        {
          extend: 'pdfHtml5',
          text: '<i class="fa fa-file-pdf"> PDF</i> ',
          titleAttr: 'Exportar a PDF',
          className: 'btn btn-danger'
        },
        {
          extend: 'print',
          text: '<i class="fa fa-print"> Imprimir</i>',
          titleAttr: 'Imprimir',
          className: 'btn btn-dark'
        },
        {
          text:'<i class= "fa fa-plus-square"></i>  INSERTAR',
            classname:"btn btn-info",
            action: function(){
                lanzarmodal();
            },
            counter:1
        }
      ],


      "ajax": {
        "type": "POST",
        "url": "lista_personas.php",
        "dataSrc": "",
        "data": ""
      },
      "columns": [{
          "data": "id"
        },
        {
          "data": "nombre"
        },
        {
          "data": "apPaterno"
        },
        {
          "data": "apMaterno"
        },
        {
          "data": "sexo"
        },
        {
          "data": "curp"
        },
        {
          "data": "fecha"
        },
        {
          "data": "opciones"
        }
      ]
    });
  }

  function lanzarmodal() {
    $("#ModalNuevo").modal("show")
  }

  function eliminar(id) {
    $.ajax({
      url: "eliminar_persona.php",
      type: "POST",
      data: {
        id: id
      },
      success: function(response) {
        if (response == "ok") {
          Swal.fire({
            title: "¿Quieres eliminarlo?",
            text: "¡No podrás revertir esto!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Eliminarlo"
          }).then((result) => {
            if (result.isConfirmed) {
              // Aquí elimina el dato después de confirmar
              $.ajax({
                url: "eliminar_persona.php",
                type: "POST",
                data: {
                  id: id,
                  confirmar: "si" 
              // Añadimos un parámetro para confirmar la eliminación
                },
                success: function(response) {
                  if (response == "ok") {
                    Swal.fire({
                      title: "¡Eliminado!",
                      text: "Registro eliminado correctamente.",
                      icon: "success"
                    }).then(() => {
                      // Recargar la tabla después de la eliminación
                      var table = $("#lista_personas").dataTable().api();
                      table.ajax.reload();
                    });
                  } else {
                    Swal.fire({
                      title: "Error",
                      text: "Hubo un problema al eliminar el dato.",
                      icon: "error"
                    });
                  }
                }
              });
            }
          });
        }
      }
    });
  }
  //-------------------------------------------
  </script>
</body>

</html>