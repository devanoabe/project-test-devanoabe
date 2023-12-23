@extends('app')

@section('content-banner')
<!-- Content  -->

<head>
    <link rel="stylesheet" href="{{asset('css/banner.css')}}">
</head>

<section class="content parallax-section">
    <div style="height: 600px;" class="d-flex flex-column justify-content-center align-items-center text">
        <h2>Ideas</h2>
        <p style="margin-top: 10px;">Where all our great things begin</p>
    </div>
</section>

<section class="mt-5">

    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                Showing
                {{ $products->firstItem() }}
                to
                {{ $products->lastItem() }}
                of
                {{ $products->total() }}
                entries
            </div>
            <div class="row mb-4">
                <div class="d-flex justify-content-start mr-4">
                    <div class="mt-2 mr-2">
                        <h6>Show per page</h6>
                    </div>
                    <div>
                        <select class="custom-select" onchange="window.location.href = this.value">
                            <option value="?perPage=10" {{ $selectedPerPage == 10 ? 'selected' : '' }}>10</option>
                            <option value="?perPage=20" {{ $selectedPerPage == 20 ? 'selected' : '' }}>20</option>
                            <option value="?perPage=50" {{ $selectedPerPage == 50 ? 'selected' : '' }}>50</option>
                        </select>
                    </div>

                </div>
                <div class="d-flex justify-content-start">
                    <div class="mt-2 mr-2">
                        <h6>Show per page</h6>
                    </div>
                    <div>
                        <select class="custom-select" onchange="window.location.href = this.value">
                            <option value="#">Sort By</option>
                            <option value="?sortBy=quantityInStock&sortOrder=asc" {{ $sortBy == 'quantityInStock' && $sortOrder == 'asc' ? 'selected' : '' }}>Low</option>
                            <option value="?sortBy=quantityInStock&sortOrder=desc" {{ $sortBy == 'quantityInStock' && $sortOrder == 'desc' ? 'selected' : '' }}>High</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('images/neom.jpg') }}" class="card-img-top" loading="lazy">
                    <div class="card-body">
                        <p class="card-text c1">Quantity: {{ $product->quantityInStock }}</p>
                        <p style="overflow: hidden;
                                display: -webkit-box;
                                -webkit-box-orient: vertical;
                                -webkit-line-clamp: 3;
                                white-space: pre-wrap;" class="card-text c2">{{ $product->productDescription }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
    </div>

</section>




<!-- /.content -->

@endsection