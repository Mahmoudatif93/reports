@extends('layouts.web.app')

@section('content')


<main id="aa" class="has-sidebar">
    <div class="background-title">
        <figure>
            <img tyle="width: 100%;" src="{{ asset('web_files/images/our-products.png') }} " alt="">
        </figure>
        <div class="title">
            <h2 style="color:black;background-color:white">
                @lang('site.OurProducts')
            </h2>
        </div>
    </div>
    <div class="container" style="
    color: #28a745;">

        <div class="has-sidebarcontent">
            <div class="sidebar" style="width: 325px;    margin-inline: 324px;">
                <h4 style="color:black">
                    أحصل علي نتيجه التحاليل الخاصه بك
                </h4>
                <div class="row col-md-12" style="padding: 0;">
                    <div class="search col-md-8 ">
                        <form action="{{ route('fakka.products.index') }}" method="get">
                            <input style="  background-color: #b9ccdd;width: 531px" type="text" name="search"
                                class="input " placeholder="بحث بأستخدام رقم العميل" value="{{ request()->search }}">

                    </div>
                    <div class="search col-md-2 " style="margin-left:auto">
                        <figure class="">
                            <!-- <img src=" {{ asset('web_files/images/search.svg') }}" alt="">-->
                            <button style="    margin-inline: 147px;" type="submit" class="btn "><img width="50px"
                                    src=" {{ asset('web_files/images/search.svg') }}" alt=""></button>
                        </figure>
                        </form>
                    </div>

                    
                </div>


            </div>
          
        </div>
    </div>

    <div class="container">


                        @if (!empty($products))

                        <div class="item">


                            <table class="table table-bordered">

                                <thead>
                                    <tr class="bg-success">
                                        <th scope="col">#</th>
                                        <th scope="col">أسم العميل</th>

                                        <th scope="col">رقم العميل</th>
                                        <th>أسم التحليل</th>
                                <th>تاريخ التحليل</th>
                                        <th scope="col">نتيجه العميل(PDF)</th>


                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($products as $index=>$product)
                                    <tr  class="table-active">
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $product->client_name }}</td>

                                        <td>{{ $product->client_number}}</td>
                                        <td>{{ $product->examName}}</td>
                                    <td>{{ $product->created_at}}</td>
                                        <td><a style="color:red" href=" {{ asset('uploads/labs/'.$product->file) }}" target="_blank"
                                                class="btn btn-line-black btn-big  ">PDF Download</a></td>


                                    </tr>

                                    @endforeach
                                </tbody>

                            </table><!-- end of table -->

                        </div>
                        @endif


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
</main>





@endsection

@push('scripts')