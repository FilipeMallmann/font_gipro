    <div class="form-group col-md-12">
        {!! Form::label('nome', "Nome:") !!}
        {!! Form::text('nome', null,['class' => 'form-control','style' => 'text-transform:uppercase']) !!}
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('TipoProcesso','Tipo do processo') !!}
        {!! Form::text('TipoProcesso', null,['class' => 'form-control', 'list' => 't_processo']) !!}
        <datalist id="t_processo" >
            <option value="Aux. Doença/Ap. Invalidez">
            <option value="LOAS - Idoso">
            <option value="LOAS - Deficiente">
            <option value="Ap. Tempo de Contribuição">
            <option value="Ap. Idade">
            <option value="CTC">
            <option value="Pensão por Morte">
            <option value="Revisão Previdenciária">
            <option value="Trabalhista - Reclamante">
            <option value="Trabalhista - Reclamada">
            <option value="Outros">
        </datalist>
    </div>

    <div class="form-group  col-md-4">
        {!! Form::label('LocalPasta','Local da Pasta') !!}
        {!! Form::text('LocalPasta', null,['class' => 'form-control', 'list' => 'l_pasta']) !!}
        <datalist id="l_pasta">
            <option value="Com Lipe">
            <option value="Com Rafa">
            <option value="Arquivo">
            <option value="Arquivo morto">
            <option value="Não existe Pasta/Documentos">
        </datalist>
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('StatusProcesso','Status do Processo') !!}
        {!! Form::text('StatusProcesso', null,['class' => 'form-control', 'list' => 's_processo']) !!}
        <datalist id="s_processo">
            <option value="Em Exigência">
            <option value="Em Análise">
            <option value="Montagem">
            <option value="Movimento">

            <option value="Em Recurso">
            <option value="Liquidando">
            <option value="Em Execução">

            <option value="Aguardando Pagamento">
            <option value="Aguardando o Cliente">

            <option value="Cessado/Encerrado">
        </datalist>
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('fone', "Telefone:") !!}
        {!! Form::text('fone', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-md-8">
        {!! Form::label('email', "E-mail:") !!}
        {!! Form::text('email', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-md-3">
        {!! Form::label('NProc', 'Número do Processo:') !!}
        {!! Form::text('NProc', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-md-3">
        {!! Form::label('Comarca', "Comarca/UF:") !!}
        {!! Form::text('Comarca', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('Vara', 'Vara:') !!}
        {!! Form::text('Vara', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('Autor_reu', 'Autor ou réu?:') !!}
        {!! Form::text('Autor_reu', null,['class' => 'form-control', 'list' => 'autorreu']) !!}
            <datalist id="autorreu">
                <option value="Autor">
                <option value="Réu">
            </datalist>
    </div>

    <div class="form-group col-md-3">
        {!! Form::label('cpf', 'CPF:') !!}
        {!! Form::text('cpf', null,['class' => 'form-control']) !!}
    </div>


    <div class="form-group col-md-6">
        {!! Form::label('filiacao', 'Filiação') !!}
        {!! Form::text('filiacao', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-md-3">
        {!! Form::label('DtNascimento', 'Data de Nascimento') !!}
        <div class="input-group date" id='dt_nascimento'>
            {!! Form::text('DtNascimento', null,['class' => 'form-control']) !!}
               <span class="input-group-addon btn">
                  <span class="glyphicon glyphicon-calendar"></span>
                      <script type="text/javascript">
                          $(function () {
                              $('#dt_nascimento').datetimepicker({
                                  locale: 'pt-br', format: 'DD/MM/YYYY'});
                          });
                      </script>
                    </span>
               </span>
        </div>
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('Qualificacao', 'Qualificação do Cliente:') !!}
        {!! Form::textarea('Qualificacao', null,['class' => 'form-control', 'rows' =>'4']) !!}
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('Qualific_Contraria', 'Qualificação Contrária') !!}
        {!! Form::textarea('Qualific_Contraria', null,['class' => 'form-control', 'rows' =>'4']) !!}
    </div>

    <hr />

    <div class="form-group col-md-12">
        {!! Form::label('Andamento', 'Andamento: (pressione F4 para acrescentar os dados do usuário)') !!}
        {!! Form::textarea('Andamento',null,['class' => 'form-control blog', 'rows' => '18', 'id' => 'blog']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit($btTxt,['class' => 'btn btn-default']) !!}
    </div>

    @section('script')
        <script>
            $(document).keydown(function(event){
                if (event.which == "115"){
                    var separador = "\n"+window.hoje+' - ('+window.useratual+') - ';
                    $('#blog').val($('#blog').val()+separador);
                }

            });
        </script>
    @stop