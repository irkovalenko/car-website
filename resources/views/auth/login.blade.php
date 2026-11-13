<x-layouts.auth title="Login" bodyClass="page-login">
    <x-auth-form :action="route('login')" submit="Login" :fields="[
            ['type' => 'email',    'name' => 'email',    'placeholder' => 'Your Email'],
            ['type' => 'password', 'name' => 'password', 'placeholder' => 'Your Password'],
        ]" alt-text="Don't have an account?" :alt-href="route('signup')" alt-link-text="Click here to create one">
        <div class="text-right mb-medium">
            <a href="/password-reset.html" class="auth-page-password-reset">Reset Password</a>
        </div>
    </x-auth-form>
</x-layouts.auth>