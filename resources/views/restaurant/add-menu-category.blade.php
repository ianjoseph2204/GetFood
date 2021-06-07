@extends('restaurant.layouts.header-restaurant')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="row no-gutters">
                    <div class="card-body text-center">
                        <h5 class="card-text font-weight-bold">Category</h5>
                        <form action="{{url('/api/restaurants/'.$restaurant->id.'/menu_categories')}}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="txtLocation" class="col-md-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" id="category_name">
                                </div>
                            </div>

                            <button class="btn btn-info mt-3" type="submit">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
