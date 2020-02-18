@extends('master.base')

@section('content')


<section class="container p-5">

 @isset($users)

<table class="table table-striped">
  <thead>
    <tr>    
      <th class="text-left" scope="col">Nome completo</th>
      <th class="text-left" scope="col">Contato</th>
      <th class="text-left" scope="col">Data de nascimento</th>
      <th class="text-left" scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
@foreach($users as $user)
    <tr>
      <td class="align-middle text-left">{{$user->name}} {{$user->last_name}}</td>     
      <td class="align-middle text-left">{{$user->email}} - {{$user->phone_one}}</td>
      <td class="align-middle text-left">{{$user->birth_date}}</td>
      <td class="align-middle text-left">
      
      <a href="{{ route('user.show', ['user' => $user->id]) }}" class="btn btn-info btn-sm btn-block" ">Detalhes</a>
      <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-secondary btn-sm btn-block" ">Editar</a>
      
       </td>
    </tr> 
  @endforeach
  </tbody>
</table>

@else


@endisset

</section>

@endsection

