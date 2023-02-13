@extends('layouts.admin')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Products
                </div>
            </div>
            <div class="page-title-actions">
                <!-- Button trigger modal -->
                <a class="btn mr-2 mb-2 btn-primary" href="{{route('admin.product.create')}}">
                    Add New
                </a>
            </div>
        </div>
    </div>

    {{-- <div class="row table-row table-lg"> --}}
    <div class="row table-row">
        <div class="col-md-12">
            <table id="SMDataTable" class="w-100 table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        {{-- <th>Image</th> --}}
                        {{-- <th>View Priority</th> --}}
                        <th>Product</th>
                        <th>Category</th>
                        {{-- <th>Subcategory</th> --}}
                        {{-- <th>Regular Price</th> --}}
                        {{-- <th>Sale Price</th> --}}
                        <th>Publish</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($products)>0)
                        <tr>
                            @foreach($products as $product)
                            <td>{{ $loop->index+1 }}</td>
                            {{-- <td>
                                @if($product->productDefaultImage)
                                    <img src="{{asset($product->productDefaultImage->product_image)}}">
                                @endif
                            </td> --}}
                            {{-- <td>
                                {{ $product->view_priority }}
                            </td> --}}
                            <td>{{ $product->title }}</td>
                            <td>
                                @if($product->categoryData)
                                    {{$product->categoryData->category_name}}
                                @endif
                            </td>
                            {{-- <td>
                                @if($product->subcategoryData)
                                    {{$product->subcategoryData->subcategory_name}}
                                @endif
                            </td>
                            <td>{{$product->regular_price}}</td>
                            <td>{{$product->sale_price}}</td> --}}
                            <td>
                                @if($product->status == 1)
                                    <a class="badge badge-info inline-block" data-toggle="tooltip" data-placement="top" title="Make Unpublished" href="{{route('admin.product.show',$product->id)}}">Published</a>
                                @else
                                    <a class="badge badge-warning inline-block" data-toggle="tooltip" data-placement="top" title="Make Published" href="{{route('admin.product.show',$product->id)}}">Unpublished</a>
                                @endif
                            </td>
                            <td>
                                <a class="data-edit-view-btn" data-toggle="tooltip" data-placement="top" title="Edit Product" href="{{ route('admin.product.edit', $product->id) }}"><i class="fas fa-pen"></i></a>
                                <a class="data-edit-view-btn" data-toggle="tooltip" data-placement="top" title="Duplicate Product" href="{{ route('admin.product-duplicate', $product->id) }}"><i class="fas fa-copy"></i></a>

                                <form method="POST" action="{{ route('admin.product.destroy', $product->id) }}" accept-charset="UTF-8">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="data-delete-btn" data-toggle="tooltip" data-placement="top" title="Delete Product"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop