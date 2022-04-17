@extends('layouts.admin')

@section('title')
    Edit Testimony
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12 col-lg-6" style="margin: 0 auto;">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Edit Testimony</h4>
                            </div>
                        </div>
                        @include('includes.alerts')
                        <div class="iq-card-body">
                            <form method="post"
                                  action="{{ route('admin.testimony.update', $testimony->id) }}"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault01">Name</label>
                                        <input name="name" type="text" class="form-control"
                                               id="validationDefault01" maxlength="30"
                                               value="{{ $testimony->name }}" required="">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault01">Occupation</label>
                                        <input name="occupation" type="text" class="form-control"
                                               id="validationDefault01" maxlength="30"
                                               value="{{ $testimony->occupation }}" required="">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault01">Image</label>
                                        <input name="image" type="file" class="form-control"
                                               id="validationDefault01" required="">
                                        @if(!empty($testimony->image))
                                        <img width="100"
                                             src="{{ asset('photos/testimonies/'.$testimony->image) }}"/>
                                        @endif
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefault01">Testimony</label>
                                        <textarea name="testimony" maxlength="80" class="form-control">{{ $testimony->testimony }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn brand-color" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
@endsection
