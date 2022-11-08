
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

    <!-- Demo styles -->
    <style>
    .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
.float-text{
	position:fixed;
	width:150px;
	height:60px;
	bottom:40px;
	right:110px;
	background-color:#25d366;
	color:#FFF;
 
 
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float-text{
	margin-top:16px;
  font-size:15px
}

      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>
  </head>

  <body>
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="float-text">
          <h6 class="my-float-text"> {{__('home.siparis')}} </h6>   
          </div>
          <img src="{{asset('assets/images/product')}}/ctype1.jpg"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
          <a href="https://api.whatsapp.com/send?phone=5414917228" class="float" target="_blank">
          <i class="fa fa-whatsapp my-float"></i>
            </a> </div>
        <div class="swiper-slide">
          <div class="float-text">
            <h6 class="my-float-text"> {{__('home.siparis')}} </h6>   
            </div>
          <img src="{{asset('assets/images/product')}}/ctype12.jpg"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
          <a href="https://api.whatsapp.com/send?phone=5414917228" class="float" target="_blank">
          <i class="fa fa-whatsapp my-float"></i>
            </a>  </div>
        <div class="swiper-slide">
          <div class="float-text">
            <h6 class="my-float-text"> {{__('home.siparis')}} </h6>   
            </div>
          <img src="{{asset('assets/images/product')}}/gtype.jpg"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <a href="https://api.whatsapp.com/send?phone=5414917228" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
            </a>  </div>
    
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
