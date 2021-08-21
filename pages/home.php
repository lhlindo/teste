<div id="topo-topo">
  <h1 id="temos-felicidade">Temos a felicidade em formato de cupcake para alegrar o seu dia.<br/></h1>
  <p id="tems">O que você precisa está aqui. Peça e receba onde estiver.</p><br>
    <form id ="busca" action=" " method="post">
      <input type="search" id="busca" name="q">
      <button id="buscabtn" type="submit"><img width="30px" height="30px" src="./images/lupa.png"></button>
    </form>
</div>


<div id="produtoesp">
  <div class="conteudoprodutoesp">
    <h5 style="color: #D30707; margin-top: 10px; margin-bottom: 10px;">#ONovoFavoritoDaCasa</h5>
    <h1 id="CupcakeHotPepperGourmet">Cupcake Hot Pepper Gourmet</h1>
    <p class="paragrafo-favorito">Ele pode ser salgado e muitas vezes contém frutas e nozes, mas dessa vez trouxemos um sabor exotico preparado especialmente para os fãs de pimenta. </p>
    <p class="paragrafo-favorito">O Cupcake de origem inglesa apresentado em nossa mistura especial de chocolate com pimenta carrega fortes traços da cultura presente na Provincia de Chongqing na China, a junção desses ingredientes juntos são o novo trunfo da Gastronomia Gourmet</p>
    <h4 id="conheca">Conheça os detalhes sobre nossa mistura Chocolate + Pimenta!</h4>
    <a href="./index.php?p=paginaespecialhot"><button id="saibamaispepper">Saiba Mais</button></a>
  </div>

  <div class="conteudoprodutoesp1">
    <img  src="./images/hotpepper.jpg" height="400px" width="500px">
  </div>
</div>


<div id="todososprodutos">
  <h1 id="nossosprodutos">Nossos produtos:</h1>
  <div class="produtos">
    <h5 class="titulosprodutos">Creme Morango</h5>
    <img  class="imagesprodutos" src="./images/<?php echo $produtoshome["crememorango"]["img"]; ?>" width="240px" height="250px">
    <p class="descricaoprodutos"><?php echo $produtoshome["crememorango"]["descricao1"] ?></p>
    <a href="./index.php?p=crememorango"><button class="button-saiba">Saiba mais...</button></a>
  </div>
  <div class="produtos">
    <h5 class="titulosprodutos">Chocolate + Creme Morango</h5>
    <img  class="imagesprodutos" src="./images/<?php echo $produtoshome["chocolatecrememorango"]["img"]; ?>" width="240px" height="250px">
    <p class="descricaoprodutos"><?php echo $produtoshome["chocolatecrememorango"]["descricao1"] ?></p>
    <a href="./index.php?p=chocolatecrememorango"><button class="button-saiba">Saiba mais...</button></a>
  </div>
  <div class="produtos">
    <h5 class="titulosprodutos">Chocolate Amargo</h5>
    <img  class="imagesprodutos" src="./images/<?php echo $produtoshome["chocolateamargo"]["img"]; ?>" width="240px" height="250px">
    <p class="descricaoprodutos"><?php echo $produtoshome["chocolateamargo"]["descricao1"] ?></p>
    <a href="./index.php?p=chocolateamargo"><button class="button-saiba">Saiba mais...</button></a>
  </div>
  <div class="produtos">
    <h5 class="titulosprodutos">Hot Pepper Gourmet</h5>
    <img  class="imagesprodutos" src="./images/<?php echo $produtoshome["hotpeppergourmet"]["img"]; ?>" width="240px" height="250px">
    <p class="descricaoprodutos"><?php echo $produtoshome["hotpeppergourmet"]["descricao1"] ?></p>
    <a href="./index.php?p=hotpeppergourmet"><button class="button-saiba">Saiba mais...</button></a>
  </div>
  <div class="produtos">
    <h5 class="titulosprodutos">Limão</h5>
    <img  class="imagesprodutos" src="./images/<?php echo $produtoshome["limao"]["img"]; ?>" width="240px" height="250px">
    <p class="descricaoprodutos"><?php echo $produtoshome["limao"]["descricao1"] ?></p>
    <a href="./index.php?p=limao"><button class="button-saiba">Saiba mais...</button></a>
  </div>
</div>

<br>