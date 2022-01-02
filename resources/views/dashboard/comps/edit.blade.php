@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.comps')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.comps.index') }}"> @lang('site.comps')</a></li>
                <li class="active">@lang('site.edit')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('site.edit')</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.comps.update', $category->id) }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                    
                        <div class="form-group col-4">
                                <label>Sno</label>
                                <input type="text" name="sno" class="form-control" value="{{ $category->sno }}">
                            </div>
                            <div class="form-group col-4">
                                <label>type</label>
                                <input type="text" name="type" class="form-control" value="{{ $category->type }}">
                            </div>
                            <div class="form-group col-4">
                                <label>compno</label>
                                <input type="text" name="compno" class="form-control" value="{{ $category->compno }}">
                            </div>


                            <div class="form-group col-4">
                                <label>year</label>
                                <input type="text" name="year" class="form-control" value="{{ $category->year }}">
                            </div>
                            <div class="form-group col-4">
                                <label>date</label>
                                <input type="text" name="date" class="form-control" value="{{ $category->date }}">
                            </div>
                            <div class="form-group col-4">
                                <label>city</label>
                                <input type="text" name="city" class="form-control" value="{{ $category->city }}">
                            </div>
                            <div class="form-group col-4">
                                <label>SURGERY</label>
                                <input type="text" name="surg" class="form-control" value="{{ $category->surg }}">
                            </div>

                            <div class="form-group col-4">
                                <label>cuntary</label>
                                <input type="text" name="cuntary" class="form-control" value="{{ $category->cuntary }}">
                            </div>
                            <div class="form-group col-4">
                                <label>opd</label>
                                <input type="text" name="opd" class="form-control" value="{{ $category->opd }}">
                            </div>
                            <div class="form-group col-4">
                                <label>iol</label>
                                <input type="text" name="iol" class="form-control" value="{{ $category->iol }}">
                            </div>


                            <div class="form-group col-4">
                                <label>phaco</label>
                                <input type="text" name="phaco" class="form-control" value="{{ $category->phaco }}">
                            </div>
                            <div class="form-group col-4">
                                <label>glasses</label>
                                <input type="text" name="glasses" class="form-control" value="{{ $category->glasses }}">
                            </div>
                            <div class="form-group col-4">
                                <label>med_tablet</label>
                                <input type="text" name="med_tablet" class="form-control" value="{{ $category->med_tablet }}">
                            </div>




                            <div class="form-group col-4">
                                <label>med_drops</label>
                                <input type="text" name="med_drops" class="form-control" value="{{ $category->med_drops }}">
                            </div>
                            <div class="form-group col-4">
                                <label>photo</label>
                                <input type="text" name="photo" class="form-control" value="{{ $category->photo }}">
                            </div>


                            <div class="form-group col-4">
                                <label>photo_date</label>
                                <input type="text" name="photo_date" class="form-control" value="{{ $category->photo_date }}">
                            </div>
                            <div class="form-group col-4">
                                <label>vedio</label>
                                <input type="text" name="vedio" class="form-control" value="{{ $category->vedio }}">
                            </div>
                            <div class="form-group col-4">
                                <label>vedio_date</label>
                                <input type="text" name="vedio_date" class="form-control" value="{{ $category->vedio_date }}">
                            </div>

                            <div class="form-group col-4">
                                <label>camp_team</label>
                                <input type="text" name="camp_team" class="form-control" value="{{ $category->camp_team }}">
                            </div>
                            <div class="form-group col-4">
                                <label>start_date</label>
                                <input type="text" name="start_date" class="form-control" value="{{ $category->start_date }}">
                            </div>

                            <div class="form-group col-4">
                                <label>end_date</label>
                                <input type="text" name="end_date" class="form-control"value="{{ $category->end_date }}">
                            </div>
                            <div class="form-group col-4">
                                <label>sponsors</label>
                                <input type="text" name="sponsors" class="form-control" value="{{ $category->sponsors }}">
                            </div>


                            <div class="form-group col-4">
                                <label>medicalreport</label>
                                <input type="file" name="medicalreport" class="form-control" value="{{ $category->medicalreport }}">
                            </div>


                            <div class="form-group col-4">
                                <label>staticreport</label>
                                <input type="file" name="staticreport" class="form-control" value="{{ $category->staticreport }}">
                            </div>


                            <div class="form-group col-4">
                                <label>finalreport</label>
                                <input type="file" name="finalreport" class="form-control" value="{{ $category->finalreport }}">
                            </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> @lang('site.edit')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
