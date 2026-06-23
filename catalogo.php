<?php
include 'inc-cabecalho.php';
?>

    <h1 class="text-center">Catálogo de Filmes</h1>
    <div class="container">
    <div class="row">
        


    <?php
    include 'inc-conexao.php';

    $id = $nome_filme = $foto_de_capa = $ano = $avaliacao = $trailer = $genero = $duracao = $descricao = ""; 
     
    $sql = "SELECT * FROM tb_filmes"; 
 
    $resultado = mysqli_query($conn, $sql); 
 
    while ($linha = mysqli_fetch_assoc($resultado)) { 
        $id = $linha['id']; 
        $nome_filme = $linha['nome_filme'];  
        $foto_de_capa = $linha['foto_de_capa']; 
        $ano = $linha['ano']; 
        $avaliacao = $linha['avaliacao']; 
        $trailer = $linha['trailer']; 
        $genero = $linha['genero']; 
        $duracao = $linha['duracao']; 
        $descricao = $linha['descricao']; 
 
        
        // echo 
        // "
        // <div class='col-4'>
        //     <div class='card-mb-3' style='width: 1000px'>
        //         <div class='row g-0'> 
        //             <div class='col-md-3'> 
        //                 <img src='$foto_de_capa' class='img-fluid rounded-start' alt='$nome_filme'> 
        //             </div> 
        //                 <div class='col-md-8'> 
        //                     <div class='card-body'> 
        //                         <h5 class='card-title'>$nome_filme ($ano)</h5> 
        //                         <p class='card-text'>$descricao</p> 
        //                     </div> 
        //                 </div> 
        //             </div> 
        //         </div>
        //     </div>
        // </div>
        // "
        // ; 

        ?>
    
    <div class="row" style="width:700px">
        <div class="col-4">
        <img class="img-fluid rounded" src='<?=$foto_de_capa?>'> <br>
        <?= $nome_filme ?>
        </div>
    </div>
 
<?php
 
    } 
?> 
</div>
    </div>
<?php 
include 'inc-rodape.php'; 
?> 