@extends('layouts.baseone')

@section('content')
    
<section
id="home"
class="s-home page-hero target-section"
data-parallax="scroll"

data-natural-width="3000"
data-natural-height="2000"
data-position-y="center"
>
<div class="shadow-overlay"></div>
<div class="home-content">
  <div class="row home-content__main">
    <h1>
      <br />
  ASEM <br />
  GLASSLİD
    </h1>
    <div class="home-content__button">
      <a href="#about" class="smoothscroll btn btn-animatedbg">
        {{__('home.hakkımızda')}} 
      </a>
    </div>
    <div class="home-content__video">
      <video controls loop style="width:450px;">

                  <source src="{{asset('assets/images/gif.mp4')}}" type="video/mp4">
                  </video>
    </div>
  </div>
  <div class="home-content__scroll">
    <a href="#about" class="scroll-link smoothscroll"> {{__('home.aşağı')}} </a>
  </div>
</div>
<ul class="home-social">
  <li>
    <a href="#0"
      ><i class="fab fa-facebook-f" aria-hidden="true"></i
      ><span>Facebook</span></a
    >
  </li>
  {{-- <li>
    <a href="#0"
      ><i class="fab fa-twitter" aria-hidden="true"></i
      ><span>Twiiter</span></a
    >
  </li> --}}
  <li>
    <a href="#0"
      ><i class="fab fa-instagram" aria-hidden="true"></i
      ><span>Instagram</span></a
    >
  </li>
 
</ul>
</section>

<section id="about" class="s-about target-section">
<div class="row section-header" data-aos="fade-up">
  <div class="col-full">
    <h3 data-num="01" class="subhead">{{__('home.hakkımızda')}}</h3>
    <p>
       {{__('home.hakkımızda1')}}
    </p>
    <p class="lead">
      {{__('home.hakkımızda2')}}
    </p>
  </div>
</div>
<div class="row about-process block-1-2 block-tab-full">
  <div class="col-block item-process" data-aos="fade-up">
    <div class="item-process__header item-process__header--planning">
      <h3>{{__('home.hakkımızda3')}}</h3>
    </div>
    <p>
      {{__('home.hakkımızda4')}}
    </p>
  </div>
  <div class="col-block item-process" data-aos="fade-up">
    <div class="item-process__header item-process__header--branding">
      <h3>{{__('home.hakkımızda5')}}</h3>
    </div>
    <p>
      {{__('home.hakkımızda6')}}
    </p>
  </div>
  <div class="col-block item-process" data-aos="fade-up">
    <div
      class="item-process__header item-process__header--implementation"
    >
      <h3>{{__('home.hakkımızda7')}}</h3>
    </div>
    <p>
      {{__('home.hakkımızda8')}}
    </p>
  </div>
  <div class="col-block item-process" data-aos="fade-up">
    <div class="item-process__header item-process__header--documentation">
      <h3>{{__('home.hakkımızda9')}}</h3>
    </div>
    <p>
      {{__('home.hakkımızda10')}}
    </p>
  </div>
</div>
</section>

<section id="services" class="s-services target-section">
<div class="row section-header" data-aos="fade-up">
  <div class="col-full">
    <h3 data-num="02" class="subhead">{{__('home.faaliyet')}}</h3>
    {{-- <h1 class="display-1 display-1--light">
      {{__('home.faaliyet1')}}
    </h1>
    <p class="lead lead-light">
      {{__('home.faaliyet2')}}
    </p> --}}
  </div>
</div>
<div class="row services-list block-1-3 block-m-1-2 block-tab-full">
  <div class="col-block item-service" data-aos="fade-up">
    <h4>  {{__('home.faaliyet3')}}</h4>
    <p>
      {{__('home.faaliyet4')}}
    </p>
  </div>
  <div class="col-block item-service" data-aos="fade-up">
    <h4>  {{__('home.faaliyet5')}}</h4>
    <p>
      {{__('home.faaliyet6')}}
    </p>
  </div>
  <div class="col-block item-service" data-aos="fade-up">
    <h4>  {{__('home.faaliyet7')}}</h4>
    <p>
      {{__('home.faaliyet8')}}
    </p>
  </div>
  <div class="col-block item-service" data-aos="fade-up">
    <h4>  {{__('home.faaliyet9')}}</h4>
    <p>
      {{__('home.faaliyet10')}}
    </p>
  </div>
  <div class="col-block item-service" data-aos="fade-up">
    <h4>  {{__('home.faaliyet11')}}</h4>
    <p>
      {{__('home.faaliyet12')}}
    </p>
  </div>
  <div class="col-block item-service" data-aos="fade-up">
    <h4>  {{__('home.faaliyet14')}}</h4>
    <p>
      {{__('home.faaliyet13')}}
    </p>
  </div>
  <div class="col-block item-service" data-aos="fade-up">
    <h4>  {{__('home.faaliyet15')}}</h4>
    {{-- <p>
      {{__('home.faaliyet15')}}
    </p> --}}
  </div>
</div>
</section>

<section id="works" class="s-works target-section">
<div class="row section-header" data-aos="fade-up">
  <div class="col-full">
    <h3 data-num="03" class="subhead">  {{__('home.projeler')}}</h3>
    <h1 class="display-1">
      {{__('home.projeler')}}
    </h1>
  </div>
</div>
<div class="portfolio block-1-4 block-m-1-3 block-tab-1-2 collapse">
  
  <div class="col-block item-folio" data-aos="fade-up">
    <div class="item-folio__thumb">
      <a
        href="{{asset('assets')}}/images/product/ctype1.jpg"
        class="thumb-link"
        title="{{__('home.projeler1')}}"
        data-size="1050x700"
      >
        <img
          src="{{asset('assets')}}/images/product/ctype1.jpg"
          srcset="
          {{asset('assets')}}/images/product/ctype1.jpg    1x,
          {{asset('assets')}}/images/product/ctype1.jpg 2x
          "
          alt=""
        />
      </a>
    </div>
    <div class="item-folio__text">
      <h3 class="item-folio__title">{{__('home.projeler1')}}</h3>
    </div>
    <a
      href="/"
      class="item-folio__project-link"
      title="Project link"
    >
    {{__('home.projeler')}}
    </a>
    <div class="item-folio__caption">
      <p>
        {{__('home.projeler1')}}
      </p>
    </div>
  </div>
  <div class="col-block item-folio" data-aos="fade-up">
    <div class="item-folio__thumb">
      <a
        href="{{asset('assets')}}/images/product/ctype12.jpg"
        class="thumb-link"
        title="  {{__('home.projeler2')}}"
        data-size="1050x700"
      >
        <img
          src="{{asset('assets')}}/images/product/ctype12.jpg"
          srcset="
          {{asset('assets')}}/images/product/ctype12.jpg 1x,
          {{asset('assets')}}/images/product/ctype12.jpg                           2x
          "
          alt=""
        />
      </a>
    </div>
    <div class="item-folio__text">
      <h3 class="item-folio__title">{{__('home.projeler2')}}</h3>
    </div>
    <a
      href="/"
      class="item-folio__project-link"
      title="Project link"
    >
    {{__('home.projeler')}}
    </a>
    <div class="item-folio__caption">
      <p>
        {{__('home.projeler2')}}
      </p>
    </div>
  </div>
  <div class="col-block item-folio" data-aos="fade-up">
    <div class="item-folio__thumb">
      <a
        href="{{asset('assets')}}/images/product/gtype.jpg"
        class="thumb-link"
        title="{{__('home.projeler')}}"
        data-size="1050x700"
      >
        <img
          src="{{asset('assets')}}/images/product/gtype.jpg"
          srcset="
          {{asset('assets')}}/images/product/gtype.jpg    1x,
          {{asset('assets')}}/images/product/gtype.jpg 2x
          "
          alt=""
        />
      </a>
    </div>  
    <div class="item-folio__text">
      <h3 class="item-folio__title">{{__('home.projeler3')}}</h3>
    </div>
    <a
      href="/"
      class="item-folio__project-link"
      title="Project link"
    >
    {{__('home.projeler')}}
    </a>
    <div class="item-folio__caption">
      <p>
        {{__('home.projeler3')}}
      </p>
    </div>
  </div>
 
</div>
<div class="testimonials-wrap" data-aos="fade-up">
  <div class="row">
    <div class="col-full testimonials-header">
      <h2 class="h1">{{__('home.musteriler')}}</h2>
    </div>
  </div>
  <div class="row testimonials">
    <div class="col-full testimonials__slider">
      <div class="testimonials__slide">
        <span class="testimonials__icon"></span>
        <p>
          {{__('home.musteriler1')}}
        </p>
        <div class="testimonials__author">
          <img
            src="{{asset('assets')}}/images/avatars/xuser-01.jpg.pagespeed.ic.TQ57ViZCls.jpg"
            alt="Author image"
            class="testimonials__avatar"
          />
          <span class="testimonials__name">{{__('home.musterilerad1')}}</span>
          <span class="testimonials__position">{{__('home.musterilerad2')}}</span>
        </div>
      </div>
      <div class="testimonials__slide">
        <span class="testimonials__icon"></span>
        <p>
          {{__('home.musterilerad3')}}
        </p>
        <div class="testimonials__author">
          <img
            src="{{asset('assets')}}/images/avatars/xuser-05.jpg.pagespeed.ic.VeExVGrouX.jpg"
            alt="Author image"
            class="testimonials__avatar"
          />
          <span class="testimonials__name">{{__('home.musterilerad4')}}</span>
          <span class="testimonials__position">{{__('home.musterilerad5')}}</span>
        </div>
      </div>
      <div class="testimonials__slide">
        <span class="testimonials__icon"></span>
        <p>
          {{__('home.musterilerad6')}}
        </p>
        <div class="testimonials__author">
          <img
            src="{{asset('assets')}}/images/avatars/xuser-02.jpg.pagespeed.ic.h9SZyNXnWw.jpg"
            alt="Author image"
            class="testimonials__avatar"
          />
          <span class="testimonials__name">{{__('home.musterilerad7')}}</span>
          <span class="testimonials__position">{{__('home.musterilerad8')}}</span>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section id="clients" class="s-clients target-section">
<div class="row section-header" data-aos="fade-up">
  <div class="col-full">
    <h3 data-num="04" class="subhead">{{__('home.çalıştığımız')}}</h3>
    <h1 class="display-1 display-1--light">
      {{__('home.çalıştığımız2')}}
    </h1>
  </div>
</div>
<div
  class="row clients-list block-1-4 block-tab-1-3 block-mob-1-2"
  data-aos="fade-up"
>
  <div class="col-block item-client">
    <a href="#0">
      <img src="{{asset('assets')}}/images/clients/icon-atom.svg" alt="" />
    </a>
  </div>
  <div class="col-block item-client">
    <a href="#0">
      <img src="{{asset('assets')}}/images/clients/icon-dropbox.svg" alt="" />
    </a>
  </div>
  <div class="col-block item-client">
    <a href="#0">
      <img src="{{asset('assets')}}/images/clients/icon-firefox.svg" alt="" />
    </a>
  </div>
  <div class="col-block item-client">
    <a href="#0">
      <img src="{{asset('assets')}}/images/clients/icon-github.svg" alt="" />
    </a>
  </div>
  <div class="col-block item-client">
    <a href="#0">
      <img src="{{asset('assets')}}/images/clients/icon-mozilla.svg" alt="" />
    </a>
  </div>
  <div class="col-block item-client">
    <a href="#0">
      <img src="{{asset('assets')}}/images/clients/icon-linux.svg" alt="" />
    </a>
  </div>
  <div class="col-block item-client">
    <a href="#0">
      <img src="{{asset('assets')}}/images/clients/icon-ubuntu.svg" alt="" />
    </a>
  </div>
  <div class="col-block item-client">
    <a href="#0">
      <img src="{{asset('assets')}}/images/clients/icon-sass.svg" alt="" />
    </a>
  </div>
</div>
</section>

<section id="stats" class="s-stats">
<div
  class="row stats-block block-1-4 block-m-1-2 block-mob-full"
  data-aos="fade-up"
>
  <div class="col-block item-stats">
    <div class="item-stats__count">213</div>
    <h5>{{__('home.mutlu')}}</h5>
  </div>
  <div class="col-block item-stats">
    <div class="item-stats__count">179</div>
    <h5>{{__('home.mutlu2')}}</h5>
  </div>
  <div class="col-block item-stats">
    <div class="item-stats__count">35</div>
    <h5>{{__('home.mutlu3')}}</h5>
  </div>
  <div class="col-block item-stats">
    <div class="item-stats__count">2319</div>
    <h5>{{__('home.mutlu4')}}</h5>
  </div>
</div>
</section>

<section id="contact" class="s-contact target-section">
<div class="row section-header" data-aos="fade-up">
  <div class="col-full">
    <h3 data-num="05" class="subhead">{{__('home.bizeulaşın')}}</h3>
    <h1 class="display-1 display-1--light">
      {{__('home.bizeulaşın2')}}
      <a href="/cdn-cgi/l/email-protection#d0f3e0"
        ><span
          class="__cf_email__"
          data-cfemail="2c44494040436c5f584940404d5e024f4341"
          >{{__('home.email')}}</span
        ></a
      >
    </h1>
  </div>
</div>
<div class="row contact-infos">
  <div
    class="col-five md-seven tab-full contact-address"
    data-aos="fade-up"
  >
    <h4>{{__('home.hakkımızda')}}</h4>
    <p>
      {{__('home.hakkımızdakısa')}}
    </p>
  </div>
  <div
    class="col-three md-five tab-full contact-social"
    data-aos="fade-up"
  >
    <h4>{{__('home.takipedin')}}</h4>
    <ul class="contact-list">
      <li><a href="#0">Facebook</a></li>
      <li><a href="#0">Twitter</a></li>
      <li><a href="#0">Instagram</a></li>
    </ul>
  </div>
  <div class="col-four md-six tab-full contact-number" data-aos="fade-up">
    <h4>{{__('home.iletişim')}}</h4>
    <ul class="contact-list">
      <li>
        <a href="/cdn-cgi/l/email-protection#062536"
          ><span
            class="__cf_email__"
            data-cfemail="4d24232b220d3e392821212c3f632e2220"
            >Email</span
          ></a
        >
      </li>
      <li><a href="tel:197-543-2345">0534 491 48 01 </a></li>
      <li><a href="tel:197-123-9876">0534 491 48 01</a></li>
    </ul>
  </div>
</div>
<div class="row contact-bottom">
  <div class="col-five tab-full contact-button" data-aos="fade-up">
    <a href="#about" class="smoothscroll btn btn-animatedbg">
      {{__('home.dahafazla')}}
    </a>
  </div>
  <div class="col-six tab-full contact-subscribe" data-aos="fade-up">
    <h4>{{__('home.gonder')}}</h4>
    <form id="mc-form" class="group mc-form" novalidate="">
      <input
        type="email"
        value=""
        name="EMAIL"
        class="email"
        id="mc-email"
        placeholder="Email"
        required=""
      />
      <input type="submit" name="subscribe" value="{{__('home.gonder')}}" />
      <label for="mc-email" class="subscribe-message"></label>
    </form>
  </div>
</div>
</section>
@endsection