<div style="display: flex; flex-direction: column; align-items: center;">
   <h1 style="text-align: center;">SISTEMA GESTÃO DE MUNICÍPIOS - GOVERNO DO PARANÁ</h1>
   <h2 style="text-align:center;">[CADASTRAR NOVA CIDADE]</h2>
   <form action="{{ route('cidades.store') }}" method="POST">
      <!-- Token de segurança salvo na sessão, verificar o formulário submetido -->
      @csrf
      <a href="{{route('cidades.index')}}"><h4>voltar</h4></a>
      <label>Nome:</label> <input type='text' name='nome'><p>
      <label>Porte:</label>
      <select name="porte">

   <option value="pequeno">Pequeno</option>
   <option value="médio">Médio</option>
   <option value="grande">Grande</option>
</select>

      <p> <!-- Quebra de linha para exibir as opções abaixo uma da outra -->
      <input type="submit" value="Salvar">
   </form>
</div>