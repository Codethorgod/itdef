@extends('layouts/master')
@section('title')
{{-- @if(!empty($result))
		Update 
	@else
		Add 
	@endif --}}
	Branch
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@section('content')

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="header">
						<h2><i class="fa fa-th"></i>  Go To</h2>
					</div>
					<div class="body">
						<div class="btn-group top-head-btn">
                            <a class="btn-primary" href="">
                                <i class="fa fa-list"></i> Branch List
							</a>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="header">
						<h2><i class="fa fa-th"></i> Branch</h2>
					</div>
					<div class="body">
						<form id="form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
						@csrf
						
						{{-- <input type="hidden" name="id" value="@if(!empty($result)){{$result['id']}}@else{{ 0 }}@endif"  required /> --}}
						<div class="col-sm-6">
							<div class="form-group">
								<div class="form-line">
									<label for="inputName">Category </label>
									<select class="form-control" name="parent_id">
										<option  selected value="">--Select--</option>
											<option value="" > </option>
									</select> 
									<input type="hidden" id="justAnotherInputBox" name="" placeholder="Select Category" autocomplete="off"/>
									<input type="hidden" name="parent_id" value="" id="category_input_box_hidden" required />
									<input type="hidden" name="id" value=""  required />
								</div>
							</div>
						</div>
                        <div class="col-sm-12">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Name <label class="text-danger">*</label></label>
										<input type="text" required class="form-control" placeholder="Enter Branch Name" name="name" >
									</div>
								</div>
							</div>

                        <div class="row clearfix">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Short Description</label>
										<textarea id="summernote" class="form-control"  name="short_description" ></textarea>
									</div>
								</div>
							</div>
						</div>
                        
						<div class="row clearfix">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Image <label class="text-danger">*</label></label>
										<input type="file" id="uploadImage" accept="image/png, image/gif, image/jpeg" class="form-control"  name="image"  data-type="single" data-image-preview="product" accept="image/*">
									</div>
								</div>
								
								{{-- <div class="form-group previewimages col-md-6" id="product">
									@if($result)
										<img src="{{ asset('uploads/brands/'.$result->image) }}" style="width: 100px;border:1px solid #222;margin-right: 13px" />
										<input type="hidden" name="old_image" value="{{ $result->image }}" />
									@endif
								</div> --}}
							</div>
						</div>
						
						<div class="col-lg-12 p-t-20 text-center">
							{{-- @if(empty($result)) 
								<button type="reset" class="btn btn-danger waves-effect">Reset</button>
							@endif --}}
							<button style="background:#353c48;" type="submit" class="btn btn-primary waves-effect m-r-15" > Submit</button> 
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@push('custom_js')
<script>
	$('#summernote').summernote({
	  placeholder: 'Hello Bootstrap 4',
	  tabsize: 2,
	  height: 100
	});
  </script>

	<script>
		function resetFormData(){
			
			$('.previewimages').html('');
		}
	</script>
@endpush