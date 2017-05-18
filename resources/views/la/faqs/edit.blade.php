@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/faqs') }}">Faq</a> :
@endsection
@section("contentheader_description", $faq->$view_col)
@section("section", "Faqs")
@section("section_url", url(config('laraadmin.adminRoute') . '/faqs'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Faqs Edit : ".$faq->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($faq, ['route' => [config('laraadmin.adminRoute') . '.faqs.update', $faq->id ], 'method'=>'PUT', 'id' => 'faq-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'questions')
					@la_input($module, 'answers')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/faqs') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#faq-edit-form").validate({
		
	});
});
</script>
@endpush
