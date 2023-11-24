<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;






class UserController extends Controller
{


















    // CRUD//


    public function listarUsuarios()
    {
        // Verificar se o usuário está autenticado e é um administrador
        if (!Auth::check() || Auth::user()->Permissao !== 'admin') {
            // Redirecionar para a página inicial ou exibir uma mensagem de erro
            return redirect('/index')->with('error', 'Acesso não autorizado.');
        }

        // Recuperar todos os usuários do banco de dados
        $usuarios = User::all();

        // Retornar a view com os usuários
        return view('admin', compact('usuarios'));
    }


    // Adicione os métodos necessários para a edição e exclusão
    public function editarUsuario($id)
    {
        $usuario = User::find($id);
        return view('editar-usuario', compact('usuario'));
    }

    public function atualizarUsuario(Request $request, $id)
    {
        $dadosAtualizados = $request->validate([
            'name' => ['required', 'max:6', Rule::unique('users', 'name')->ignore($id)],
            'email' => ['required', 'email',],
            'NomeCompleto' => ['required', 'max:255'],
            'cpf' => ['required',  'max:115'],
            'TelCelular' => ['required', 'max:155'],
            'TelFixo' => ['required', 'max:255'],
            'Rua' => ['required', 'max:255'],
            'Numero' => ['required', 'max:255'],
            // Adicione regras para outros campos conforme necessário
        ]);

        User::find($id)->update($dadosAtualizados);

        return redirect('/admin')->with('success', 'Usuário atualizado com sucesso.');
    }




    public function adicionarUsuario(Request $request)
    {
        $novosDados = $request->validate([
            'name' => ['required', 'min:6', 'max:6', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'NomeCompleto' => ['required', 'max:255'],
            'cpf' => ['required',  'max:115'],
            'TelCelular' => ['required', 'max:155'],
            'TelFixo' => ['required', 'max:255'],
            'Rua' => ['required', 'max:255'],
            'Numero' => ['required', 'max:255']


            // Adicione outras regras de validação conforme necessário
        ]);

        // Adicionar o novo usuário
        User::create($novosDados);

        return redirect('/admin')->with('success', 'Usuário adicionado com sucesso.');
    }




    public function excluirUsuario($id)
    {
        // Encontrar o usuário pelo ID
        $usuario = User::find($id);

        // Verificar se o usuário foi encontrado
        if (!$usuario) {
            return redirect('/admin')->with('error', 'Usuário não encontrado.');
        }

        // Excluir o usuário
        $usuario->delete();

        return redirect('/admin')->with('success', 'Usuário excluído com sucesso.');
    }

    // CRUD //




    // LOGIN //

    public function logar(Request $request)
    {
        $DadosRegistro = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);

        if (auth()->attempt(['name' => $DadosRegistro['loginname'], 'password' => $DadosRegistro['loginpassword']])) {
            $request->session()->regenerate();

            // Exibir SweetAlert de boas-vindas
            alert()->success('Seja Bem-Vindo!', 'Login feito com sucesso.')->showConfirmButton('OK', '#4bb543');

            // Verificar a permissão do usuário após o login
            $user = auth()->user();
            if ($user->Permissao === 'admin') {
                // Exibir SweetAlert adicional apenas para administradores
                alert()->info('Bem-vindo Administrador', 'Você entrou como administrador.')->showConfirmButton('OK', '#3085d6');
                return redirect('/admin');
            } else {
                // Se for um cliente normal, redirecionar para /index
                return redirect('/index');
            }
        } else {
            // Exibir SweetAlert de erro em caso de credenciais inválidas
            alert()->error('Erro de Autenticação', 'Credenciais inválidas. Tente novamente.')->showConfirmButton('OK', '#FF0000');
            return redirect('/login');
        }
    }



    // ~LOGIN //





    // LOGOUT //


    public function logout()
    {
        auth()->logout();
        alert()->success('Desconectado', 'Você acabou de sair.')->showConfirmButton('OK', '#4bb543');
        return redirect('/index');
    }

    // LOGOUT  //


    // REGISTRO //



    public function registrar(Request $request)
    {
        $DadosRegistro = $request->validate([
            'name' => ['required', 'min:6', 'max:6', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'max:8'],
            'cpf' => ['required'],
            'nascimento' => ['required'],
            'TelCelular' => ['required'],
            'TelFixo' => ['required'],
            'Cep' => ['required'],
            'NomeCompleto' => ['required'],
            'NomeMaterno' => ['required'],
            'Bairro' => ['required'],
            'Rua' => ['required'],
            'Numero' => ['required'],
            'Cidade' => ['required'],
            'Estado' => ['required'],
            'Genero' => ['required'],
            'Permissao' => ['required'],
            'answer_1' => ['required'],
        ]);

        $DadosRegistro['password'] = bcrypt($DadosRegistro['password']);
        $user = User::create($DadosRegistro);
        auth()->login($user);
        Alert('Cadastro Feito com sucesso', 'Seja Bem vindo!.');
        return redirect('/dashboard');
    }



    // REGISTRO //


    public function showForgotPasswordForm()
    {
        return view('forgot-password');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'answer' => 'required',
            'password' => 'required',
            'TelCelular',
            'TelFixo',
            'TelCelular',
            'TelFixo',
            'Rua',
            'Bairro',
            'Numero',
            'Cidade',
            'Estado',
            'Cep'
        ]);

        $user = User::where('email', $request->email)
            ->where('answer_1', $request->answer)
            ->first();

        if ($user) {
            $user->update(['password' => Hash::make($request->password)]);
            $user->update(['name' => $request->name]);
            $user->update(['email' => $request->email]);
            $user->update(['TelCelular' => $request->TelCelular]);
            $user->update(['TelFixo' => $request->TelFixo]);
            $user->update(['Rua' => $request->Rua]);
            $user->update(['Bairro' => $request->Bairro]);
            $user->update(['Cep' => $request->Cep]);
            $user->update(['Numero' => $request->Numero]);
            $user->update(['Cidade' => $request->Cidade]);
            $user->update(['Estado' => $request->Estado]);

            // Check if the user is already authenticated
            if (Auth::check()) {
                alert()->success('Sucesso', 'Senha redefinida com sucesso.')->showConfirmButton('OK', '#4bb543');
                return redirect('/dashboard')->with('success', 'Senha redefinida com sucesso.');
            } else {
                alert()->success('Sucesso', 'Senha redefinida com sucesso. Faça login com sua nova senha.')->showConfirmButton('OK', '#4bb543');
                return redirect('/login')->with('success', 'Senha redefinida com sucesso. Faça login com sua nova senha.');
            }
        }

        alert()->error('E-mail ou resposta à pergunta incorretos.')->showConfirmButton('OK', '#fa0000');
        return back()->withErrors(['email' => 'E-mail ou resposta à pergunta incorretos.']);
    }
}
