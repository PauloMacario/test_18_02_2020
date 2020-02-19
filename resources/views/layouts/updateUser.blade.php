@extends('master.base')

@section('content')

<section class="container p-5">


@isset($userId)

{{ $userId }}

@endisset
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name" value="">
            </div>
            <div class="form-group col-md-6">
                <label for="lastName">Sobrenome</label>
                <input type="text" class="form-control form-control-sm" id="lastName" name="lastName" value="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" class="form-control form-control-sm" id="email" name="email" value="">
            </div>
            <div class="form-group col-md-6">
                <label for="birthDate">Nascimento</label>
                <input type="text" class="form-control form-control-sm" id="birthDate" name="birthDate" value="">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="zipCode">zipCode</label>
                <input type="text" class="form-control form-control-sm" id="zipCode" name="zipCode" value="">
            </div>
            <div class="form-group col-md-2">
                <label for="state">UF</label>
                <input type="text" class="form-control form-control-sm" id="state" name="state" value="">
            </div>
            <div class="form-group col-md-6">
                <label for="city">Cidade</label>
                <input type="text" class="form-control form-control-sm" id="city" name="city" value="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="email">Bairro</label>
                <input type="neighborhood" class="form-control form-control-sm" id="neighborhood" name="neighborhood" value="">
            </div>
            <div class="form-group col-md-6">
                <label for="street">Rua</label>
                <input type="text" class="form-control form-control-sm" id="street" name="street" value=""">
            </div>
            <div class="form-group col-md-2">
                <label for="number">Numero</label>
                <input type="text" class="form-control form-control-sm" id="number" name="number" value=""" >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="phoneOne">Telefone 1</label>
                <input type="text" class="form-control form-control-sm" id="phoneOne" name="phoneOne" value="">
            </div>
            <div class="form-group col-md-4">
                <label for="phoneTwo">Telefone 2</label>
                <input type="text" class="form-control form-control-sm" id="phoneTwo" name="phoneTwo" value="">
            </div>
            <div class="form-group col-md-4">
                <label for="phoneThree">Telefone 3</label>
                <input type="text" class="form-control form-control-sm" id="phoneThree" name="phoneThree" value="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="phoneFour">Telefone 4</label>
                <input type="text" class="form-control form-control-sm" id="phoneFour" name="phoneFour" value="">
            </div>
            <div class="form-group col-md-4">
                <label for="naphoneTwome">Telefone 5</label>
                <input type="text" class="form-control form-control-sm" id="phoneTwo" name="phoneTwo" value="">
            </div>
            <div class="form-group col-md-4">
                <label for="phoneTwo">Telefone 6</label>
                <input type="text" class="form-control form-control-sm" id="phoneTwo" name="phoneTwo" value="">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</section>

@endsection

