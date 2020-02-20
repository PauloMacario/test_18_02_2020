@extends('master.base')

@section('content')

<section class="container p-5">

    <div class="mb-5 text-center" > <h3 >Cadastro de usuário</h3></div>



    <form action="{{ route('user.store') }}" method="POST">
    @csrf
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
                <label for="zipCode">CEP</label>
                <input type="text" class="form-control form-control-sm" id="zipCode" name="zipCode" >
            </div>
            <div class="form-group col-md-2">
                <label for="state">UF</label>
                <input type="text" class="form-control form-control-sm" id="state" name="state"  >
            </div>
            <div class="form-group col-md-6">
                <label for="city">Cidade</label>
                <input type="text" class="form-control form-control-sm" id="city" name="city" >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="email">Bairro</label>
                <input type="neighborhood" class="form-control form-control-sm" id="neighborhood" name="neighborhood" >
            </div>
            <div class="form-group col-md-6">
                <label for="street">Rua</label>
                <input type="text" class="form-control form-control-sm" id="street" name="street" >
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
                <label for="phoneFive">Telefone 5</label>
                <input type="text" class="form-control form-control-sm" id="phoneFive" name="phoneFive" >
            </div>
            <div class="form-group col-md-4">
                <label for="phoneSix">Telefone 6</label>
                <input type="text" class="form-control form-control-sm" id="phoneSix" name="phoneSix" >
            </div>
        </div>
        <button type="submit" id="btnCad" class="btn btn-primary">Cadastrar</button>
    </form>
</section>

<script>

$('#btnCad').click(function(e){
                e.preventDefault()

                const csrf = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: '{{url("api/user")}}',
                    type: 'POST',
                    data: {
                        'name' : $('#name').val(),
                        'last_name' : $('#lastName').val(),
                        'email' : $('#email').val(),
                        'birth_date' : $('#birthDate').val(),
                        'zip_code' : $('#zipCode').val(),
                        'state' : $('#state').val(),
                        'city' : $('#city').val(),
                        'neighborhood' : $('#neighborhood').val(),
                        'street' : $('#street').val(),
                        'number' : $('#number').val(),
                        'phone_one' : $('#phoneOne').val(),
                        'phone_two' : $('#phoneTwo').val(),
                        'phone_three' : $('#phoneThree').val(),
                        'phone_four' : $('#phoneFour').val(),
                        'phone_five' : $('#phoneFive').val(),
                        'phone_six' : $('#phoneSix').val(),
                        '_token': csrf
                        },

                    dataType: 'json',

                    success: function( response ) {


                    },
                    error: function( response ) {


                    }
                })
            })



            $(document).ready(function() {
                const zipCode = document.querySelector("#zipCode");
                const street = document.querySelector("#street");
                const neighborhood = document.querySelector("#neighborhood");
                const city = document.querySelector("#city");
                const state = document.querySelector("#state");

                zipCode.oninput = () => {


                    if (zipCode.value.length === 8) {
                        street.value = "";
                        neighborhood.value = "";
                        city.value = "";
                        state.value = "";


                    fetch(`https://viacep.com.br/ws/${zipCode.value}/json/`)
                        .then(response => response.json())
                        .then(data => {
                            street.value = data.logradouro;
                            neighborhood.value = data.bairro;
                            city.value = data.localidade;
                            state.value = data.uf;
                        });

                       /*  zipCode.value = zipCode.value.replace(/D/g, "").replace(/^(\d{5})(\d)/, "$1-$2"); */
                    }
                };

            });
</script>

@endsection

