<x-layouts.auth title="Guest" bodyClass="page-guest">
    <x-auth-form :action="route('guest')" submit="Continue as Guest" :fields="[
            ['name' => 'first_name', 'placeholder' => 'First Name'],
            ['name' => 'last_name',  'placeholder' => 'Last Name'],
            ['name' => 'email',      'placeholder' => 'Email'],
        ]" alt-text="Already have an account?" :alt-href="route('login')" alt-link-text="Click here to login" />
</x-layouts.auth>