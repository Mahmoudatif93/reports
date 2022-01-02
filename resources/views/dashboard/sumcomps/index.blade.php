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

            <h1>STATISTICS Comps</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> STATISTICS Comps</a></li>
                <li class="active">STATISTICS Comps</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">STATISTICS Comps <small></small></h3>
<!--
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
                    </form>--><!-- end of form -->

                </div><!-- end of box header -->
              
                <div class="card-body">
                <button class="btn btn-danger  mt-3 mr-5 btn-lg btn-block" id="print_Button" onclick="printDiv()"> <i
                                class="mdi mdi-printer ml-1"></i>Pdf</button>

    <a target="_blank" class="btn btn-warning mt-3 mr-5 btn-lg btn-block" href="{{ route('dashboard.exporttotlal') }}">Excel</a>


                            <!--    <a  target="_blank" class="btn btn-primary" href="{{ URL::to('dashboard/employee/pdf') }}">Export to PDF</a>
    -->

                <div class="table-responsive"  id="print">
                    @if ($comps->count() > 0)
               
                    <table  class="table table-hover  table-striped" style=" text-align: center">
                    <caption style="    text-align: center;">STATISTICS FOR FREE EYE CAMPS
                {{date('yy-M-d')}}
                </caption>
                            <thead>
                            <tr>
                       
                                <th scope="col">Sr</th>
                                <th scope="col">cuntary</th>
                                <th>Frist Cam</th>
                                <th>last Cam</th>
                                <th>NO.OFCAMPS</th>
                                <th>NO.OFCiteis</th>
                                <th>OPD</th>
                                <th>SURGERY</th>
                                <th>IOL PC/PHACD</th>
                                <th>glasses</th>
                             
                              
                            </tr>
                            </thead>

                            <tbody>
                                <?php 
                                        $allcomp=0;
                                        $allcities=0;
                                        $allopd=0;
                                        $allsurg=0;
                                        $alliol=0;
                                        $allglasses=0;
                                        
                                ?>
                            @foreach ($comps as $index=>$category)
                                <tr class="table-primary">
                                   <?php 
                                    $allcomp +=$category->compnototal;
                                    $allcities +=$category->citytotal;
                                    $allopd +=$category->opdtotal;
                                    $allsurg +=$category->surgtotal;
                                    $alliol +=$category->ioltotal;
                                    $allglasses +=$category->glassestotal;
                                   ?>
                                <td>{{ $index + 1 }}</td>
                                    <td  class="table-primary" >{{ $category->cuntary }}</td>
                                    <td>{{$category->start_date}}</td>
                                    <td></td>
                                    <td>{{ $category->compnototal }}</td>
                                    <td>{{ $category->citytotal }}</td>
                                    <td>{{ $category->opdtotal }}</td>
                                    <td>{{ $category->surgtotal }}</td>
                                    <td>{{ $category->ioltotal }}</td>
                                    <td>{{ $category->glassestotal }}</td>

                                </tr>

                            @endforeach
                            </tbody>
                      <tfoot>
    <tr  class="table-primary" bgcolor="#D7E1E9">
      <td colspan="4">TOTAL</td>
      <td>{{$allcomp}}</td>
      <td>{{$allcities}}</td>
      <td>{{$allopd}}</td>
      <td>{{$allsurg}}</td>
      <td>{{$alliol}}</td>
      <td>{{$allglasses}}</td>
    </tr>
 
  </tfoot>
                        </table><!-- end of table -->

                     

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
