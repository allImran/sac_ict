@extends('back.layouts.master')
@section('content')
	<!--------------=======  Page  Heading ========------------------>
	<div class="page-heading">
        <h1 class="page-title">Add Song</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Album for all page</li>
        </ol>

        @if(session()->has('message'))
        <div class="alert alert-success alert-dismissable fade show">
        <button class="close" data-dismiss="alert" aria-label="Close">×</button>
        <strong>Success!</strong> {{ Session::get('message') }}</div>
        @endif

    </div>
	<!--------------=======  Page  Heading ========------------------>
<div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Select Album</div>

        </div>
        <div class="ibox-body">
            <form class="form-group" method="post" action="{{ route('song.store') }}"  enctype="multipart/form-data">
                @csrf
            	<div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Select Album</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2_demo_1" tabindex="-1" aria-hidden="true" id="album_id" name="album_id">
                                       <option value="" selected>-- Select Album --</option>
                                                @foreach ($albums as $album)
                                                    <option value="{{ $album->id }}">{{ $album->title }}</option>
                                                @endforeach
                                            
                                       
                                            </select>
                                        </div>
                                    </div>
            	<div class="form-group">
		            <label>Song Name</label>
		            <input name="title" class="form-control input-rounded" type="text" >
		            @error('title')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror
		        </div>

		        <div class="form-group">
		            <label>Artist</label>
		            <input name="artist" class="form-control input-rounded" type="text">
                    @error('artist')
        			    <div class="alert alert-danger">{{ $message }}</div>
        			@enderror
		        </div>
		        <div class="form-group">
		            <label>Lyricist</label>
		            <input name="lyricist" class="form-control input-rounded" type="text">
                    @error('lyricist')
        			    <div class="alert alert-danger">{{ $message }}</div>
        			@enderror
		        </div>
		        

                <div class="form-group">
		            <label>Song</label>
		            <input name="file" class="form-control" type="file">
                    @error('file')
        			    <div class="alert alert-danger">{{ $message }}</div>
        			@enderror
		        </div>
                <button class="btn btn-success btn-block" type="submit"><h2>Add Album</h2></button>
            </form>
        </div>
    </div>
@endsection

@section('script')
 	<script src="{{ asset('back') }}/assets/vendors/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="{{ asset('back') }}/assets/vendors/jquery-knob/dist/jquery.knob.min.js" type="text/javascript"></script>
    <script src="{{ asset('back') }}/assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="{{ asset('back') }}/assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
@endsection