<section class="search-top">
  <div class="container">
    <div class="flex flex-parent">

      <div class="col call-you flex align-center">
        <div class="call-you-icon">
          <img src="<?= get_bloginfo('template_url') ?>/assets/img/search-tel.png" alt="Telephone Icon">
        </div>

        <p>Nós Ligamos para Você</p>
      </div>

      <div class="col wpp-link flex flex-wrap align-center">
        <div class="wpp-icon">
          <img src="<?= get_bloginfo('template_url') ?>/assets/img/wpp-icon.png" alt="Whatsapp">
        </div>

        <span>Whatsapp</span>
        <span>(11) 94603-6617</span>
      </div>

      <div class="col chat-link flex align-center">
        <div class="chat-icon">
          <img src="<?= get_bloginfo('template_url') ?>/assets/img/chat-icon.png" alt="Chat Online">
        </div>

        <span>Chat Online</span>
      </div>

      <div class="col search-top-box flex align-center">
        <span class="search-title">Encontre a sua próxima Viagem:</span>

        <form id="top-search-form" class="search-form" method="get" action="<?= get_bloginfo('url')  ?>/busca">
          <div class="search-box">
            <input type="text" name="busca" placeholder="Digite aqui">

            <button type="input" form="top-search-form" name="button"></button>
          </div>
        </form>
      </div>

    </div>
  </div>
</section>