@extends('master.base')

@section('content')

<section class="container p-5">


@isset($user)

{{ $user->address->state }}

@endisset
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name" value="{{ old('name') ?? $user->name }}">
            </div>
            <div class="form-group col-md-6">
                <label for="lastName">Sobrenome</label>
                <input type="text" class="form-control form-control-sm" id="lastName" name="lastName" value="{{ old('lastName') ?? $user->last_name }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" class="form-control form-control-sm" id="email" name="email" value="{{ old('email') ?? $user->email }}">
            </div>
            <div class="form-group col-md-6">
                <label for="birthDate">Nascimento</label>
                <input type="text" class="form-control form-control-sm" id="birthDate" name="birthDate" value="{{ old('birthDate') ?? $user->birth_date }}">
            </div>
        </div>    
        
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="zipCode">zipCode</label>
                <input type="text" class="form-control form-control-sm" id="zipCode" name="zipCode" value="{{ old('zipCode') ?? '' }}">
            </div>
            <div class="form-group col-md-2">
                <label for="state">UF</label>
                <input type="text" class="form-control form-control-sm" id="state" name="state" value="{{ old('state') ?? $user->address->state }}">
            </div>
            <div class="form-group col-md-6">
                <label for="city">Cidade</label>
                <input type="text" class="form-control form-control-sm" id="city" name="city" value="{{ old('city') ?? $user->address->state }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="email">Bairro</label>
                <input type="neighborhood" class="form-control form-control-sm" id="neighborhood" name="neighborhood" value="{{ old('neighborhood') ??$user->address->neighborhood }}">
            </div>
            <div class="form-group col-md-6">
                <label for="street">Rua</label>
                <input type="text" class="form-control form-control-sm" id="street" name="street" value="{{ old('street') ?? $user->address->street }}">
            </div>
            <div class="form-group col-md-2">
                <label for="number">Numero</label>
                <input type="text" class="form-control form-control-sm" id="number" name="number" value="{{ old('number') ?? $user->address->number }}">
            </div>
        </div>   
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="phoneOne">Telefone 1</label>
                <input type="text" class="form-control form-control-sm" id="phoneOne" name="phoneOne" value="{{ old('phoneOne') ?? $user->phone->phone_one }}">
            </div>
            <div class="form-group col-md-4">
                <label for="phoneTwo">Telefone 2</label>
                <input type="text" class="form-control form-control-sm" id="phoneTwo" name="phoneTwo" value="{{ old('phoneTwo') ?? $user->phone->phone_two }}">
            </div>
            <div class="form-group col-md-4">
                <label for="phoneThree">Telefone 3</label>
                <input type="text" class="form-control form-control-sm" id="phoneThree" name="phoneThree" value="{{ old('phoneThree') ?? $user->phone->phone_tree }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="phoneFour">Telefone 4</label>
                <input type="text" class="form-control form-control-sm" id="phoneFour" name="phoneFour" value="{{ old('phoneFour') ?? $user->phone->phone_four }}">
            </div>
            <div class="form-group col-md-4">
                <label for="naphoneTwome">Telefone 5</label>
                <input type="text" class="form-control form-control-sm" id="phoneTwo" name="phoneTwo" value="{{ old('phoneTwo') ?? $user->phone->phone_five }}">
            </div>
            <div class="form-group col-md-4">
                <label for="phoneTwo">Telefone 6</label>
                <input type="text" class="form-control form-control-sm" id="phoneTwo" name="phoneTwo" value="{{ old('name') ?? $user->phone->phone_six}}">
            </div>
        </div>     
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</section>

@endsection

