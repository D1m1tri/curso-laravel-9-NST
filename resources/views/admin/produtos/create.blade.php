<!-- Modal Structure -->
<div id="create" class="modal">
    <div class="modal-content">
        <h4><i class="material-icons">playlist_add_circle</i> Novo produto</h4>
        <form class="col s12" action="{{ route('admin.produto.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="row">
                <div class="input-field col s6">
                    <input name="nome" id="nome" type="text" class="validate">
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s6">
                    <input name="preco" id="preco" type="number" class="validate">
                    <label for="preco">Preço</label>
                </div>
            </div>
            <div class="input-field col s12">
                <input name="descricao" id="descricao" type="text" class="validate">
                <label for="descricao">Descrição</label>
            </div>

            <div class="input-field col s12">
                <select name="categoria_id">
                    <option value="" disabled selected>Escolha uma opção</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                    @endforeach
                </select>
                <label>Categoria</label>
            </div>

            <div class="file-field input-field col s12">
                <div class="btn blue">
                    <span>Imagem</span>
                    <input type="file" name="imagem">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Selecione uma imagem">
                </div>
            </div>

    </div>

    <button type="submit" href="#!" class="waves-effect waves-green btn green right">Cadastrar</button><br>
</div>

        </form>
        </div>
