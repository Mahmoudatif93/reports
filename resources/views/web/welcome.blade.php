@extends('layouts.web.app')

@section('content')
@include('layouts.web.banners.banner')

<main>
  
    <div class="own-ingots">
        <div class="container">
            <div class="subtitle">
                <h3>
                   
                </h3>
            </div>
            <p>
                
            </p>
           
        </div>
    </div>
    <div class="products">
        <div class="container">
       
    

            <a href="{{ route('fakka.products.index') }}" class="btn outline-btn">
                @lang('site.OurProducts')

            </a>


        </div>
    </div>



    <div class="contact">
        <div class="container">
            <div class="title">
                <h2>
                    @lang('site.contacth')
                </h2>
            </div>
            <p>
                @lang('site.contactp')
            </p>
            <a href="{{ route('fakka.contactus.index') }}">
                @lang('site.Contactus')
            </a>
        </div>
    </div>



    <!-- <pre id="tab">This    text      has    lots of     spaces</pre>-->


</main>





<script src="{{ asset('web_files/js/slick.min.js') }} "></script>



<link rel="stylesheet" href="{{ asset('dashboard_files/plugins/noty/noty.css') }}">
<script src="{{ asset('dashboard_files/plugins/noty/noty.min.js') }}"></script>



















<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection

@push('scripts')
