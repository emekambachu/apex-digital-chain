@extends('layouts.admin')

@section('title')
    Testimonies
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title" style="display: inline-block;">
                                <h4 style="float: left;" class="card-title mr-2">
                                    Testimonies</h4>
                                <a style="float: left;"
                                   href="{{ route('admin.testimony.create') }}">
                                    <button class="btn btn-sm btn-info">Add new</button>
                                </a>
                            </div>
                            @include('includes.alerts')
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                @if($testimonies->count() > 0)
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Occupation</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Testimony</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($testimonies as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->occupation }}</td>
                                                <td>{{ $item->testimony }}</td>
                                                <td>
                                                    <img width="100"
                                                         src="{{ asset('photos/testimonies/'.$item->image) }}"/>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.testimony.edit', $item->id) }}">
                                                        <button class="btn btn-info btn-sm">
                                                            <i class="fa fa-pencil"></i> Edit</button>
                                                    </a>
                                                    <form method="POST"
                                                          action="{{ route('admin.testimony.delete', $item->id) }}">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-danger" type="submit">
                                                            <i class="fa fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Occupation</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Testimony</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                @else
                                    No testimonies
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
