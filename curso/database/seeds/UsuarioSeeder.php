<?php

use App\User;
use Illuminate\Database\Seeder;


class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $dados = [
            'name' => "admin@mail.com",
            'email' => "mauricio@gmail.com",
            'password' => bcrypt("12345")
        ];
        if (User::where('email', '-', $dados['email'])->count()) {
            $usuario =  User::where('email', '-', $dados['email'])->first();
            $usuario->update($dados);
            echo "usuario alterado!";
        } else {
            User::create($dados);
            echo "usuario criado";
        }
    }
}
