@extends('master.base')

@section('content')
<section class="container p-5">
 @isset($user)

<table class="table table-bordered table-sm">
    <thead>
        <tr class="table-secondary">    
            <th class="text-left" scope="col">Nome completo</th>    
            <th class="text-left" scope="col">E-mail</th>     
            <th class="text-left" scope="col">Data de nascimento</th>      
        </tr>
    </thead>

    <tbody>
        <tr>
            <td class="text-left" >{{ $user->name}} {{$user->last_name }}</td>    
            <td class="text-left" >{{ $user->email }}</td>     
            <td class="text-left" >{{ date( 'd/m/Y' , strtotime($user->birth_date)) }}</td>   
        </tr>
    </tbody>
</table>

<table class="table table-bordered table-sm">
    <thead>
        <tr class="table-secondary">    
            <th class="text-left" scope="col">Cep</th>
            <th class="text-left" scope="col">Estado</th>
            <th class="text-left" scope="col">Cidade</th>
        </tr>
    </thead>   


    <tbody>
        <tr>
            <td class="text-left" >{{ $user->address->zip_code }}</td>    
            <td class="text-left" >{{ $user->address->state }}</td>     
            <td class="text-left" >{{ $user->address->city }}</td>   
        </tr>
    </tbody>
</table>

<table class="table table-bordered table-sm">
    <thead>
        <tr class="table-secondary">    
            <th class="text-left" scope="col">Bairro</th>
            <th class="text-left" scope="col">Rua</th>
            <th class="text-left" scope="col">Número</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td class="text-left" >{{ $user->address->neighborhood }}</td>    
            <td class="text-left" >{{ $user->address->street }}</td>     
            <td class="text-left" >{{ $user->address->number }}</td>   
        </tr>
    </tbody>
</table>

<table class="table table-bordered table-sm">
    <thead>
        <tr class="table-secondary">    
            <th class="text-left" colspan="3" cope="col">Telefones de contato</th>
            
        </tr>
    </thead>

    <tbody>
        <tr>
            <td class="text-left" >{{ $user->phone->phone_one }}</td>    
            <td class="text-left" >{{ $user->phone->phone_two }}</td>     
            <td class="text-left" >{{ $user->phone->phone_three }}</td>   
        </tr>
        <tr>
            <td class="text-left" >{{ $user->phone->phone_four }}</td>    
            <td class="text-left" >{{ $user->phone->phone_five }}</td>     
            <td class="text-left" >{{ $user->phone->phone_six }}</td>   
        </tr>
    </tbody>
</table>

<a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-primary" >Editar informações</a>

@else


@endisset

</section>

@endsection

