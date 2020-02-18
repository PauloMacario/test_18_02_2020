@extends('master.base')

@section('content')

<section class="container p-5">
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name" >
            </div>
            <div class="form-group col-md-6">
                <label for="lastName">Sobrenome</label>
                <input type="text" class="form-control form-control-sm" id="lastName" name="lastName" >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" class="form-control form-control-sm" id="email" name="email" >
            </div>
            <div class="form-group col-md-6">
                <label for="birthDate">Nascimento</label>
                <input type="text" class="form-control form-control-sm" id="birthDate" name="birthDate" >
            </div>
        </div>    
        
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="zipCode">zipCode</label>
                <input type="text" class="form-control form-control-sm" id="zipCode" name="zipCode" >
            </div>
            <div class="form-group col-md-2">
                <label for="state">UF</label>
                <input type="text" class="form-control form-control-sm" id="state" name="state" readonly >
            </div>
            <div class="form-group col-md-6">
                <label for="city">Cidade</label>
                <input type="text" class="form-control form-control-sm" id="city" name="city" readonly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="email">Bairro</label>
                <input type="neighborhood" class="form-control form-control-sm" id="neighborhood" name="neighborhood" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="street">Rua</label>
                <input type="text" class="form-control form-control-sm" id="street" name="street" readonly>
            </div>
            <div class="form-group col-md-2">
                <label for="number">Numero</label>
                <input type="text" class="form-control form-control-sm" id="number" name="number" >
            </div>
        </div>   
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="phoneOne">Telefone 1</label>
                <input type="text" class="form-control form-control-sm" id="phoneOne" name="phoneOne" >
            </div>
            <div class="form-group col-md-4">
                <label for="phoneTwo">Telefone 2</label>
                <input type="text" class="form-control form-control-sm" id="phoneTwo" name="phoneTwo" >
            </div>
            <div class="form-group col-md-4">
                <label for="phoneThree">Telefone 3</label>
                <input type="text" class="form-control form-control-sm" id="phoneThree" name="phoneThree" >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="phoneFour">Telefone 4</label>
                <input type="text" class="form-control form-control-sm" id="phoneFour" name="phoneFour" >
            </div>
            <div class="form-group col-md-4">
                <label for="naphoneTwome">Telefone 5</label>
                <input type="text" class="form-control form-control-sm" id="phoneTwo" name="phoneTwo" >
            </div>
            <div class="form-group col-md-4">
                <label for="phoneTwo">Telefone 6</label>
                <input type="text" class="form-control form-control-sm" id="phoneTwo" name="phoneTwo" >
            </div>
        </div>     
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</section>

@endsection

