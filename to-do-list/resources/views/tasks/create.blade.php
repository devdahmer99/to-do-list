<x-layout page="To-Do-List: Registro">
    <x-slot:btn>
    <a href="{{route('register')}}" class="btn btn-primary">
        Voltar
    </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form method="POST" action="{{route('task.create_action')}}">
            @csrf
            <x-form.textInput name="title" label="Titulo da Task" required="required" Placeholder="Digite o titulo da sua tarefa aqui..."/>
            <x-form.textInput type="date" name="due_date" label="Data de Realização" required="required"/>
            <x-form.selectInput name="category_id" label="Categoria" required="required">
                    @foreach ($categories as $category)
                        <option valu="{{$category->title}}">{{$category->id}}</option>
                    @endforeach
            </x-form-selectInput>
            <x-form.textAreaInput name="description" label="Descrição da Tarefa" placeholder="Digite a descrição da sua tarefa aqui..."/>
            <x-form.form_button resetText="Resetar" submitText="Criar Tarefa"/>
        </form>
    </section>
</x-layout>