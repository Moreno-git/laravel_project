@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <h1 class="page-title">Welcome to Product Management System</h1>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-box-seam me-2"></i>Products</h5>
                        <p class="card-text">Manage your product inventory, add new products, update existing ones, and more.</p>
                        <div class="mt-4">
                            <a href="{{ route('products.index') }}" class="btn btn-primary me-2">
                                <i class="bi bi-list me-1"></i> View All Products
                            </a>
                            <a href="{{ route('products.create') }}" class="btn btn-success">
                                <i class="bi bi-plus-circle me-1"></i> Add New Product
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-gear me-2"></i>Quick Actions</h5>
                        <p class="card-text">Access frequently used features and manage your account settings.</p>
                        <div class="list-group mt-4">
                            <a href="{{ route('products.index') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Product List
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <a href="{{ route('products.create') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Create Product
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center w-100 text-start">
                                    Logout
                                    <i class="bi bi-box-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 