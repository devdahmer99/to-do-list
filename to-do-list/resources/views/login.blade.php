<x-layout page="Login To-Do-List">
    <x-slot:btn>
    <a href="{{route('register')}}" class="btn btn-primary">
        Registri-se
    </a>
    </x-slot:btn>

    <a href="{{route('home')}}">
        Ir para Home
    </a>
</x-layout>