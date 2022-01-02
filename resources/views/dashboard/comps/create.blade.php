@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>@lang('site.comps')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.comps.index') }}"> @lang('site.comps')</a></li>
                <li class="active">@lang('site.add')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('site.add')</h3>
                </div><!-- end of box header -->
                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.comps.store') }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        
                         
                            <div class="form-group col-4">
                                <label>Sno</label>
                                <input type="text" name="sno" class="form-control" value="{{ old( 'sno') }}">
                            </div>
                            <div class="form-group col-4">
                                <label>type</label>
                                <input type="text" name="type" class="form-control" value="{{ old( 'type') }}">
                            </div>
                            <div class="form-group col-4">
                                <label>compno</label>
                                <input type="text" name="compno" class="form-control" value="{{ old( 'compno') }}">
                            </div>


                            <div class="form-group col-4">
                                <label>year</label>
                                <input type="text" name="year" class="form-control" value="{{ old( 'year') }}">
                            </div>
                            <div class="form-group col-4">
                                <label>date</label>
                                <input type="text" name="date" class="form-control" value="{{ old( 'date') }}">
                            </div>
                            <div class="form-group col-4">
                                <label>city</label>
                                <input type="text" name="city" class="form-control" value="{{ old( 'city') }}">
                            </div>
                            <div class="form-group col-4">
                                <label>SURGERY</label>
                                <input type="text" name="surg" class="form-control" value="{{ old( 'surg') }}">
                            </div>


                            <div class="form-group col-4">
                                <label>cuntary</label>
                                <input type="text" name="cuntary" class="form-control" value="{{ old( 'cuntary') }}">
                            </div>
                            <div class="form-group col-4">
                                <label>opd</label>
                                <input type="text" name="opd" class="form-control" value="{{ old( 'opd') }}">
                            </div>
                            <div class="form-group col-4">
                                <label>iol</label>
                                <input type="text" name="iol" class="form-control" value="{{ old( 'iol') }}">
                            </div>


                            <div class="form-group col-4">
                                <label>phaco</label>
                                <input type="text" name="phaco" class="form-control" value="{{ old( 'phaco') }}">
                            </div>
                            <div class="form-group col-4">
                                <label>glasses</label>
                                <input type="text" name="glasses" class="form-control" value="{{ old( 'glasses') }}">
                            </div>
                            <div class="form-group col-4">
                                <label>med_tablet</label>
                                <input type="text" name="med_tablet" class="form-control" value="{{ old( 'med_tablet') }}">
                            </div>




                            <div class="form-group col-4">
                                <label>med_drops</label>
                                <input type="text" name="med_drops" class="form-control" value="{{ old( 'med_drops') }}">
                            </div>
                            <div class="form-group col-4">
                                <label>photo</label>
                                <input type="text" name="photo" class="form-control" value="{{ old( 'photo') }}">
                            </div>


                            <div class="form-group col-4">
                                <label>photo_date</label>
                                <input type="text" name="photo_date" class="form-control" value="{{ old( 'photo_date') }}">
                            </div>
                            <div class="form-group col-4">
                                <label>vedio</label>
                                <input type="text" name="vedio" class="form-control" value="{{ old( 'vedio') }}">
                            </div>
                            <div class="form-group col-4">
                                <label>vedio_date</label>
                                <input type="text" name="vedio_date" class="form-control" value="{{ old( 'vedio_date') }}">
                            </div>

                            <div class="form-group col-4">
                                <label>camp_team</label>
                                <input type="text" name="camp_team" class="form-control" value="{{ old( 'camp_team') }}">
                            </div>
                            <div class="form-group col-4">
                                <label>start_date</label>
                                <input type="text" name="start_date" class="form-control" value="{{ old( 'start_date') }}">
                            </div>

                            <div class="form-group col-4">
                                <label>end_date</label>
                                <input type="text" name="end_date" class="form-control" value="{{ old( 'end_date') }}">
                            </div>
                            <div class="form-group col-4">
                                <label>sponsors</label>
                                <input type="text" name="sponsors" class="form-control" value="{{ old( 'sponsors') }}">
                            </div>


                            <div class="form-group col-4">
                                <label>medicalreport</label>
                                <input type="file" name="medicalreport" class="form-control" value="{{ old( 'medicalreport') }}">
                            </div>


                            <div class="form-group col-4">
                                <label>staticreport</label>
                                <input type="file" name="staticreport" class="form-control" value="{{ old( 'staticreport') }}">
                            </div>


                            <div class="form-group col-4">
                                <label>finalreport</label>
                                <input type="file" name="finalreport" class="form-control" value="{{ old( 'finalreport') }}">
                            </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
