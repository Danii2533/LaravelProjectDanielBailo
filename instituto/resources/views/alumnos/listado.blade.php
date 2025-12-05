<x-layouts.layout>
    <div class="overflow-x-auto h-full w-full">
        <a href="{{ route('alumnos.create') }}">
            <button  class="bg-green-600 cursor-pointer hover:bg-green-400 py-3 px-4 m-3 text-white font-bold rounded-lg">Añadir alumno <a href="create.blade.php"></a></button>
        </a>
        
        <table class="table table-xs table-pin-rows table-pin-cols">
            <tr>
                @foreach($campos as $campo)
                <th class="p-3 text-white bg-black">{{$campo}}</th>
                @endforeach
                <th class="p-3 text-white bg-black">Editar</th>
                <th class="p-3 text-white bg-black">Eliminar</th>
            </tr>
            @foreach($alumnos as $alumno)
            <tr>
                <td>{{$alumno->id}}</td>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->apellidos}}</td>
                <td>{{$alumno->email}}</td>
                <td>{{$alumno->fecha_nacimiento}}</td>
                <td>{{$alumno->created_at}}</td>
                <td>{{$alumno->updated_at}}</td>
                <td>
                    <button class="bg-blue-600 cursor-pointer hover:bg-blue-400 py-3 px-4 text-white font-bold rounded-lg">Editar</button>
                </td>
                <td>
                    <form action="/alumnos/{{$alumno->id}}" method="POST">
                        @method("DELETE")
                        @csrf
                    <button onclick="confirmarDelete(event)" class="bg-red-600 cursor-pointer hover:bg-red-400 py-3 px-4 text-white font-bold rounded-lg">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <script>
    function confirmarDelete(event) {
        event.preventDefault();

        if (confirm("Seguro que quieres eliminar el registro")) {
            event.target.closest("form").submit();
        }
    }
    </script>
</x-layouts.layout>