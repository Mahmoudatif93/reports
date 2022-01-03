@extends('layouts.dashboard.app')
<style>
        @media print {
            #print_Button {
                display: none;
            }
        }
    </style>
@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.comps')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.comps')</a></li>
                <li class="active">@lang('site.comps')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">@lang('site.comps') <small>{{ $comps->total() }}</small></h3>

                    <form action="{{ route('dashboard.comps.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('site.search')" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
                                @if (auth()->user()->hasPermission('create_comps'))
                                    <a href="{{ route('dashboard.comps.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</a>
                                @else
                                    <a href="#" class="btn btn-primary disabled"><i class="fa fa-plus"></i> @lang('site.add')</a>
                                @endif
                            </div>
                         

                        </div>
                    </form><!-- end of form -->
                    <div class="row">
                    <div class="col-12">
                                <form action="{{ route('dashboard.importcamp') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                        {{ method_field('post') }}
                        <div class="col-md-6">
                                    <input type="file" name="file" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                    <button type="submit"  class="btn btn-success"> @lang('site.ImportCampFile')</button>
                                    </div>
                                </form>
                             </div>
                             </div>
                </div><!-- end of box header -->
              
                <div class="card-body">
                <a target="_blank" class="btn btn-warning mt-3 mr-5 btn-lg btn-block" href="{{ route('dashboard.exportsum') }}">Excel</a>




                <div class="table-responsive"  id="print">
                    @if ($comps->count() > 0)
               
                    <table  class="table table-hover" style=" text-align: center">

                            <thead>
                            <tr>
                       
                                <th>sno</th>
                                <th>type</th>
                                <th>compno</th>
                                <th>year</th>
                                <th>date</th>
                                <th>city</th>
                                <th>cuntary</th>
                                <th>opd</th>
                                <th>iol</th>
                                <th>phaco</th>
                                <th>glasses</th>
                                <th>med_tablet</th>
                                
                                <th>med_drops</th>
                                <th>photo</th>
                                <th>photo_date</th>
                                <th>vedio</th>
                                <th>vedio_date</th>
                                <th>camp_team</th>
                                <th>start_date</th>
                                <th>end_date</th>
                                <th>sponsors</th>
                                <th>medical report</th>
                                <th>static report</th>
                                <th>final report</th>
                                
                                <th>@lang('site.action')</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($comps as $index=>$category)
                                <tr>
                                   
                                    <td>{{ $category->sno }}</td>
                                    <td>{{ $category->type }}</td>
                                    <td>{{ $category->compno }}</td>
                                    <td>{{ $category->year }}</td>
                                    <td>{{ $category->date }}</td>
                                    <td>{{ $category->city }}</td>
                                    <td>{{ $category->cuntary }}</td>
                                    <td>{{ $category->opd }}</td>
                                    <td>{{ $category->iol }}</td>
                                    <td>{{ $category->phaco }}</td>
                                    <td>{{ $category->glasses }}</td>
                                    <td>{{ $category->med_tablet }}</td>
                                    <td>{{ $category->med_drops }}</td>
                                    <td>{{ $category->photo }}</td>

                                    <td>{{ $category->photo_date }}</td>
                                    <td>{{ $category->vedio }}</td>
                                    <td>{{ $category->vedio_date }}</td>
                                    <td>{{ $category->camp_team }}</td>
                                    <td>{{ $category->start_date }}</td>

                                    <td>{{ $category->end_date }}</td>
                                    <td>{{ $category->sponsors }}</td>
                                    <td><a href=" {{ asset('uploads/camp/'.$category->medicalreport) }}" target="_blank" 
                                    class="btn btn-line-black btn-big  ">medical report</a></td>
                                    <td><a href=" {{ asset('uploads/camp/'.$category->staticreport) }}" target="_blank" 
                                    class="btn btn-line-black btn-big  ">static report</a></td>
                                    <td><a href=" {{ asset('uploads/camp/'.$category->finalreport) }}" target="_blank" 
                                    class="btn btn-line-black btn-big  ">final report</a></td>



                                    <td>
                                        @if (auth()->user()->hasPermission('update_comps'))
                                            <a href="{{ route('dashboard.comps.edit', $category->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>
                                        @else
                                            <a href="#" class="btn btn-info btn-sm disabled"><i class="fa fa-edit"></i> @lang('site.edit')</a>
                                        @endif
                                        @if (auth()->user()->hasPermission('delete_comps'))
                                            <form action="{{ route('dashboard.comps.destroy', $category->id) }}" method="post" style="display: inline-block">
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
                         <!--   <tfoot>
    <tr bgcolor="#ABC233">
      <td colspan="4">TOTAL</td>
    
      <td>sss</td>
    </tr>
 
  </tfoot>-->
                        </table><!-- end of table -->

                        {{ $comps->appends(request()->query())->links() }}

                    @else

                        <h2>@lang('site.no_data_found')</h2>

                    @endif

                </div><!-- end of box body -->
                </div>

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->
    <script src="{{ URL::asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>


    <script type="text/javascript">
        function printDiv() {
            var printContents = document.getElementById('print').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }
    </script>

@endsection
