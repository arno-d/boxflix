<?php
include 'inc-cabecalho.php';
?>
    <main>
        <div class="container">
            <div class="card">
                <form method="post" action="filmes-salvar.php" class="card-body">
                    Nome do filme: <input name="nome" class="form-control"><br>
                    Foto de capa: <input type="text" name="foto" class="form-control"><br>
                    Ano: <input name="ano" class="form-control" required><br>
                    Avaliação: <select name="avaliacao" class="form-select form-select-sm" aria-label="Small select example">
                    <option value="1">⭐</option>
                    <option value="2">⭐⭐</option>
                    <option value="3">⭐⭐⭐</option>
                    <option value="4">⭐⭐⭐⭐</option>
                    <option value="5">⭐⭐⭐⭐⭐</option>
                    </select><br>
                    Trailer: <input name="trailer" class="form-control"><br>
                    Gênero: <input name="genero" class="form-control"><br>
                    Duração: <input name="duracao" class="form-control"><br>
                    Descrição: <textarea name="descricao" class="form-control"></textarea><br>
                    <button type="submit" class="btn btn-secondary btn-sm">Salvar</button>
                    <button type="reset" class="btn btn-secondary btn-sm">Limpar</button>
                </form>
            </div>
        </div>
    </main>

<?php
include 'inc-rodape.php';
?>