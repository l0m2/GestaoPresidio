@extends('layout')
@section('titulo', 'controle-Visitas')

@section('conteudo')
<div class="table-container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Capacidade</th>
                <th>Quantidade de Detentos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>001</td>
                <td>100</td>
                <td>75</td>
            </tr>
            <tr>
                <td>002</td>
                <td>150</td>
                <td>120</td>   
            </tr>
        </tbody>
    </table>
</div>
@endsection