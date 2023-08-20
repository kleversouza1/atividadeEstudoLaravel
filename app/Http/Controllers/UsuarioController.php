<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        // Este método exibe o formulário para criar um novo usuário.
        $usuarios = Usuario::all();
        return view('usuarios.create', ['usuarios' => $usuarios]);
        
    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $data = $request->validate([
            'cpf' => 'required|integer|unique:usuarios,cpf',
            'nome' => 'required|string',
            'data_nascimento' => 'required|date',
        ]);
    
        try {
            // Cria um novo usuário no banco de dados
            $usuario = Usuario::create($data);
            
            // Redireciona o usuário com uma mensagem de sucesso
            return redirect('/usuarios')->with('success', 'Usuário criado com sucesso!');
        } catch (\Exception $e) {
            // Redireciona de volta com uma mensagem de erro se ocorrer um erro inesperado
            return redirect('/usuarios/create')->with('error', 'Ocorreu um erro ao criar o usuário. Por favor, tente novamente.');
        }
    }

    public function show($id)
    {
    // Recupera um usuário pelo ID
    $usuario = Usuario::find($id);

    // Verifica se o usuário foi encontrado
    if (!$usuario) {
        return redirect('/usuarios')->with('error', 'Usuário não encontrado');
    }

    // Retorna a view para exibir as informações do usuário
    return view('usuarios.show', ['usuario' => $usuario]);
    }


}