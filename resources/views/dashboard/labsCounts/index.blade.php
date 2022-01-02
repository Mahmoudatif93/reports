@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1> عدد التحاليل </h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class="active"> عدد التحاليل </li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px"> عدد التحاليل <small>{{ $products->total() }}</small></h3>

                    <form action="{{ route('dashboard.labsCounts.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('site.search')" value="{{ request()->search }}">
                            </div>

                            <

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
                               
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($products->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                
                                <th>أسم التحليل</th>
                                <th >العدد</th>
                        
                             
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($products as $index=>$product)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                        
                                    <td>{{ $product->examName}}</td>

                                    
                                    <td style="color:red" class="btn btn-success">{{  App\examslabs::where('examName',$product->examName)->count()}}</td>
                          
                            
                                </tr>

                            @endforeach
                            </tbody>

                        </table><!-- end of table -->

                        {{ $products->appends(request()->query())->links() }}

                    @else

                        <h2>@lang('site.no_data_found')</h2>

                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
