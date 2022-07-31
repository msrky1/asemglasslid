<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <title>ASEM GLASSLİD</title>
    <meta name="description" content="" />
    <meta name="author" content="" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      rel="stylesheet"
      href="{{asset('assets')}}/css/A.base.css vendor.css,Mcc.x6hXdyddm6.css.pagespeed.cf.fgVtJjdQSI.css"
    />
    <link rel="stylesheet" href="{{asset('assets')}}/css/A.main.css.pagespeed.cf.AvUKjXfseS.css" />

    <script src="{{asset('assets')}}/js/modernizr.js pace.min.js.pagespeed.jc.25p1OtAvxP.js"></script>
    <script>
      eval(mod_pagespeed_BfWm8Sm_$S);
    </script>
    <script>
      eval(mod_pagespeed_fQQdHzzFCW);
    </script>

    <link
      rel="shortcut icon"
      href="{{asset('assets')}}/favicon.png"
      type="image/x-icon"
    />
    <link
      rel="icon"
      href="{{asset('assets')}}/favicon.png"
      type="image/x-icon"
    />
  </head>



  <body id="top">
    <div id="preloader">
      <div id="loader" class="dots-jump">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <header class="s-header">
        <div class="row">
          <div class="header-logo">
            <a class="site-logo" href="/"
              ><img src="{{asset('assets')}}/logo.png" alt="Homepage"
            /></a>
          </div>
          <nav class="header-nav-wrap">
            <ul class="header-nav">
              <li class="current">
                <a class="smoothscroll" href="#home" title="home">{{__('home.anasayfa')}}</a>
              </li>
              <li>
                <a class="smoothscroll" href="#about" title="about">{{__('home.hakkımızda')}}</a>
              </li>
              <li>
                <a class="smoothscroll" href="#services" title="services"
                  >{{__('home.neleryapıyoruz')}}</a
                >
              </li>
              <li>
                <a class="smoothscroll" href="#works" title="works"
                  >{{__('home.ürünler')}}</a
                >
              </li>
           
              <li>
                <a class="smoothscroll" href="#contact" title="contact"
                  >{{__('home.iletişim')}}</a
                >
              </li>
              <li>
                <select style="color: white; backgorund-color:black;">
                  <option style="color: red; background-color:black" selected>Türkçe</option>
                  <option style="color: red; background-color:black" value="1">İngilizce</option>
                 
                </select>
              </li>
            </ul>
          </nav>
          <a class="header-menu-toggle" href="#0">
            <span class="header-menu-icon"></span>
          </a>
        </div>
      </header>



 

       {{$slot}}





      <footer>
        <div class="row">
          <div class="col-full cl-copyright">
            <span>
              Copyright &copy;
             
              <script>
                document.write(new Date().getFullYear());
              </script>
              Tüm Hakları Saklıdır. 
              <i class="fa fa-heart" aria-hidden="true"></i> by
              <a href="/" target="_blank">Mahmut Sarıkaya</a>
            </span>
          </div>
        </div>
        <div class="cl-go-top">
          <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>
      </footer>
  
      <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
          <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
          </div>
          <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
              <div class="pswp__counter"></div>
              <button
                class="pswp__button pswp__button--close"
                title="Close (Esc)"
              ></button>
              <button
                class="pswp__button pswp__button--share"
                title="Share"
              ></button>
              <button
                class="pswp__button pswp__button--fs"
                title="Toggle fullscreen"
              ></button>
              <button
                class="pswp__button pswp__button--zoom"
                title="Zoom in/out"
              ></button>
              <div class="pswp__preloader">
                <div class="pswp__preloader__icn">
                  <div class="pswp__preloader__cut">
                    <div class="pswp__preloader__donut"></div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"
            >
              <div class="pswp__share-tooltip"></div>
            </div>
            <button
              class="pswp__button pswp__button--arrow--left"
              title="Previous (arrow left)"
            ></button>
            <button
              class="pswp__button pswp__button--arrow--right"
              title="Next (arrow right)"
            ></button>
            <div class="pswp__caption">
              <div class="pswp__caption__center"></div>
            </div>
          </div>
        </div>
      </div>
  
      <script src="{{asset('assets')}}/js/jquery-3.2.1.min.js"></script>
      <script src="{{asset('assets')}}/js/plugins.js"></script>
      <script src="{{asset('assets')}}/js/main.js"></script>
  
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
          dataLayer.push(arguments);
        }
        gtag("js", new Date());
  
        gtag("config", "UA-23581568-13");
      </script>
      
    </body>
  </html>
  