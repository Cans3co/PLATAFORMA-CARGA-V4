public function create(array $input)
{
    Validator::make($input, [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'phone' => ['required', 'string', 'max:20'], // Nuevo campo
        'address' => ['required', 'string', 'max:255'], // Nuevo campo
        'password' => $this->passwordRules(),
    ])->validate();

    return User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'phone' => $input['phone'], // Nuevo campo
        'address' => $input['address'], // Nuevo campo
        'password' => Hash::make($input['password']),
    ]);
}