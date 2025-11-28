<?php require_once __DIR__ . "/header.php"; ?>

<main class="produto">

    <div class="container">

        <nav class="mt-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="produtos.php">Produtos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Camiseta Manga Comprida</li>
            </ol>
        </nav>

        <!-- Image and Description are starting -->
        <div class="row my-5">

            <div class="col-md-7">
                <img src="assets/images/produtos/details/foto-carrinho-camiseta-manga-comprida.jpg" alt="">
            </div>

            <div class="col-md-5">
                <h1>Camiseta manga Comprida</h1>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum iure sit eum ullam aliquid ipsam nihil, totam vel quis temporibus. Natus a dolore iste. Eos ab reiciendis iste nemo hic.</p>

                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>

                <h5 class="preco mt-3">R$ 79,90</h5>

                <span>Em até 12x sem juros</span>

                <div class="comprar mt-3">

                    <form action="">

                        <select class="form-select" aria-label="Default select example">
                            <option value="1">1x</option>
                            <option value="2">2x</option>
                            <option value="3">3x</option>
                            <option value="5">5x</option>
                            <option value="8">8x</option>
                            <option value="12">12x</option>
                        </select>   

                        <button type="submit" class="btn btn-success w-100 mt-4">Comprar</button>

                    </form>

                </div>

            </div>

        </div>
        <!-- Image and Description are finished -->

        <div class="row">
            <div class="col">

                <div class="fb-comments" data-href="https://www.seusite.com/pagina" data-width="100%" data-numposts="5">
                </div>
            
            </div>
        </div>
        
    </div>

</main>

<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v19.0">
</script>

<?php require_once __DIR__ . "/footer.php"; ?>