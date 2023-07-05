<x-layout page="Login To-Do-List">
    <x-slot:btn>
    <a href="{{route('register')}}" class="btn btn-primary">
        Registri-se
    </a>
    </x-slot:btn>

  <section id="task_section">
        <h1>Login</h1>
        <form method="POST" action="{{route('user.login_action')}}">
            @csrf
            <x-form.textInput type="email" name="email" label="Seu E-mail" required="required"/>
            <x-form.textInput type="password" name="password" label="Sua Senha"  Placeholder="Digite a sua senha aqui..." required="required"/>
            <x-form.form_button resetText="Limpar" submitText="Entrar"/>
        </form>
    </section>
</x-layout>