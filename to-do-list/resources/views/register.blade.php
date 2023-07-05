<x-layout page="To-Do-List: Registro de Usuário">
    <x-slot:btn>
    <a href="{{route('register')}}" class="btn btn-primary">
        Voltar
    </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Registre-se</h1>
        <form method="POST" action="{{route('user.register_action')}}">
            @csrf
            <x-form.textInput name="name" label="Seu nome" required="required" Placeholder="Digite o seu nome aqui..."/>
            <x-form.textInput type="email" name="email" label="Seu E-mail" required="required"/>
            <x-form.textInput type="password" name="password" label="Sua Senha"  Placeholder="Digite a sua senha aqui..." required="required"/>
            <x-form.textInput type="password" name="confirm_password" label="Confirme sua Senha"  Placeholder="Digite novamente a sua senha..." required="required"/>
            <x-form.form_button resetText="Limpar" submitText="Registrar-se"/>
        </form>
    </section>
</x-layout>