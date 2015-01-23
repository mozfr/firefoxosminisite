<main role="main">
  <header class="main-header">
    <div class="container">
      <h1>
        <img class="js" src="media/img/firefox-os-wordmark.png" data-processed="true" data-src="media/img/firefox-os-wordmark.png" data-high-res="true" alt="Firefox OS" height="70" width="313">
        <noscript>
          <img src="media/img/firefox-os-wordmark.png" width="313" alt="Firefox OS" height="70">
        </noscript>
      </h1>
      <h2>Regardez l’avenir</h2>
    </div>
  </header>

  <section class="promo-grid-wrapper">
    <div class="promo-grid-inner">
      <ul class="promo-grid  stagger reveal">
        <li id="promo-1" class="item promo-large-portrait mission" data-name="Application du jour" tabindex="0">
          <h2 class="primary go">L’appli du jour</h2>
          <img class="primary go" src="media/img/logo-marketplace.png" alt="Logo du Firefox Marketplace">
          <a class="panel-link" href="http://blog.mozfr.org/post/2015/01/lecture-de-documents-PDF-DOC-ODT-Firefox-OS" rel="external">
            <div class="secondary">
              <h3>La communauté vous présente ses applications favorites sur Firefox&nbsp;OS.</h3>
              <p class="more">Découvrez l’application</p>
            </div>
          </a>
        </li>

        <li id="promo-2" class="item promo-small-landscape twt">
          <div class="twt-container">
            <p class="twt-text" id="twt-body">
              <?=$tweet_text?>
              <a href="https://twitter.com/<?=$tweet[$tweet_id]['screen_name']?>/status/<?=$tweet_id?>" title="<?=$tweet_text?>"><span class="ellipsis"></span></a>
            </p>
            <div class="twt-actions">
              <a href="https://twitter.com/<?=$tweet[$tweet_id]['screen_name']?>" class="twt-account" title="Compte Twitter <?=$tweet[$tweet_id]['name']?>" data-name="Compte Twitter de <?=$tweet[$tweet_id]['name']?>"></a>
              <a href="https://twitter.com/intent/tweet?in_reply_to=<?=$tweet_id?>" class="twt-reply" title="Répondre" data-name="Répondre au tweet de <?=$tweet[$tweet_id]['name']?>">Répondre</a>
              <a href="https://twitter.com/intent/retweet?tweet_id=<?=$tweet_id?>" class="twt-rt" title="Retweeter" data-name="Retweeter le tweet de <?=$tweet[$tweet_id]['name']?>">Retweeter</a>
            </div>
          </div>
        </li>

        <li id="promo-5" class="item promo-small-landscape firefox-download" tabindex="0">
          <div class="primary">
            <h2 class="go">Assistance</h2>
            <img src="media/img/mozfr-logo.png" alt="" height="140" width="132">
          </div>
          <div class="secondary">
            <div id="download-button-desktop-release" class="download-button download-button-simple">
              <ul role="presentation" class="download-list">
                <li>
                  <a class="download-link" href="http://blog.mozfr.org/pages/Assistance-de-Firefox-OS" rel="external">
                    <span class="download-content">
                      <span class="download-subtitle">Demandez de l'aide à la communauté</span>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li id="promo-6" class="item promo-large-landscape mamie-fox" tabindex="0" data-name="Mamie fox">
          <img class="primary go" src="media/img/mamie-fox.png?27-10-2014" alt="Mamie fox">
          <h2 class="primary go">Mamie Fox</h2>
          <a class="panel-link" href="http://blog.mozfr.org/post/2015/01/Mamie_Fox_le_Fox_annonce_importantes_nouveautes_Firefox_OS_CES_Las_Vegas" rel="external">
            <div class="secondary">
              <h3>Bonjour&nbsp;! Je suis Mamie Fox&nbsp;!</h3>
              <p class="more">Découvrons ensemble Internet, Firefox&nbsp;OS et le logiciel libre</p>
            </div>
          </a>
        </li>
        <li id="promo-8" class="item promo-small-landscape twt" data-name="Dernier statut Facebook">
          <div class="twt-container">
            <p class="twt-text" id="twt-body">
              <?=$fb_res['status']?>
              <a href="https://www.facebook.com/firefoxosfr/posts/<?=$fb_res['id']?>" title="<?=$fb_res['status']?>"><span class="ellipsis"></span></a>
            </p>
            <div class="twt-actions">
              <a href="https://www.facebook.com/firefoxosfr/" class="twt-account" title="Firefox OS FR sur Facebook" data-name="Lien vers le compte Facebook"></a>
            </div>
          </div>
        </li>
        <li id="promo-9" class="item promo-small-landscape volunteer" data-name="Firefox OS pour les développeurs">
          <a class="panel-link" href="https://developer.mozilla.org/fr/Firefox_OS" rel="external">
            <h2>Firefox&nbsp;OS pour les développeurs</h2>
          </a>
        </li>
        <li id="promo-10" class="item promo-large-portrait foxprimez-vous" tabindex="0" data-name="La parole est aux mozilliens">
        <img class="primary go" src="media/img/foxprimez-vous.png" alt="Le renard s’exprime publiquement">
          <h2 class="primary go">Fox’primez-vous</h2>
          <a class="panel-link" href="http://blog.mozfr.org/post/2015/01/Communaute-Firefox-OS-Rejoignez-nous" rel="external">
            <div class="secondary">
              <h3>Prenez la parole et la communauté vous répond&nbsp;!</h3>
              <p class="more">Apprendre à coder, qu'en pensez-vous ?</p>
            </div>
          </a>
        </li>
        <li id="promo-11" class="item promo-large-landscape" tabindex="0" data-name="Vidéo Youtube">
          <div id="player" class="youtube-video"></div>
          <h2 class="primary go youtube-logo">Chaîne YouTube<br>Firefox OS FR</h2>
          <a class="panel-link youtube-logo" href="https://www.youtube.com/channel/UCbkLDekPQHxeTJZ8jPb8LBw" rel="external">
            <div class="secondary">
              <h3>Découvrez Firefox&nbsp;OS en vidéo sur notre chaîne.</h3>
              <p class="more">Découvrez la chaîne</p>
            </div>
          </a>
        </li>
        <li id="promo-12" class="item promo-large-landscape" data-name="Où acheter un téléphone" tabindex="0">
          <h2 class="primary go">Où acheter un téléphone&nbsp;?</h2>
          <img class="primary go" src="media/img/openc.png" alt="Téléphone ZTE Open sous Firefox OS">
          <a class="panel-link" href="https://www.mozilla.org/fr/firefox/os/devices/" rel="external">
            <div class="secondary">
              <h3>Découvrez les différentes offres de téléphones Firefox&nbsp;OS.</h3>
              <p class="more">J’achète le mien !</p>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>
</main>
</div><!-- close #wrapper -->
