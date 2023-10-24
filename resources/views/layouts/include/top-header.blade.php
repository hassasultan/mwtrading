{{-- <section class="top-notification-bar" >
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <ul class="notification-entry">
            <li class="notify-wrap">
              <div class="text-wrap"><div class="richtext">
                  <p>Email:-</p>
                  <p><a href="mailto:demo@demo.com" title="mailto:demo@demo.com">demo@demo.com</a></p>
                </div></div>
            </li>
            <li class="notify-wrap notify-wrap-center">
             <div class="richtext">

              <p>Today's  deal sale off 50% off <a href="/collections/bags-kit" title="Bags & kit">Shop now!</a></p>
             </div>
            </li>
            <li class="notify-wrap notify-wrap-right">
              <div class="text-wrap"><div class="richtext">
                  <p>call now:-<a href="tel:(+63) 0123 456 789" title="tel:(+63) 0123 456 789">(+63) 0123 456 789</a></p>
                </div></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- <button class="notification-close-btn"><i class="ri-close-line"></i></button> -->
</section>
<script>
    var nToggle = $('.notification-close-btn');
    nToggle.on('click', function() {
      $('.top-notification-bar').slideToggle();
    });
  </script>

  <style>
    .top-notification-bar .container-fluid{
      padding-right: 40px;
      padding-left: 40px;
    }
    @media(max-width: 1599px){
      .top-notification-bar .container-fluid{
        padding-right: 30px;
        padding-left: 30px;
      }
    }
    @media(max-width: 1199px){
      .top-notification-bar .container-fluid{
        padding-right: 12px;
        padding-left: 12px;
      }
    }
    .top-notification-bar {
      position: relative;
      background-color: #333333;
      z-index: 1;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }
    .top-notification-bar ul {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 17px 0;
    }

    /* text css */
    .top-notification-bar ul li.notify-wrap {
      width: 20%;
    }
    .top-notification-bar ul li.notify-wrap.notify-wrap-right {
      width: 20%;
    }
    .top-notification-bar ul li.notify-wrap .text-wrap .richtext,
    .top-notification-bar ul li.notify-wrap .text-wrap{
      display: flex;
      align-items: center;
    }
    .top-notification-bar ul li.notify-wrap:not(:first-child) .text-wrap{
      justify-content: flex-end;
    }
    .top-notification-bar ul li.notify-wrap.notify-wrap-center{
      width: 60%;
      text-align: center;
      justify-content: center;
    }
    .top-notification-bar ul li.notify-wrap .richtext:not(:last-child) {padding-right: 15px;}
    .top-notification-bar ul li.notify-wrap .richtext a,
    .top-notification-bar ul li.notify-wrap .richtext p {
      color: #ffffff;
      font-size: 16px;
      font-weight: 600;
      text-transform: uppercase;
    }
    .top-notification-bar ul li.notify-wrap .richtext a {
      text-transform: none;
    }
    .top-notification-bar ul li.notify-wrap.notify-wrap-center .richtext a {
      color: var(--font-color-primary);
    }
    .top-notification-bar ul li.notify-wrap .richtext a:hover{
      color: var(--font-color-primary);
    }
    .top-notification-bar ul li.notify-wrap .richtext a:not(:first-child){padding-left: 30px;}
    .top-notification-bar ul li.notify-wrap .richtext i{
      color: var(--font-color-primary);
      display: flex;padding-right: 10px;font-size: 18px;
    }
    .notification-close-btn{
      position: absolute;right: 60px;bottom: 50%;
      font-size: 20px;
      line-height: 1;
      transform: translateY(50%);
      color: #ffffff;
    }
    .top-notification-bar ul li.notify-wrap .slider-text .richtext{
      display: flex;
      align-items: center;
      justify-content: center;
    }
    @media(max-width: 1599px){
      .notification-close-btn{right: 15px;}
    }
    @media(max-width: 1199px){
      .top-notification-bar ul {
        padding: 10px 0px;
      }
      .top-notification-bar ul li.notify-wrap,
      .top-notification-bar ul li.notify-wrap.notify-wrap-center,
      .top-notification-bar ul li.notify-wrap.notify-wrap-right {
        width: 33.33%;
      }
      .top-notification-bar ul li.notify-wrap .richtext a,
      .top-notification-bar ul li.notify-wrap .richtext p {
        font-size: 14px;
      }
    }
    @media (max-width: 991px) {
      .top-notification-bar ul li.notify-wrap {
        display: none;
      }
      .top-notification-bar ul li.notify-wrap.notify-wrap-center {
        display: contents;
      }
    }
  </style> --}}
