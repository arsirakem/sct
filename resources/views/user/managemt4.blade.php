@extends('layouts.app')

@section('page-title', 'จัดการบัญชี MT4')
@section('page-heading', 'จัดการบัญชี MT4')

@section('breadcrumbs')
    <li class="breadcrumb-item active">
        จัดการบัญชี MT4
    </li>
@stop

@section('content')
    @include('partials.messages')
     <form method="post" action="">
        {{csrf_field()}}
        <div class="row clearfix">
    	<div class="col-md-12 table-responsive">
			<table class="table table-bordered table-hover" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							MT4 ID:1
						</th>
						<th class="text-center">
							MT4 PW:1
						</th>
						<th class="text-center">
							MT4 Sever:1
						</th>
					</tr>
				</thead>
				<tbody>
    				<tr id='addr0' data-id="0" class="hidden">
						<td data-name="name">
						    <input type="text" name='name0'  placeholder='กรุณาป้อนบัญชี MT4' class="form-control"/>
						</td>
						<td data-name="mail">
						    <input type="text" name='mail0' placeholder='กรุณาป้อนรหัส MT4' class="form-control"/>
						</td>
						<td data-name="desc">
						    <textarea name="desc0" placeholder="Description" class="form-control"></textarea>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
    <button id="add_row" type="submit" class="btn btn-danger float-left" style="color: white;">จัดข้อมูล MT4</button>
    <h1>{{ auth()->user()->id }}</h1>

    </form>

    
@stop

@section('styles')
    <style>
        .user.media {
            float: left;
            border: 1px solid #dfdfdf;
            background-color: #fff;
            padding: 15px 20px;
            border-radius: 4px;
            margin-right: 15px;
        }
    </style>
@stop