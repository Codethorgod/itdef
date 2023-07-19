@extends('layouts/master')

@section('title',__('Alphabet List'))

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
                                <i class="fa fa-plus"></i> Add Alphabet 
							</a>
                        </div>
					</div>
				</div>
			</div>
		</div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
					<div class="header">
						<h2><i class="fa fa-th"></i> Alphabet List</h2>
					</div>
                    <div class="body">
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-hover js-basic-example contact_list dataTable"
                                            id="DataTables_Table_0" role="grid"
                                            aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="center sorting sorting_asc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 48.4167px;" aria-sort="ascending"
                                                        aria-label="#: activate to sort column descending"># ID</th>
                                                        <th class="center sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 126.333px;"
                                                        aria-label=" Name : activate to sort column ascending">
                                                        Alphabet
                                                    </th> 
                                                    <th class="center sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 193.017px;"
                                                        aria-label=" Email : activate to sort column ascending"> Status
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="row_position">
												@if(!empty($alphabet))
													@foreach($alphabet as $key=>$value)
														<tr class="gradeX odd"  id="{{ $value->id }}">
															<td class="center">{{ $key+1}}</td>
                                                            <td class="center">{{ ucfirst($value['alphabet']) }}</td>
															<td class="center">
                                                                <div class="switch mt-3">
                                                                    <label>
                                                                        <input type="checkbox"  class="-change" data-id="{{ $value['id'] }}"@if($value['status']=='Active'){{ 'checked' }} @endif>
                                                                        <span class="lever switch-col-red layout-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            
														</tr>
													@endforeach
												@endif
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th class="center" rowspan="1" colspan="1">#</th>
                                                    <th class="center" rowspan="1" colspan="1"> Alphabet </th>	
													<th class="center" rowspan="1" colspan="1"> Status </th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
@push('custom_js')

    <script>
	
    $('.-change').change(function() {
    var status = $(this).prop('checked') == true ? 'Active' : 'De-Active';
    var id = $(this).data('id');

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "{{ route('admin.alph.changestatus') }}", // Updated AJAX URL
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            'status': status, 
            'id': id
        },
        beforeSend:function(){
            $('#preloader').css('display','block');
        },
        error:function(xhr,textStatus){
            if(xhr && xhr.responseJSON.message){
                sweetAlertMsg('error', xhr.status + ': ' + xhr.responseJSON.message);
            }else{
                sweetAlertMsg('error', xhr.status + ': ' + xhr.statusText);
            }
            $('#preloader').css('display','none');
        },
        success: function(data){
            $('#preloader').css('display','none');
            sweetAlertMsg('success',data.message);
        }
    });
});

		
    </script>  
  
   
@endpush