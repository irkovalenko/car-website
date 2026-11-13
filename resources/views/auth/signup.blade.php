<x-layouts.auth title="Signup" bodyClass="page-signup">
    <x-auth-form :action="route('signup')" submit="Register" :fields="[
            ['type' => 'email',    'name' => 'email',                 'placeholder' => 'Your Email'],
            ['type' => 'password', 'name' => 'password',              'placeholder' => 'Your Password'],
            ['type' => 'password', 'name' => 'password_confirmation', 'placeholder' => 'Repeat Password'],
            ['divider' => true],
            ['name' => 'first_name', 'placeholder' => 'First Name'],
            ['name' => 'last_name',  'placeholder' => 'Last Name'],
            ['name' => 'phone',      'placeholder' => 'Phone'],
        ]" alt-text="Already have an account?" :alt-href="route('login')" alt-link-text="Click here to login" />
</x-layouts.auth>