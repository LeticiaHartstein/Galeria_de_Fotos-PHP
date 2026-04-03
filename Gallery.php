<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style> /* Aplicando o estilo na página*/
    body
    {
    margin: 0;
    background-color: #e3fcff;
    background-image:linear-gradient(90deg, #e3ffe7 0%, #d9e7ff 100%) ;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    
    }
    .containe /* definindo uma margem, usando view height */
    {
       margin: 5vh 10vw;
    }
    .bar ul li /**"Ajeitando" o menu (em especifico, o display) */
    {
        position: relative;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05); 
        text-align: center;
    }
    .bar ul
    {
        padding: 0;
        list-style: none;
    }
    .ga /**Display para a galeria, ira fazer o ajuste   automático das imagens */
    {
         display: flex;
        flex-wrap: wrap;
        gap: 15px;
        justify-content: center;
    }
    .ga img /** Tamanho das imagens quais estão dentro da galeria  */
    {
        width: 200px; 
        height: 200px;
        object-fit: cover; 
        border-radius: 12px;
        transition: transform 0.3s ease;
        border: 4px solid #fff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .bar /** conteiner para o menu */
    {
        position: relative;
        background-color: #ffffffd6;
        border-radius: 10px;
        color: #181818e3;
        padding: 3vh;   
        margin: 0.5%;
    }
    ul li 
    {
        display: inline-block;
    }
    ul li a /**design para o botão do menu */
    {
         text-decoration: none;
        border-radius: 12px;
        background-color: #e7e7e7b6;
        border: 1px solid #bee3db;
        color: #555;
        padding: 12px 25px;
        transition: all 0.3s ease; 
        font-weight: 500;
    }
        ul li a:hover /** altera o design do botão do menu, quando passar o mouse por cima */
    {
        background-color: #ffd6ba; 
        border-color: #ffb88c;
        color: #444;
        box-shadow: 0 4px 10px rgba(255, 184, 140, 0.4);
        transform: translateY(-2px); 


    }
    .box /**Onde esta "guardado" a galeria */
    {
         background-color: rgba(255, 255, 255, 0.82);
        border-radius: 20px;
        border: 1px solid #e0e0e0;
        padding: 3vh;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.03);
    }
</style>
<body>
</div>
    <div class="box"> <!--Container qual está com todas as galerias-->
    <div class="bar">
        <?php 
        echo "<ul>";
        $dirPrincipal = "Images/";
        $dirPrincipalPastas = scandir($dirPrincipal);
        foreach ($dirPrincipalPastas as $pasta)
        {
            if($pasta != ".." && $pasta != ".")
            {
                echo "<li> <a href='#$pasta'>$pasta</a> </li>";
            }        
        }
        echo "</ul>";
        ?>
    </div>
    <h1>Image gallery</h1>
    <?php
    $dirPrincipal = "Images/"; /**definindo o diretório onde esta guardado outras pastas */
    $dirPrincipalPastas = scandir($dirPrincipal); /** escaneando o nome dos diretorios que estão dentro do diretório "Images/" */
    foreach ($dirPrincipalPastas as $pasta) /**Foreach para acessar cada pasta dentro do diretorio */
    {
        if ($pasta != ".." && $pasta != ".") /**retirando os elementos desnecessarios */
            {
                echo "<br><hr><h2 id='$pasta'>$pasta</h2><br> <hr>"; /**Exibindo o nome da pasta */
                echo "<div class='ga'>"; /** guardar as imagens em uma div */
                $dirImagem = $dirPrincipal . $pasta; /**Junta as strings $dirprincipal e $pasta para formar o endereço do diretório */
                $imgs = scandir($dirImagem); /**Passa o nome das imagens dos diretórios para string */
                foreach ($imgs as $img) /**foreach para exibir cada uma das imagens */
                {
                    if ($img !=".." && $img!=".") /**retirando os elementos quais são adicionados automaticamente */
                    {
                        echo "<img src='$dirPrincipal$pasta/$img' alt='$dirPrincipal$pasta$img'>"; /**Exibindo as imagens, usando como source a junção das strings para formar o endereço onde a imagem deve ser retirada */
                    }
                }
                    echo"</div>";
            }
    }
    ?>

    </div>

</div>
</body>
</html>