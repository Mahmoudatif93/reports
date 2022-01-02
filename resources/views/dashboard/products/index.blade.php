@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>التحاليل</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class="active">التحاليل</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">التحاليل <small>{{ $products->total() }}</small></h3>

                    <form action="{{ route('dashboard.products.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('site.search')" value="{{ request()->search }}">
                            </div>

                            <

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
                                @if (auth()->user()->hasPermission('create_products'))
                                    <a href="{{ route('dashboard.products.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> اضافه</a>
                                @else
                                    <a href="#" class="btn btn-primary disabled"><i class="fa fa-plus"></i> اضافه</a>
                                @endif
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
                                <th>أسم العميل</th>
                                <th>رقم العميل</th>
                                <th>أسم التحليل</th>
                                <th>تاريخ التحليل</th>
                                <th>نتيجه التحليل(PDF)</th>
                        
                                <th>@lang('site.action')</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($products as $index=>$product)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $product->client_name }}</td>
    
                                    <td>{{ $product->client_number}}</td>
                                    <td>{{ $product->examName}}</td>
                                    <td>{{ $product->created_at}}</td>
                                    <td><a href=" {{ asset('uploads/labs/'.$product->file) }}" target="_blank" class="btn btn-line-black btn-big  ">PDF Download</a></td>
                          
                                     <!--<td>{{ $product->diameter }}</td>-->
                                    <td>
                                        @if (auth()->user()->hasPermission('update_products'))
                                            <a href="{{ route('dashboard.products.edit', $product->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>
                                        @else
                                            <a href="#" class="btn btn-info btn-sm disabled"><i class="fa fa-edit"></i> @lang('site.edit')</a>
                                        @endif
                                        @if (auth()->user()->hasPermission('delete_products'))
                                            <form action="{{ route('dashboard.products.destroy', $product->id) }}" method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('site.delete')</button>
                                            </form><!-- end of form -->
                                        @else
                                            <button class="btn btn-danger btn-sm disabled"><i class="fa fa-trash"></i> @lang('site.delete')</button>
                                        @endif
                                    </td>
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
