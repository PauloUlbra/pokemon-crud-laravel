<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
        a {
        text-decoration: none;
        color:black;
    }
</style>
<body class="bg-dark container">
    <br>
    <button class="btn btn-warning"><a href="{{url('pokemons')}}">&#x2190 Voltar</a></button>
    <div class="w-75 container border mt-5">
        <br>
        <h3 class="text-light">Dados</h3>
        <form action="{{ url('pokemons', $pokemons->id) }}" method="POST" class="form-group">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="inputNome" class="text-light">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome do Pokemon">
            </div>    
            <br>
            <div class="form-group">
                <label for="inputTipo" class="text-light">Tipagem do pokemon</label>
                <input type="text" class="form-control" name="tipo" placeholder="Tipagem do Pokemon">
            </div>  
            <br>    
            <div class="form-group">
                <label for="inputNome" class="text-light">Pontos de poder</label>
                <input class="form-control" name="pontos_de_poder" placeholder="Pontos de poder">
            </div>  
            <br>
            <button type="submit" class="btn btn-primary ">Cadastrar pokemon</button>
        </form> 
        <br>
    </div>   
</body>
</html>
