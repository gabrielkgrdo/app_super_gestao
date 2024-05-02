<h3>Fornecedores</h3>


{{-- comentário--}}



{{--@if(count($fornecedores) > 0 && count($fornecedores) < 2)
    <h3>Existem alguns fornecedores cadastrados.</h3>
@elseif(count($fornecedores)>2)
    <h3>Existem vários fornecedores cadastrados.</h3>
@else 
    <h3>Nenhum fornecedor cadastrado.</h3>
@endif--}}

@isset($fornecedores)
        @for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{$fornecedores[$i]['nome']}}
        <br>
        Status: {{$fornecedores[$i]['status']}}
        <br>
        CNPJ: {{$fornecedores[$i]['CNPJ']?? ''}}
        <hr>
    @endfor
@endisset




{{--@if(!($fornecedores[0]['status'] == 'inativo'))
    Fornecedor ativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'inativo') {{-- Executa se condição for false 
    Fornecedor ativo
@endunless--}}

