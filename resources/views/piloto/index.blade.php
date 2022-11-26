@extends('layouts.app1')

@section('contenido')

<div class="container">
        {{-- <div>
            <a href="{{route('alumno.create')}}" class="btn btn-primary m-3 boton_insert"><i class="fa-solid fa-user-plus"></i></a>
        </div> --}}
        <table id="tabla" class="table table-striped table-bordered">
           <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>F.Nacimiento</th>
                    <th>Email</th>
                    <th>DNI</th>
                    <th>Teléfono</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pilotos as $piloto)
                <tr data-id='{{$piloto->id}}'>
                    <td>{{$piloto->id}}</td>
                    <td>{{$piloto->nombre}}</td>
                    <td>{{$piloto->apellidos}}</td>
                    <td>{{$piloto->f_nacimiento}}</td>
                    <td>{{$piloto->email}}</td>
                    <td>{{$piloto->dni}}</td>
                    <td>{{$piloto->telefono}}</td>
                    <td class="text-center"><button class="btn btn-light btn_borra"><i class="fa-solid fa-trash text-danger"></i></button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script>

        // DATATABLE
        $('#tabla').DataTable( {
            "columnDefs": [
                { "orderable": false, "targets": 7 },
            ]
        });


        // SweetAlert2
        $("#tabla").on("click",".btn_borrar",function(e){
            e.preventDefault();

            swal.fire({
                title: '¿Estas seguro?',
                text: "No podras revertir esta accion",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, !Borrar!',
                cancelButtonText: 'No, !cancelar!',
            }).then((result) => {
                if (result.isConfirmed) {
                    const tr=$(this).closest("tr");
                    const id=tr.data("id");
                    $.ajax({
                        url: "{{url('/pilotos')}}/"+id,
                        method: "DELETE",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(){
                            tr.fadeOut();
                        }
                    })
                }
            })
        });

    </script>

@endsection