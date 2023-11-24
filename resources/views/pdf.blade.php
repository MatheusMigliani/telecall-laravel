<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Adicione estilos personalizados aqui */
        @page {
        size: A4 landscape; /* Define o tamanho da página como paisagem (landscape) A4 */
        margin: 10mm 10mm 10mm 10mm; /* Define as margens superior, direita, inferior e esquerda como 10mm */
    }

        table {
            width: max-content;
            display: table;
            border-collapse: separate;
            box-sizing: border-box;
            text-indent: initial;
            border-spacing: 2px;
            border-color: gray;
            font-size: medium;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Lista de Usuários</h2>

        <table class="table meudeus">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Nome Completo</th>
                    <th>CPF</th>
                    <th>Telefone Celular</th>
                    <th>Telefone Fixo</th>
                    <th>Endereço</th>
                    <th>N</th>
                    <!-- Adicione mais colunas conforme necessário -->
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->NomeCompleto }}</td>
                        <td>{{ $usuario->cpf }}</td>
                        <td>{{ $usuario->TelCelular }}</td>
                        <td>{{ $usuario->TelFixo }}</td>
                        <td>{{ $usuario->Rua }}</td>
                        <td>{{ $usuario->Numero }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
