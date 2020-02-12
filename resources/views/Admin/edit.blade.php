@extends('template.adminApp')
@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Edit Dish</h5>
                        @if($errors->any)
                            <p>{{$errors->first()}}</p>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{url('dish/' . $dish->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">

                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Dish Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Dish Name" required value="{{$dish->name}}">
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group" >
                                        <label>Catogry</label>
                                        <select name="catogry" id="" class="form-control">
                                            <option value="">Choose a catogry....</option>
                                            <option value="main">Main</option>
                                            <option value="dessert">Dessert</option>
                                            <option value="drink">Drinks</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control"name="price" value="{{$dish->price}}" required placeholder="Price">
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="6" cols="80" class="form-control" name="desc" placeholder="Here can be your description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div><input type="submit" class="btn btn-danger" name="" id=""></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">



                </div>
            </div>
        </div>
    </div>
@endsection
