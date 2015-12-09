    <hr/>

    <div class="row">
        <div class="col-md-4" align="center">

            {!! Form::open(['action' => [$controlador,$id_cli], 'method' => 'GET', 'class' => 'Class_name']) !!}
            <div class="input-group col-md-12 ">
                {!!  Form::text('q',null,['class' => 'form-control', 'type' =>'text', 'placeholder' =>'Tipo de pedido...', 'autofocus'])!!}
                <span class="input-group-btn btn-default"><button type ="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></span>
                {!! Form::Close() !!}
            </div>

            <div class="form-group">
            <hr/>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Referência</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listaIniciais as $ini)
                    <tr>
                         <td><a class="escolhe" id={{$ini->id}} href="#" name="{{$ini->Referencia}}" > {{$ini->Referencia}}</a></td>
                    </tr>
                @endforeach
                </tbody>

            </table>


        </div>
       @include('base._paginat')

    </div>
    <div class="col-md-4" align="center">
        <div class="form-group">

            {!! Form::label('preview', 'Itens Escolhidos:') !!}
            {!! Form::textarea('preview',null,['class' => 'form-control', 'rows' =>'22', 'id' => 'preview', 'readonly']) !!}

        </div>
        <div class="form-group">
            <button class="btn btn-info" id="atualizar">Montar</button>
        {{--    <button class="btn btn-info" id="sess">ver session</button> --}}
            <button class="btn btn-info" id="limpa">Limpar Itens</button>

        </div>


    </div>
    <div class="col-md-4" align="center">
        <div class="form-group">
            {!! Form::label('inicia',  'Preview da Inicial') !!}
            {!! Form::textarea('inicia',null,['class' => 'form-control', 'rows' =>'22', 'id' => 'inicial']) !!}
        </div>
        <div class="form-group">
            <button class="btn btn-info" id="odt" onclick="window.open('{{action('IniciaisController@getDownload')}}')">Open Office</button>
            <button class="btn btn-info"  id="doc">MS Word</button>
        </div>
    </div>
</div>
    <script LANGUAGE="JavaScript" TYPE="text/javascript">
        $(document).ready(function(){

            //Verifica o que já tem na session a cada load da página.
            $('#preview').append(sessionStorage.getItem('itensRef'));


            $(".escolhe").click(function(){

                $('#preview').append(this.name+'\n');
                // verificar se tem um valor unico de NULL - se vor só isso esvaziar os arrays antes.
                // Isso só acontece quando é a primeira vez que a pagina é carregada.

                if (sessionStorage.getItem('itensID') === 'null') {
                    sessionStorage.setItem('itensID', '');
                    sessionStorage.setItem('itensRef', '');
                }

                sessionStorage.setItem('itensID',sessionStorage.getItem('itensID')+[","+this.id]);
                sessionStorage.setItem('itensRef',sessionStorage.getItem('itensRef')+[this.name+"\n"]);

            });


            $('#atualizar').click(function(){
                // armazena os dados no session, e depois passa como
               // var tmp = sessionStorage.getItem();
                $.get('/iniciais/montar/son/'+sessionStorage.getItem('itensID').substr(1,1024)+'/'+"65" ,function(jdata){
                    var CABECALHO_INICIAL = ", vem, por meio de seu procurador signatário, perante Vossa Excelência, propor\n ";
                    $('#inicial').append($('#endereco').val()+"\n\n");

                        if($('#ajg').is(':checked')){$('#inicial').append($('#ajg').val()+"\n");}
                        if($('#prioridade').is(':checked')){$('#inicial').append($('#prioridade').val()+"\n");}
                        if($('#rordin').is(':checked')){$('#inicial').append($('#rordin').val()+"\n");}
                        if($('#rsuma').is(':checked')){$('#inicial').append($('#rsuma').val()+"\n");}



                    $('#inicial').append("\n\n\n\n"); // espaços do cabeçalho


                    $('#inicial').append($('#qualif').val());
                    $('#inicial').append(CABECALHO_INICIAL);

                    $('#inicial').append($('#tipoacao').val()+"\n\nem desfavor de ");
                    $('#inicial').append($('#qual_reu').val()+" pelos fatos  fundamentos que pass a expor:\n\n");


                    $('#inicial').append(jdata);
                    // apnsar os dados do fim do arquivo aqui?? ou deixar para o controlador fazer isso??

                });
            });
            $('#sess').click(function(){
                alert(sessionStorage.getItem('itensRef'));
                alert(sessionStorage.getItem('itensID'));

            });
            $('#limpa').click(function(){
                sessionStorage.setItem('itensRef','');
                sessionStorage.setItem('itensID','');
                location.reload(true);
            });
          //  $('#odt').click(function(){
                // copia para $tmpVar os dados da petição
            //    tmpVar = $('#inicial').val();
              //  $.get('/iniciais/montar/odt/);
          //  }) ;

        });
    </script>
