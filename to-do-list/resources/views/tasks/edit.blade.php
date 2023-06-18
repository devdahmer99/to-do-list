<x-layout page="To-Do-List: Editar">
    <x-slot:btn>
    <a href="{{route('home')}}" class="btn btn-primary">
        Voltar
    </a>
    </x-slot:btn>

   <section id="task_section">
        <h1>Editar Tarefa</h1>
        <form method="POST" action="{{route('task.edit_action')}}">
            @csrf
            <input type="hidden" name="id" value="{{$task->id}}"/>
            <x-form.textInput name="title" label="Titulo da Task" required="required" value="{{$task->title}}" Placeholder="Digite o titulo da sua tarefa aqui..."/>
            <x-form.textInput type="datetime-local" name="due_date" label="Data de Realização" value="{{$task->due_date}}" required="required"/>
            <x-form.selectInput name="category_id" label="Categoria" required="required">
                    @foreach ($categories as $category)
                        <option valu="{{$category->title}}"
                            @if($category->id == $task->category_id)
                                selected
                            @endif
                        >{{$category->id}}</option>
                    @endforeach
            </x-form-selectInput>
            <x-form.textAreaInput name="description" label="Descrição da Tarefa" value="{{$task->description}}" placeholder="Digite a descrição da sua tarefa aqui..."/>
            <x-form.form_button resetText="Resetar" submitText="Atualizar Tarefa"/>
        </form>
    </section>
    
</x-layout>