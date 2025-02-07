@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Add Product') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-1 mb-1">
                                <label for="product_name">{{ __('Product Name') }}</label>
                                <input id="product_name" type="text"
                                    class="form-control @error('product_name') is-invalid @enderror"
                                    name="product_name"
                                    value="{{ old('product_name') }}" required autofocus>
                                @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-1 mb-1">
                                <label for="description">{{ __('Description') }}</label>
                                <textarea id="description"
                                    class="form-control @error('description') is-invalid @enderror"
                                    name="description" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-1 mb-1">
                                <label for="price">{{ __('Price') }}</label>
                                <input id="price" type="text"
                                    class="form-control @error('price') is-invalid @enderror"
                                    name="price"
                                    value="{{ old('price') }}" required>
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-1 mb-1">
                                <label for="stock">{{ __('Stock') }}</label>
                                <input id="stock" type="number"
                                    class="form-control @error('stock') is-invalid @enderror"
                                    name="stock"
                                    value="{{ old('stock') }}" required>
                                @error('stock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-1 mb-1">
                                <label for="status">{{ __('Status') }}</label>
                                <select id="status"
                                    class="form-control @error('status') is-invalid @enderror"
                                    name="status">
                                    <option value="1" {{ old('status', 1) == 1 ? 'selected' : '' }}>{{ __('Active') }}</option>
                                    <option value="0" {{ old('status', 1) == 0 ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-1 mb-1">
                                <label for="category_id">{{ __('Category') }}</label>
                                <select id="category_id"
                                    class="form-control @error('category_id') is-invalid @enderror"
                                    name="category_id" required>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-1 mb-1">
                                <button id="name" type="submit"
                                    class="" name="submit" value="Add product">
                                    Add product
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
