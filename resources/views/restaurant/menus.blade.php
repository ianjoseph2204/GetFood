@extends('restaurant.layouts.header-restaurant')

@section('content')
<div class="container-fluid">
    <div class="card mt-3">
        <div class="card-header">
            <div class="row">
                <div class="col-2 mt-1">
                    <p class="h5">{{$restaurant->name}}</p>
                </div>

                <div class="col-md-3 mt-1">
                    <select placeholder="Select Category" class="form-control" name="category_id" id="categorySelection">
                        <option value="">All menus</option>
                        @foreach($menu_categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-7">
                    <button type="button" class="btn btn-info btn-md float-right" onclick="window.location='/restaurant/{{$restaurant->id}}/add-menu'">+ New Menu
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-3">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>French Fries</td>
                        <td><img src="{{ asset('images/logo-restaurant.jpg') }}" class="logo"></td>
                        <td>Snacks</td>
                        <td>French fries are batonnet or allumette-cut deep-fried potatoes</td>
                        <td>25,00</td>
                        <td class="row">
                            <div class="col-4 float-left">
                                <a href="" class="btn btn-sm btn-primary" onclick="">Edit</a>
                            </div>

                            <div class="col-8">

                                <a href="" class="btn btn-sm btn-danger" onclick="">Delete</a>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>Taco</td>
                        <td><img src="{{ asset('images/logo-restaurant.jpg') }}" class="logo"></td>
                        <td>Snacks</td>
                        <td>A taco is a traditional Mexican dish consisting of a small hand-sized corn or wheat tortilla
                            topped with a filling. The tortilla is then folded around the filling and eaten by hand.
                        </td>
                        <td>30,00</td>
                        <td class="row">
                            <div class="col-4 float-left">
                                <a href="" class="btn btn-sm btn-primary" onclick="">Edit</a>
                            </div>

                            <div class="col-8">
                                <a href="" class="btn btn-sm btn-danger" onclick="">Delete</a>
                            </div>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection