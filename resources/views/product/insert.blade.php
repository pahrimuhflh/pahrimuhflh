@extends('layouts.appda')
 @section('title', 'tambah product')
 @section('content')
 <h1 class="h3 mb-2 text-gray-800">Product</h1>

        <div class="row">
            <div class="col-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Tambah Product</h6>
            </div>
            <div class="card-body">
             <form action="{{route('product.add.insert')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text " name="tilte" class="form-control">
                    @error ('tilte')
                        {{ $message }}
                    @enderror
                </div> <div class="form-group">
                    <label>Price</label>
                    <input type="text " name="price" class="form-control">
                    @error ('price')
                        {{ $message }}
                    @enderror
                </div> <div class="form-group">
                    <label>Size</label>
                    <input type="text " name="size" class="form-control">
                    @error ('size')
                        {{ $message }}
                    @enderror
                </div> <div class="form-group">
                    <label>Description</label>
                    <input type="text " name="description" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Submit</button>
             </form>
            </div>
         </div>
        </div>
    </div>
@endsection