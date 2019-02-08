@extends('welcome')
@section('content')
@include('partials.sidenavbar')
<div class="page">
    <!-- navbar-->
    @include('partials.navbar')
    <!-- Counts Section -->
    <section class="dashboard-counts section-padding">
        <div class="container-fluid">
            <div class="row">
                <!-- Count item widget-->
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">



                        <a class="pointer" data-toggle="modal" data-target="#addClienteModal">
                            <div class="icon"><i class="icon-user"></i></div>
                            <div class="name"><strong class="text-uppercase">Agregar Cliente</strong>

                            </a>
                            @include('modals.AddCliente')


                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon">
                            <i class="fas fa-list-ol"></i>
                        </div>
                        <div class="name"><strong class="text-uppercase">{{$clientes->count()}} Clientes</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Section-->
    <section class="dashboard-header section-padding">
        <div class="container-fluid">
            <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Sexo</th>
                        <th>Ocupación</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->email}}</td>
                        <td style="text-align: center; vertical-align: middle;">
                            @if($cliente->sexo==true)
                            <a class="pointer" data-toggle="tooltip" data-placement="right" title="Mujer">
                                <i class="fas fa-female fa-2x" style="color: pink;"></i>
                            </a>

                            @else
                            <a class="pointer"  data-toggle="tooltip" data-placement="left" title="Hombre">
                                <i class="fas fa-male fa-2x" style="color: blue;"></i>
                            </a>
                            @endif
                        </td>
                        <td>{{str_limit($cliente->ocupacion, $limit = 150, $end = '...')  }}</td>


                        <td style="text-align: center; vertical-align: middle;">

                            <a class="pointer" data-toggle="modal" data-target="#EditClienteModal"
                            data-id="{{$cliente->id}}"
                            data-nombre="{{$cliente->nombre}}"
                            data-email="{{$cliente->email}}"
                            data-sexo="{{$cliente->sexo}}"
                            data-ocupacion="{{$cliente->ocupacion}}"
                            >

                            <i class="fas fa-edit fa-2x" style=""></i>
                        </a>
                    </td>

                    <td style="text-align: center; vertical-align: middle;">


                        <form class="deleteForm" method="post" action="{{route('delete.cliente' , $cliente->id)}}">
                         {{method_field('DELETE')}}
                         @csrf
                         <button type="submit" class="btn-unstyled red">
                          <i class="fas fa-trash-alt fa-2x"></i>
                      </button>

                  </form>
{{--
                            <a href="{{route('delete.cliente' , $cliente->id)}}">
                                <i class="fas fa-trash-alt fa-2x"></i>
                            </a>
                            --}}
                        </td>

                    </tr>
                    @endforeach
                </table>
            </div>
        </section>
        @include('partials.footer')
    </div>
    @section('extra-js')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                "language": {
                    "lengthMenu": "Mostrando _MENU_ registros por página",
                    "zeroRecords": "No se ha encontrado registros",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No se ha encontrado registros",
                    "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                    "search":         "Buscar:",
                    "loadingRecords": "Cargando...",
                    "processing":     "Procesando...",
                    "paginate": {
                        "first":      "Primera",
                        "last":       "Última",
                        "next":       "Siguiente",
                        "previous":   "Anterior"
                    },
                    "scrollX": true,
                },
            });
    $('#myTable_filter input').addClass('form-control custom-search'); // <-- add this line
} );
</script>


<script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
  })
</script>


<script>
    $(function () {
       $(".deleteForm, #editClienteForm, #addClienteForm").on("submit", function(){
        $('.page').LoadingOverlay("show", {
            image       : "",
            fontawesome : "fa fa-cog fa-spin",
            fontawesomeColor: "#ff3f3f"
        });
    })
   })
</script>


@include('modals.EditCliente')


<script>
    $('#EditClienteModal').on('show.bs.modal', function (event) {
      var modal = $(this)
      var button = $(event.relatedTarget)
      var id = button.data('id')
      var nombre = button.data('nombre')
      var sexo = button.data('sexo')
      var ocupacion = button.data('ocupacion')
      var email = button.data('email')

      modal.find('.modal-body #nombre').val(nombre)
      modal.find('.modal-body #id').val(id)
      modal.find('.modal-body #sexo').val(sexo).change()
      modal.find('.modal-body #ocupacion').val(ocupacion)
      modal.find('.modal-body #email').val(email)
  })
</script>




@endsection
@endsection
