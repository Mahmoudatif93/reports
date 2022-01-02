@extends('layouts.web.app')

@section('content')

<main class="contact-us">
    <div class="container">
        <div class="contact-body">
            <div class="title">
                <h2>
                تواصل معنا
                </h2>
            </div>
            @include('partials._errors')
            @if(session()->get('success') !=null)
            {{ session()->get('success') }}
            @endif
            <form action="{{ route('fakka.contactus.store') }}" method="post" enctype="multipart/form-data">

                {{csrf_field() }}
                {{ method_field('post') }}
                <div class="fields">
                    <div class="field">
                        <input class="input input-custom " type="text" name="name" id="" placeholder="الأسم">
                    </div>
                  
                    <div class="field">
                        <input class="input input-custom " type="number" name="phone" id="" placeholder="رقم التلفون">
                    </div>
                    <div class="field">
                        <input class="input input-custom " type="text" name="examName" id="examName" placeholder="أسم التحليل المطلوب">
                    </div>
              
                    <div class="field big">
                        
                        <textarea id="message" name="examDetails" class="input input-custom "  rows="4" cols="50"
                        placeholder="ملاحظات"
                        
                        ></textarea>
                    </div>
                </div>
                <div type="submit" class="buttons">
                    <button class="btn blue-btn">
                        @lang('site.Send')
                    </button>
                </div>

            </form>

        </div>
    </div>

    <div class="contact" style="margin-top: 50px;">
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


</main>



@endsection

@push('scripts')