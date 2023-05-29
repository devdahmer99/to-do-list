<x-layout page="To-Do-List: Registro">
    <x-slot:btn>
    <a href="{{route('register')}}" class="btn btn-primary">
        Voltar
    </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form method="POST">
            @csrf
            <x-form.textInput name="title" label="Titulo da Task" required="required" Placeholder="Digite o titulo da sua tarefa aqui..."/>
            <x-form.textInput type="date" name="due_date" label="Data de Realização" required="required"/>
            <x-form.selectInput name="category" label="Categoria" required="required"/>
            <x-form.textAreaInput name="description" label="Descrição da tarefa" placeholder="Digite a descrição da sua tarefa aqui..."/>

            <div class="inputArea">
                <button type="reset" class="btn">Resetar</button>
                <button type="submit" class="btn btn-primary">Criar Tarefa</button>
            </div>
        </form>
    </section>
</x-layout>