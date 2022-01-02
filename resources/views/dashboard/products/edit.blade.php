@extends('layouts.dashboard.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>التحاليل</h1>

        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
            </li>
            <li><a href="{{ route('dashboard.products.index') }}">التحاليل</a></li>
            <li class="active">تعديل</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">

            <div class="box-header">
                <h3 class="box-title">تعديل</h3>
            </div><!-- end of box header -->
            <div class="box-body">

                @include('partials._errors')

                <form action="{{ route('dashboard.products.update', $product->id) }}" method="post"
                    enctype="multipart/form-data">

                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div class="row ">




                        <div class=" col-md-12">


                            <div class=" col-md-6 ">
                                <div class="form-group">

                                    <label>أسم العميل</label>
                                    <input type="text" name="client_name" class="form-control"
                                        value="{{ $product->client_name}}">


                                </div>
                            </div>

                            <div class=" col-md-6 ">
                                <div class="form-group">
                                    <label>رقم العميل</label>
                                    <input type="text" name="client_number" class="form-control"
                                        value="{{ $product->client_number}}">


                                </div>
                            </div>


                        </div>
                        <div class=" col-md-12">

                            <div class="form-group">
                                <label for="pdf">نتيجه العميل(PDF)</label>
                                <div class="input-group">

                                    <input type="file" value='{{ $product->file }}' name="file" class="form-control">


                                </div>
                            </div>
                        </div>

                        <div class=" col-md-12">
                                <div class="input-group-append">
                                    <button class="btn btn-rounded btn-primary btn-sm" type="button"
                                        onclick="add_row();" style="margin: 0px 7px 5px 2px;"><i class="fa fa-plus"></i>
                                    </button>
                                    <button class="btn btn-rounded btn-primary btn-sm " type="button"
                                        onclick="remove_row();" style="margin: 0px 7px 5px 2px;"><i
                                            class="fa fa-minus"></i>
                                    </button>

                                </div>

                            </div>

                            <div class=" col-md-12" id="bouquet_div">
                                <div class="form-group col-md-6">
                                    <label>أسم التحليل</label>
                                    <input type="text" name="examName[]" class="form-control ">

                                    <!--    <input type="file" multiple name="image[]" accept="image/*" class="form-control image">-->
                                </div>


                            </div>

                        </div>

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>
                            @lang('site.edit')</button>
                    </div>
            </div>
            </form><!-- end of form -->

        </div><!-- end of box body -->

</div><!-- end of box -->

</section><!-- end of content -->

</div><!-- end of content wrapper -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
function getfeescaches() {

    var url = '{{URL::to("/dashboard/getfeeschach")}}';
    var fees = $('#fees').val();
    var cashs = $('#cashs').val();
    var grams = $('#number_grams').val();

    var results = [];
    var selected = $('#number_grams').find('option:selected', this);
    selected.each(function() {
        results.push($(this).data('id'));
    });


    data = {
        results: results,
        _token: "{{csrf_token()}}",
    };
    $.ajax({
        url: url,
        type: 'get',
        dataType: 'html',
        data: data,
        success: function(response) {

            if (response != "false") {
                var JSONObject = JSON.parse(response);
                $('#fees').val(JSONObject.fees);
                $('#cashs').val(JSONObject.cache_back);
            } else {
                swal("Error!", "there is no Fees & Cachback for this ingots!", "error");
            }
            $('#weight').val(grams);
            $('#number_gramsv').val(grams);


        }
    });

}




function getfeescoins() {

    var url = '{{URL::to("/dashboard/getfeescoins")}}';
    var fees = $('#fees').val();
    var cashs = $('#cashs').val();
    var grams = $('#number_grams2').val();

    var results = [];
    var selected = $('#number_grams2').find('option:selected', this);
    selected.each(function() {
        results.push($(this).data('id'));
    });


    data = {
        results: results,
        _token: "{{csrf_token()}}",
    };
    $.ajax({
        url: url,
        type: 'get',
        dataType: 'html',
        data: data,
        success: function(response) {

            if (response != "false") {
                var JSONObject = JSON.parse(response);
                $('#fees').val(JSONObject.fees);
                $('#cashs').val(JSONObject.cache_back);
            } else {
                swal("Error!", "there is no Fees & Cachback for this ingots!", "error");
            }
            $('#weight').val(grams);
            $('#number_gramsv').val(grams);

        }
    });

}









function appear() {

    var cat = $('#category_id').val();
    if (cat == '') {
        $('#ingots').hide();
        $('#coins').hide();
        $('#fees').val('');
        $('#cashs').val('');
        $('#weight').val('');
        $('#number_gramsv').val('')
    }
    if (cat == 1) {
        $('#ingots').show();
        $('#coins').hide();
        $('#fees').val('');
        $('#cashs').val('');
        $('#weight').val('');
        $('#number_gramsv').val('')
        $('#diameter').hide();
    }
    if (cat == 2) {
        $('#coins').show();
        $('#ingots').hide();
        $('#fees').val('');
        $('#cashs').val('');
        $('#weight').val('');
        $('#number_gramsv').val('')
        $('#diameter').show();
    }





}
</script>
@endsection