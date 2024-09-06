@extends('layouts.appda')
 @section('title', 'ubah product')
 @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update User</div>

                    <div class="card-body">
                        <form action="/edit{{ $product->id }}" method="post" enctype="multipart/form-data">
                        @csrf                     
                            <div class="form-group">
                                <label for="tilte">Nama Produk</label>
                                <input type="text" class="form-control" id="tilte" name="tilte" value="{{ $product->name }}">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
                            </div>
                            <div class="form-group">
                                <label for="size">Size</label>
                                <input type="text" class="form-control" id="size" name="size" value="{{ $product->size }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection