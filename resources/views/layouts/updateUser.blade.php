@extends('master.base')

@section('content')

<section class="container p-5">


@isset($userId)

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
                <label for="phoneFive">Telefone 5</label>
                <input type="text" class="form-control form-control-sm" id="phoneFive" name="phoneFive" value="">
            </div>
            <div class="form-group col-md-4">
                <label for="phoneSix">Telefone 6</label>
                <input type="text" class="form-control form-control-sm" id="phoneSix" name="phoneSix" value="">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="btnUpdate">Cadastrar</button>
    </form>
</section>


<script>
    $(document).ready(function(){
        $(function(){
            $.ajax({
                method:'GET',
                url: '{{url("api/user")}}'+'/'+'{{$userId}}',
                    success: function(response){
                        if(response){

                             $('#name').val(response['user'].name)
                             $('#lastName').val(response['user'].last_name)
                             $('#email').val(response['user'].email)
                             $('#birthDate').val(response['user'].birth_date)
                             $('#zipCode').val(response['address'].zip_code)
                             $('#state').val(response['address'].state)
                             $('#city').val(response['address'].city)
                             $('#neighborhood').val(response['address'].neighborhood)
                             $('#street').val(response['address'].street)
                             $('#number').val(response['address'].number)
                             $('#phoneOne').val(response['phone'].phone_one)
                             $('#phoneTwo').val(response['phone'].phone_two)
                             $('#phoneThree').val(response['phone'].phone_three)
                             $('#phoneFour').val(response['phone'].phone_four)
                             $('#phoneFive').val(response['phone'].phone_five)
                             $('#phoneSix').val(response['phone'].phone_six)


                        }
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
        })

        $('#btnUpdate').click(function(e){
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



    </script>


@endsection

