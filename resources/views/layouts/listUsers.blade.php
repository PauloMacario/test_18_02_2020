@extends('master.base')

@section('content')


<section class="container p-5">



<table class="table table-striped" >
  <thead>
    <tr>
      <th class="text-left" scope="col">Nome completo</th>
      <th class="text-left" scope="col">Contato</th>
      <th class="text-left" scope="col">Data de nascimento</th>
      <th class="text-left" scope="col">Ações</th>
    </tr>
  </thead>
  <tbody id="tBodyUsers">


  </tbody>
</table>

</section>

<script>
        $(document).ready(function(){
            $(function(){
                $.ajax({
                    method:'GET',
                    url: 'user',
                        success: function(response){
                            console.log(response)
                            if(response){

                                for(var i = 0; i < response.length; i++ ){
                                    $('#tBodyUsers').append(
                                        '<tr class="result-busca">\
                                            <td>'+response[i].name+' '+response[i].last_name+'</td>\
                                            <td>'+response[i].email+' '+response[i].phone_one+'</td>\
                                            <td>'+response[i].birth_date+'</td>\
                                            <td class="align-middle text-left">\
                                            <a href="{{ url("api/home/user")}}/'+response[i].id+'" class="btn btn-info btn-sm btn-block" ">Edit</a>\
                                        </tr>')
                                }

                            }
                        }
                    })

                })
            })
        </script>

@endsection

