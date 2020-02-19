@extends('master.base')

@section('content')
<section class="container p-5">
 @isset($userId)

 {{$userId}}
    <table class="table table-bordered table-sm">
        <thead>
            <tr class="table-secondary">
                <th class="text-left" scope="col">Nome completo</th>
                <th class="text-left" scope="col">E-mail</th>
                <th class="text-left" scope="col">Data de nascimento</th>
            </tr>
        </thead>

        <tbody id="userData">

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


        <tbody id="addressData1">

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

        <tbody id="addressData2">

        </tbody>
    </table>

    <table class="table table-bordered table-sm">
        <thead>
            <tr class="table-secondary">
                <th class="text-left" colspan="3" cope="col">Telefones de contato</th>

            </tr>
        </thead>

        <tbody id="phoneData">

        </tbody>
    </table>

<a href="{{ url("api/home/".$userId."/edit") }}" class="btn btn-primary" >Editar informações</a>

<script>
        $(document).ready(function(){
            $(function(){
                $.ajax({
                    method:'GET',
                    url: '{{url("api/user")}}'+'/'+'{{$userId}}',
                        success: function(response){
                            console.log(response)
                            if(response){
                               console.log(response['user'].name)
                                 $('#userData').append(
                                    '<tr>\
                                        <td>'+response['user'].name+' '+response['user'].last_name+'</td>\
                                        <td>'+response['user'].email+'</td>\
                                        <td>'+response['user'].birth_date+'</td>\
                                    </tr>')

                                    $('#addressData1').append(
                                    '<tr>\
                                        <td>'+response['address'].zip_code+'</td>\
                                        <td>'+response['address'].state+'</td>\
                                        <td>'+response['address'].city+'</td>\
                                    </tr>')

                                    $('#addressData2').append(
                                    '<tr>\
                                        <td>'+response['address'].neighborhood+'</td>\
                                        <td>'+response['address'].street+'</td>\
                                        <td>'+response['address'].number+'</td>\
                                    </tr>')


                                    $('#phoneData').append(
                                    '<tr>\
                                        <td>'+response['phone'].phone_one+'</td>\
                                        <td>'+response['phone'].phone_two+'</td>\
                                        <td>'+response['phone'].phone_three+'</td>\
                                    </tr>\
                                    <tr>\
                                        <td>'+response['phone'].phone_four+'</td>\
                                        <td>'+response['phone'].phone_five+'</td>\
                                        <td>'+response['phone'].phone_six+'</td>\
                                    </tr>')

                            }
                        }
                    })

                })
            })
        </script>



@else

<h4>A pagina não contem registros</h4>


@endisset

</section>



@endsection

