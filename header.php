<!--<div class="container-fluid d-none d-lg-block" id="bg">
    <div class="row">
        <div class="col-md-4">
            <p id="texto_inf">(22)9 999-8756<br>Aberto das 07h às 17h</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="img/logoTMFBranco.png" id="logo_Menu">
        </div>
        <div class="col-md-4">       
            <p class="textomenu">contato@industriatmf.com<br><a target="_blank" href="#"><img class="social_icone" src="img/fb.png"></a>
            <a target="_blank" href="#"><img class="social_icone" src="img/linkedin.png"></a></p>
            
        </div>
    </div>
</div> -->

<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="navbarTMF">
    <div class="container">
        <img src="img/logoTMFBranco.png" id="logo_Menu">
        <p id="texto_inf" class="d-none d-sm-block d-md-none mx-auto" style="padding-top:0px">(22)9999-8756<br><br>07h até as 17h</p>

        <div class="navbar-header">
            <!-- Botao Toggle -->
            <button type="button" class="navbar-toggler custom-toggler" data-toggle="collapse" data-target="#menu-navegacao" aria-expanded="true" aria-label="Alternar Navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="menu-navegacao">
            <ul class="navbar-nav mx-auto my-auto">
                <li class="nav-item navegacao"><a class="nav-link linkMenu link_ativo" id="link_secaoHome" href="#secaoSobre">Home</a></li>
                <li class="nav-item navegacao"><a class="nav-link linkMenu" id="link_secaoSobre" href="sobre.php">Sobre nós</a></li>
                <li class="nav-item navegacao"><a class="nav-link linkMenu" id="link_secaoProdutos" href="produtos.php">Produtos</a></li>
                <li class="nav-item navegacao"><a class="nav-link linkMenu" id="link_secaoServicos" href="servicos.php">Serviços</a></li>
                <li class="nav-item navegacao"><a class="nav-link linkMenu" id="link_secaoPortifolio" href="portifolio.php">Portifólio</a></li>
                <li class="nav-item navegacao"><a class="nav-link linkMenu" id="link_secaoContato" href="#secaoContato">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>
<script>
var pagina = window.location.href
if ( (pagina.search("sobre")!=-1)){
    var element = document.getElementById("link_secaoSobre");
    element.classList.add("link_ativo");
    var element1 = document.getElementById("link_secaoHome");
    element1.classList.remove("link_ativo");
}
if ( (pagina.search("servicos")!=-1)){
    var element = document.getElementById("link_secaoServicos");
    element.classList.add("link_ativo");
    var element1 = document.getElementById("link_secaoHome");
    element1.classList.remove("link_ativo");
}
if ( (pagina.search("produtos")!=-1)){
    var element = document.getElementById("link_secaoProdutos");
    element.classList.add("link_ativo");
    var element1 = document.getElementById("link_secaoHome");
    element1.classList.remove("link_ativo");
}
if ( (pagina.search("portifolio")!=-1)){
    var element = document.getElementById("link_secaoPortifolio");
    element.classList.add("link_ativo");
    var element1 = document.getElementById("link_secaoHome");
    element1.classList.remove("link_ativo");
}
if ( (pagina.search("contato")!=-1)){
    var element = document.getElementById("link_secaoContato");
    element.classList.add("link_ativo");
    var element1 = document.getElementById("link_secaoHome");
    element1.classList.remove("link_ativo");
}
if((pagina.search("servicos")!=-1)||(pagina.search("portifolio")!=-1)||(pagina.search("sobre")!=-1)||(pagina.search("produtos")!=-1) ){
    document.getElementById("link_secaoHome").href="index.php";
    document.getElementById("link_secaoContato").href="index.php#secaoContato";
}
</script>