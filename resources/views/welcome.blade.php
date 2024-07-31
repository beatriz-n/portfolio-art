@extends('layouts.main2')

@section('title', 'Triz')

@section('content')



<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
    <h1>Bem-Vindo</h1>
    <h2>Esta é minha pagina de arte.</h2>

    <a class="hero-btn" target="_blank" href="https://shopee.com.br/triz.art">Loja</a>
  </div>
  </div>
</section>
<!-- End Hero -->

<main id="main">

  <!-- ======= Services Section ======= -->
  <section id="servicos" class="services">
    <div class="container">

      <div class="section-title">
        <span>Serviços</span>
        <h2>Serviços</h2>
        <p>O que você pode encontrar</p>
      </div>

      <div class="row">
        <div class="col-lg-4 align-items-stretch" data-aos="fade-up">
          <div class="icon-box">
            <a href="#prontaentrega">
              <div class="icon"><i class="bi bi-brush"></i></div>
              <h4>Pronta Entrega</h4>
              <p>Artes Prontas para a entrega</p>
            </a>
          </div>
        </div>

        <div class="col-lg-4 align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
          <div class="icon-box">
            <a href="#precos">
              <div class="icon"><i class="bi bi-cash-stack"></i></div>
              <h4 class="link-services">Comissões</h4>
              <p class="link-services">Comissões e regras</p>
            </a>
          </div>
        </div>

        <div class="col-lg-4 align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <a href="#contato">
              <div class="icon"><i class="bi bi-calculator-fill"></i></div>
              <h4>Orçamentos</h4>
              <p>Faça seus orçamentos aqui!</p>
            </a>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End Services Section -->

  <section id="precos" class="portfolio">
    <div class="container">

      <div class="section-title">
        <span>Comissões</span>
        <h2>Comissões</h2>
        <p>Atente-se as variações dos preços, estão ai para indicar o aumento de preço conforme a complexidade.</p>
        <p>Existem mais trabalhos, diferente tamanhos, como telas e folhas, fundos... Caso você queira um trabalho que não esta especificado em baixo, por favor entre em contato.</p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Tudo</li>
            <li data-filter=".filter-digital">Arte Digital</li>
            <li data-filter=".filter-tradicional">Arte Tradicional</li>
          </ul>
        </div>
      </div>
      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
        @foreach($artes as $arte)
          @if($arte['statusArte'] == 1)
          @php

          $temMateriais = false;
          $materiaisAssociados = [];

            foreach($artesMateriais as $artesMaterial) {
              if ($artesMaterial['idArte'] == $arte['idArte']) {
              $temMateriais = true;
                foreach($materiais as $material) {
                  if ($artesMaterial['idMaterial'] == $material['idMaterial']) {
                  $materiaisAssociados[] = $material['tituloMaterial'];
                  }
                }
              }
            }

          $classe = $temMateriais ? 'filter-tradicional' : 'filter-digital';
          @endphp

        <div class="col-lg-4 col-md-4 portfolio-item {{ $classe }}">
          <img src="/img/artes/{{ $arte['imagemArte'] }}" class="img-fluid" alt="{{ $arte['tituloArte'] }}">
          <h4 class="space-title">
            {{ $arte['tituloArte'] }}
            <a href="#regras" class="details-link" title="Regras">
              <i class="bi bi-journal-bookmark-fill"></i>
            </a>
          </h4>
          <p>Disponível com fundo simples ou sem fundo neste valor:</p>
          <p>R$ {{ $arte['valorArte'] }}</p>

          @if($temMateriais)
          <p><b>Materiais:</b></p>
          @foreach($materiaisAssociados as $material)
          <ul>
            <li>{{ $material }}</li>
          </ul>
          @endforeach
          @endif
          @if($arte['emolduradoArte'] == 1 || $arte['envernizadoArte'] == 1)
          <p><b>Informações Adicionais:</b></p>
          <ul>
          @if($arte['emolduradoArte'] == 1)
            <li>Emoldurado</li>
          @endif
          @if($arte['envernizadoArte'] == 1)
            <li>Envernizado</li>
          @endif
          </ul>
          @endif
        </div>
        @endif
        @endforeach

      </div>
  </section>
  <!-- End Portfolio Section -->
  <section id="eventos" class="services">
    <div class="container">

      <div class="section-title">
        <span>Loja</span>
        <h2>Loja</h2>
      </div>


      <!-- ======= Events Section ======= -->
      <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

          <div class="text-center">
            <a class="cta-btn" target="_blank" href="https://shopee.com.br/triz.art">Minha Loja</a>
          </div>

        </div>
      </section><!-- End Events Section -->
    </div>
  </section>
  <!-- End Services Section -->
  <!-- ======= About Section ======= -->
  <section id="regras" class="about">
    <div class="container">
      <div class="section-title">
        <span>Regras</span>
        <h2>Regras</h2>
      </div>
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
          <img src="assets/img/evan_morto_comprimido.png" class="img-fluid" alt="Evan chibi">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
          <h3>Regras para comissões</h3>
          <p>
            Algumas regras para comissões de desenhos e pinturas.
          </p>
          <br>
          <h4>OK!🤩</h4>
          <ul>
            <li><i class="bi bi-check-circle"></i>Tenho facilidade em desenhar homens.</li>
            <li><i class="bi bi-check-circle"></i>Semi realismo.</li>
            <li><i class="bi bi-check-circle"></i>Estilo mais "minimalisma" (chibis, sticker).</li>
            <li><i class="bi bi-check-circle"></i>Apenas meu estilo de arte por favor, não me peça para desenhar igual "fulano".</li>
            <li><i class="bi bi-check-circle"></i>Objetos e natureza.</li>
            <li><i class="bi bi-check-circle"></i>Chibis e stickers</li>
          </ul>
          <hr>
          <h4>Não faço 😣</h4>
          <ul>
            <li><i class="bi bi-dash-circle"></i>Realismo</li>
            <li><i class="bi bi-dash-circle"></i>Tracing.</li>
            <li><i class="bi bi-dash-circle"></i>Gore.</li>
            <li><i class="bi bi-dash-circle"></i>Conteúdo sexual</li>
          </ul>
          <hr>
          <ul>
            <h4>Mudanças imprevistas ⚒️</h4>
            <li><i class="bi bi-exclamation-circle"></i>Mudanças simples e arte em construção que não afetam a estrutura, são bem vindas e não tem preço adicional.</li>
            <li><i class="bi bi-exclamation-circle"></i>Mudanças de qualquer complexidade e arte em construção, mas demandam de modificação estrutural, tem preço adicional.</li>
            <li><i class="bi bi-exclamation-circle"></i>Mudanças no fim ao arte finalizada, tem preço adicional maiores.</li>
          </ul>
          <hr>
          <ul>
            <h4>Arte Digital ​🖊️​​</h4>
            <li><i class="bi bi-brush"></i>Será entregue a arte em intervalos de tempo com resolução baixa, para o cliente avaliar e dar feedback.</li>
            <li><i class="bi bi-brush"></i>Referências são necessarias, mas não obrigatórias.</li>
            <li><i class="bi bi-brush"></i>Será enviado pelo Google Drive, terá a arte com resolução alta, pode solicitar qualquer formato que tenho disponível.</li>
            <li><i class="bi bi-brush"></i>Sem frete.</li>
          </ul>
          <hr>
          <ul>
            <h4>Arte Tradicional 🎨</h4>
            <li><i class="bi bi-brush"></i>A arte é envernizada.</li>
            <li><i class="bi bi-brush"></i>Artes com mais de 60cm serão entregues em tubos para envio no correio.</li>
            <li><i class="bi bi-brush"></i>Em Votuporanga - SP, a arte com mais de 60cm pode ter molduras, depende da ordem do cliente.</li>
            <li><i class="bi bi-brush"></i>Molduras tem preço adicional, vale ressaltar que a moldura é feita por terceiros.</li>
            <li><i class="bi bi-brush"></i>Frete não incluso no valor.</li>
          </ul>
          <hr>
          <ul>
            <h4>Pagamento 💵</h4>
            <li><i class="bi bi-cash-stack"></i>Atualmente aceito duas Regras de Pagamento:</li>
            <li class="space-line">1º - 50% do preço no início da arte e os outros 50% com arte pronta e antes da entrega.</li>
            <li class="space-line">2º - Pagamento total.</li>
            <li><i class="bi bi-cash-stack"></i>PayPal (nacional e internacional)</li>
            <li><i class="bi bi-cash-stack"></i>Pix (nacional)</li>
            <li><i class="bi bi-cash-stack"></i>Parcelamento <b>(em breve)</b></li>
          </ul>
          <hr>
          <ul>
            <h4>Devolução e Reembolso ♻️</h4>
            <li><i class="bi bi-cash-stack"></i>Multa de 40% do valor total caso cancelamento.</li>
            <li class="space-line">Caso regra de pagamento efetuado for total será reembolsado 60%.</li>
            <li class="space-line">Caso regra de pagamento efetuado for parcial será reembolsado 10% do valor enviado.</li>
            <b>
              <li class="space-line">Regras de pagamento no tópico "Pagamento".</li>
            </b>
            <li><i class="bi bi-cash-stack"></i>PayPal (nacional e internacional)</li>
            <li><i class="bi bi-cash-stack"></i>Pix (nacional)</li>
            <li><i class="bi bi-cash-stack"></i>Parcelamento <b>(em breve)</b></li>
          </ul>
        </div>

      </div>
  </section>

  <!-- ======= Contact Section ======= -->
  <section id="contato" class="contact">
    <div class="container">

      <div class="section-title">
        <span>Contato</span>
        <h2>Contato</h2>
        <p>Sinta-se livre para enviar um e-mail ou Direct do Instagram❤️</p>
        <br>
        <p>Comissões, interesse em alguma arte, eventos e etc.</p>
      </div>

      <div class="row" data-aos="fade-up">

        <div class="col-lg-4 col-md-4">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=imtrixchannel@gmail.com">imtrixchannel@gmail.com</a>

          </div>
        </div>

        <div class="col-lg-4 col-md-4">
          <div class="info-box  mb-4">
            <i class="bi bi-instagram"></i>
            <a href="https://www.instagram.com/triz_artzz?igsh=NGFldTIybzAwYjFu">
              <h3>Instagram</h3>
              <p>triz_artzz</p>
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-4">
          <div class="info-box  mb-4">
            <i class="bi bi-brush"></i>
            <a href="https://trixart3.artstation.com/">
              <h3>ArtStation</h3>
              <p>triz_art</p>
            </a>
          </div>
        </div>

      </div>

      <!-- <div class="row" data-aos="fade-up">
        <div class="col-lg-12">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
      </div> -->

    </div>
  </section>
  <!-- End Contact Section -->

</main><!-- End #main -->

<style>
  .zoom-img {
    transition: transform 0.3s ease;
  }

  .zoom-img:hover {
    transform: scale(1.1);
  }

  .space-line {
    margin-left: 1vw;
  }

  .border-card {
    border: 1px solid #adadad;
    padding: 1%;
    margin: 1px;
  }

  .space-title {
    margin-top: 3%;
  }

  .text-red {
    color: #cc1616;
  }
</style>
@endsection