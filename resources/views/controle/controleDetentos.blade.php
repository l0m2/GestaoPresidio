@extends('layout')
@section('titulo', 'controle-detentos')

@section('conteudo')
<div class="table-over">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>DataNasc</th>
                <th>Nacionalidade</th>
                <th>Provincia</th>
                <th>Endereco</th>
                <th>CodigoCela</th>
                <th>Sentanca</th>
                <th>Data_Registo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>001</td>
                <td>Leopoldo</td>
                <td>Matsinhe</td>
                <td>10/04/1997</td>
                <td>Mocambicana</td>
                <td>Maputo</td>
                <td>Patrice</td>
                <td>002</td>
                <td>Pena de Morte</td>
                <td>10/09/2023</td>
            </tr>
            <tr>
                <td>002</td>
                <td>Leopoldo</td>
                <td>Matsinhe</td>
                <td>10/04/1997</td>
                <td>Mocambicana</td>
                <td>Maputo</td>
                <td>Patrice</td>
                <td>002</td>
                <td>Pena de Morte</td>
                <td>10/09/2023</td> 
            </tr>
            <tr>
                <td>003</td>
                <td>Leopoldo</td>
                <td>Matsinhe</td>
                <td>10/04/1997</td>
                <td>Mocambicana</td>
                <td>Maputo</td>
                <td>Patrice</td>
                <td>002</td>
                <td>Pena de Morte</td>
                <td>10/09/2023</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
