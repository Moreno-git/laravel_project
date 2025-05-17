<<<<<<< HEAD
@extends('layouts.app') 
 
@section('content') 
 
<div class="row justify-content-center mt-3"> 
    <div class="col-md-8"> 
 
        <div class="card"> 
            <div class="card-header"> 
                <div class="float-start"> 
                    Product Information 
                </div> 
                <div class="float-end"> 
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a> 
                </div> 
            </div> 
            <div class="card-body"> 
 
                <div class="row mb-3"> 
                    <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Code:</strong></label> 
                    <div class="col-md-6" style="line-height: 35px;"> 
                        {{ $product->code }} 
                    </div> 
                </div> 
 
                <div class="row mb-3"> 
                    <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label> 
                    <div class="col-md-6" style="line-height: 35px;"> 
                        {{ $product->name }} 
                    </div> 
                </div> 
 
                <div class="row mb-3"> 
                    <label for="quantity" class="col-md-4 col-form-label text-md-end text-start"><strong>Quantity:</strong></label> 
                    <div class="col-md-6" style="line-height: 35px;"> 
                        {{ $product->quantity }} 
                    </div> 
                </div> 
 
                <div class="row mb-3"> 
                    <label for="price" class="col-md-4 col-form-label text-md-end text-start"><strong>Price:</strong></label> 
                    <div class="col-md-6" style="line-height: 35px;"> 
                        ${{ number_format($product->price, 2) }} 
                    </div> 
                </div> 
 
                <div class="row mb-3"> 
                    <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label> 
                    <div class="col-md-6" style="line-height: 35px;"> 
                        {{ $product->description }} 
                    </div> 
                </div> 
 
                <div class="row mb-3">
                    <label for="photo" class="col-md-4 col-form-label text-md-end text-start"><strong>Product Image:</strong></label>
                    <div class="col-md-6">
                    
                        @if($product->photo)
                            <img src="{{ asset('storage/' . $product->photo) }}" 
                                 alt="{{ $product->name }}" 
                                 class="img-fluid rounded"
                                 style="width: 100%; height: auto; object-fit: cover;">
                        @else
                            <div class="d-flex align-items-center justify-content-center bg-light rounded" 
                                 style="height: 200px;">
                                <i class="fas fa-image text-secondary" style="font-size: 4rem;"></i>
                                <p class="text-secondary mt-2">No Image Available</p>
                            </div>
                        @endif
                    </div>
                </div>
 
            </div> 
        </div> 
    </div>     
</div> 
 
@endsection
=======
<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>
>>>>>>> origin/main
