<x-layouts.layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Listado de Alumnos</h1>

        @if(isset($alumnos) && $alumnos->isEmpty())
            <p>No hay alumnos registrados.</p>
        @else
            <div class="overflow-x-auto">
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Fecha de nacimiento</th>
                            <th>Creado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alumnos as $alumno)
                            <tr>
                                <td>{{ $alumno->id }}</td>
                                <td>{{ $alumno->nombre }}</td>
                                <td>{{ $alumno->apellido }}</td>
                                <td>{{ $alumno->email }}</td>
                                <td>{{ $alumno->fecha_nacimiento }}</td>
                                <td>{{ optional($alumno->created_at)->format('Y-m-d') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-layouts.layout>
