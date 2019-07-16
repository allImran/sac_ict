@extends('back.layouts.master')
@section('content')
	<!--------------=======  Page  Heading ========------------------>
	<div class="page-heading">
        <h1 class="page-title">All Album</h1>
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
            <div class="ibox-title">Responsive Table</div>
        </div>
        <div class="ibox-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Production</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
						@foreach($albums as $album)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $album->title }}</td>
                            <td>{{ $album->production }}</td>
                            <td>{{ $album->price }}</td>
                            <td>
                            	<img width="150" src="{{ asset('back/assets/img/products/'.$album->image) }}" alt="{{ $album->title }}">
                            </td>
                            
                            <td>
                                <a href="{{ route('album.edit',$album->id) }}" class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-17"></i></a>
                                <a href="{{ route('album.delete',$album->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-17"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $albums->links() }}
            </div>
        </div>
    </div>
@endsection
