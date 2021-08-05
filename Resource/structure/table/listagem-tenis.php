<div class="container">
    <h1 class="h1 text-center">Listagem de Produtos</h1>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Foto</th>
                <th scope="col">Nome</th>
                <th scope="col">Marca</th>
                <td scope="col">Loja</td>
                <td scope="col">Fornecedor</td>
                <th scope="col">Tamanho</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço</th>
                <th scope="col">Ativo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>
                    <form class="formButtonEditar" method="post">
                        <input type="hidden" name="id">
                        <button type="submit" class="btn btn-primary">Editar</button> 
                    </form>
                </td>
                <td>
                    <form class="formButtonExcluir" method="post">
                        <input type="hidden" name="id">
                        <button type="submit" class="btn btn-danger">Excluir</button> 
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>