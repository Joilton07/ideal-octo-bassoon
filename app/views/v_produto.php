<?php  
    
    $urlP = $_SERVER["REQUEST_URI"];
    $segP = explode("/", $urlP);

    if($segP[6] == "smartphone"){
        $nameP = $dadosView['smartphone']->getNome();
        $descriptionP = $dadosView['smartphone']->getDescription();
        $precoP = $dadosView['smartphone']->getPreco();
        $img1 = $dadosView['smartphone']->getImg();
        $img2 = $dadosView['smartphone']->getImg();
        $url = $dadosView['smartphone']->getUrl();
    }else {
        $nameP = $dadosView['violao']->getNome();
        $descriptionP = $dadosView['violao']->getDescription();
        $precoP = $dadosView['violao']->getPreco();
        $img1 = $dadosView['violao']->getImg();
        $img2 = $dadosView['violao']->getImg();
        $url = $dadosView['violao']->getUrl();
    }

?>

<section class="col-12">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><?php echo $nameP ?></li>
        </ol>
    </nav>
</section>
<section class="col-12">
    <h3><?php echo $descriptionP ?></h3>
    <div class="row">
        <div class="col-sm-8">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?=BASE_URL."$img1"?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?=BASE_URL."$img2"?>" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card col-12 p-0">
                <div class="card-body">
                    <p class="card-text">Vendido e entregue por <small><strong class="text-primary">MEU E-COMMERCE</strong></p></small>
                    <small>de R$ 15.999,99</small>
                    <h5 class="card-title"><small>por</small> R$<?php echo $precoP ?> <small>?? vista <span class="text-success">(500% de desconto)</span></small></h5>
                    <small>ou 12x de R$ 119,00 com muito juros</small>
                    
                    <p class="mt-3 mb-0"><a href="#">Mais formas de pagamento</a></p>
                    <p class="mt-3 mb-0 text-center"><a href="<?=BASE_URL.$url?>" class="btn-block btn btn-success">Adicionar ao carrinho</a></p>
                    <p class="mt-3 mb-0"><a href="#">Consultar prazo e valor do frete</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="col-12">
    <h5 class="border-bottom text-primary mb-3 mt-5">Informa????es do produto</h5>
    <p class="text-justify">Mussum Ipsum, cacilds vidis litro abertis. Manduma pindureta quium dia nois paga. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Delegadis gente finis, bibendum egestas augue arcu ut est. M?? faiz elementum girarzis, nisi eros vermeio. Detraxit consequat et quo num tendi nada. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. A ordem dos tratores n??o altera o p??o duris. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Quem manda na minha terra sou euzis! Casamentiss faiz malandris se pirulit??. Interagi no m??, cursus quis, vehicula ac nisi. Per aumento de cachacis, eu reclamis. Suco de cevadiss deixa as pessoas mais interessantis. Suco de cevadiss, ?? um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Todo mundo v?? os porris que eu tomo, mas ningu??m v?? os tombis que eu levo! N??o sou faixa preta cumpadi, sou preto inteiris, inteiris. Copo furadis ?? disculpa de bebadis, arcu quam euismod magna. Atirei o pau no gatis, per gatis num morreus.</p>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</section>