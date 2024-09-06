 @extends('layouts.appda')
 @section('title', 'product')
 @section('content')
 
 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800">Product</h1>
    @if (session('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{session('message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                           <a href="{{route('product.insert')}}" class="btn btn-primary-sm"><i class="fas fa-plus"></i>Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Price</th>
                                            <th>Size</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>         
                                    <tbody>
                                        <?php $no =1; ?>
                                        @foreach ($product as $row)
                                    
                                        <tr class="text-center">
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $row->tilte }}</td>
                                            <td>{{ $row->price }}</td>
                                            <td>{{ $row->size }}</td>
                                            <td>{{ $row->description }}</td>
                                            <td>
                                                <a href="/viewedit{{ $row->id }}"class="btn btn-warning btn-sm"><i class="fas fa-edit"></i>Edit</a>
                                                <a href="/delete{{ $row->id }}" onclick="return window.confirm('Yakin hapus ini?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection