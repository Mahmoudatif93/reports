

<footer>
        <div class="container">
            <div class="columns row">
                <div class="logo col-sm">
                  
                </div>
              
                <div class="col-sm">
                    <h4>@lang('site.Contactinfo') </h4>
                    <ul>
                        <li>
                        <h2 style="color:black;font-size:25px">  @lang('site.Management') : 01223455021/
                        0483632656 </h2>
                        </li>
                        <li>
                        <h2 style="color:black;font-size:25px">  العنوان : منشأه سلطان محلات الذهب-منزل د/ جمال خطاب </h2>
                        </li>
                       
                    </ul>
                </div>
                <div class="col-sm">
                    <h4>{{--@lang('site.Socialmedia')--}} </h4>
                    <div class="social">

                        <a href="https://www.facebook.com/">
                            <figure>
                                <svg viewBox="0 0 23.469 23.469">
                                    <use xlink:href="{{ asset('web_files/images/sprite.svg#fb') }} "></use>
                                </svg>
                            </figure>
                        </a>
                        <a href="https://www.linkedin.com/company/">
                            <figure>
                                <svg viewBox="0 0 23.075 23.075">
                                    <use xlink:href="{{ asset('web_files/images/sprite.svg#linkedin') }} "></use>
                                </svg>
                            </figure>
                        </a>
                        <a href="https://www.instagram.com/">
                            <figure>
                                <svg viewBox="0 0 23.1 23.1">
                                    <use xlink:href="{{ asset('web_files/images/sprite.svg#insta') }} "></use>
                                </svg>
                            </figure>
                        </a>
                        <a href="https://www.youtube.com/channel/UC6ripzcXn1xj7ItFReNG7xw">
                            <figure>
                                <svg viewBox="0 0 32.999 23">
                                    <use xlink:href="{{ asset('web_files/images/sprite.svg#youtube') }} "></use>
                                </svg>
                               <!-- <i class="fa fa-youtube" aria-hidden="true"></i>-->
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <div class="copyrightss" style="
                

    color: #015CAB;
    font-size: 18px;  
    margin-inline: 290px;
      
            ">
             
             
               
            </div>
        </div>
    </footer>

    <script src=" {{ asset('web_files/js/jquery-1.11.0.min.js') }}"></script>
    <script src=" {{ asset('web_files/js/customScript.js') }}"></script>
    <script src="{{ asset('web_files/js/slick.min.js') }} "></script>

  

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{--noty--}}
<link rel="stylesheet" href="{{ asset('dashboard_files/plugins/noty/noty.css') }}">

    <script src="{{ asset('dashboard_files/plugins/noty/noty.min.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>



@stack('scripts')
</body>

</html>
