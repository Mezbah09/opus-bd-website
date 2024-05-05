@extends('admin.layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Product Details of {{$product->title}}</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('product_fourth_section.create', ['id' => $product->id]) }}" class="btn btn-primary">Fourth Section</a>
                <a href="{{ route('product_third_section.create', ['id' => $product->id]) }}" class="btn btn-primary">Third Section</a>
                <a href="{{ route('product_second_section.create', ['id' => $product->id]) }}" class="btn btn-primary">Second Section</a>
                <a href="{{ route('product_first_section.create', ['id' => $product->id]) }}" class="btn btn-primary">First Section</a>
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

{{-- product First section --}}
<section class="content-header">
    @include('admin.message')
    <div class="col-sm-6">
        <h4>Section 1</h4>
    </div>
</section>

<section class="content">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th width="60">ID</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Logo</th>
                            <th>Brochure</th>
                            <th width="100">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($first_sec !== null)
                        <tr>
                            <td>{{$first_sec->id}}</td>
                            <td>{{$first_sec->title}}</td>
                            <td>
                                @if(!empty($first_sec->image))
                                <img src="{{ asset('uploads/first_section/'.$first_sec->image) }}" class="img-thumbnail" alt="{{$first_sec->title}}" width="50">
                                @else
                                <img src="{{asset('admin-assets/img/default.png')}}" class="img-thumbnail" alt="default image" width="50">
                                @endif
                            </td>
                            <td>
                                @if(!empty($first_sec->logo))
                                <img src="{{ asset('uploads/first_section/'.$first_sec->logo) }}" class="img-thumbnail" alt="{{$first_sec->title}}" width="50">
                                @else
                                <img src="{{asset('admin-assets/img/default.png')}}" class="img-thumbnail" alt="default image" width="50">
                                @endif
                            </td>
                            <td>{{$first_sec->brochure}}</td>

                            <td>
                                <a href="{{route('product_first_section.edit', $first_sec->id)}}">
                                    <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#" onclick="destroySection({{$first_sec->id}})" class="text-danger w-4 h-4 mr-1">
                                    <svg wire:loading.remove.delay="" wire:target="" class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path ath fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @else
                        <tr>
                            <td colspan="4">No data found</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

{{-- end --}}

<section class="content-header">
    <div class="col-sm-6">
        <h4>Section 2</h4>
    </div>
</section>

{{-- second section --}}
<section class="content">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th width="60">ID</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th width="100">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($second_sec !== null)
                        <tr>
                            <td>{{$second_sec->id}}</td>
                            <td>
                                @if(!empty($second_sec->image))
                                <img src="{{ asset('uploads/first_section/'.$second_sec->image) }}" class="img-thumbnail" alt="" width="50">
                                @else
                                <img src="{{asset('admin-assets/img/default.png')}}" class="img-thumbnail" alt="default image" width="50">
                                @endif
                            </td>
                            <td>{{Str::limit($second_sec->description, 50)}}</td>
                            <td>
                                <a href="{{route('product_second_section.edit', $second_sec->id)}}">
                                    <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#" onclick="destroySection({{$second_sec->id}})" class="text-danger w-4 h-4 mr-1">
                                    <svg wire:loading.remove.delay="" wire:target="" class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path ath fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @else
                        <tr>
                            <td colspan="4">No data found</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

{{-- end --}}

<section class="content-header">
    <div class="col-sm-6">
        <h4>Section 3</h4>
    </div>
</section>


{{-- Third section --}}
<section class="content">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th width="60">ID</th>
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th width="100">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($third_secs !== null)
                        @foreach ($third_secs as $third_sec)
                        <tr>
                            <td>{{$third_sec->id}}</td>
                            <td>
                                @if(!empty($third_sec->icon))
                                <img src="{{ asset('uploads/first_section/'.$third_sec->icon) }}" class="img-thumbnail" alt="" width="50">
                                @else
                                <img src="{{asset('admin-assets/img/default.png')}}" class="img-thumbnail" alt="default image" width="50">
                                @endif
                            </td>
                            <td>{{$third_sec->title}}</td>
                            <td>{{Str::limit($third_sec->description, 50)}}</td>
                            <td>
                                <a href="{{route('product_third_section.edit', $third_sec->id)}}">
                                    <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#" onclick="destroySection({{$third_sec->id}})" class="text-danger w-4 h-4 mr-1">
                                    <svg wire:loading.remove.delay="" wire:target="" class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path ath fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5">No data found</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

{{-- end --}}


<section class="content-header">
    <div class="col-sm-6">
        <h4>Section 4</h4>
    </div>
</section>

{{-- Fourth section --}}
<section class="content">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th width="60">ID</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th width="100">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($fourth_sec !== null)
                        <tr>
                            <td>{{$fourth_sec->id}}</td>
                            <td>
                                @if(!empty($fourth_sec->image))
                                <img src="{{ asset('uploads/first_section/'.$fourth_sec->image) }}" class="img-thumbnail" alt="" width="50">
                                @else
                                <img src="{{asset('admin-assets/img/default.png')}}" class="img-thumbnail" alt="default image" width="50">
                                @endif
                            </td>
                            <td>{{Str::limit($fourth_sec->description, 50)}}</td>
                            <td>
                                <a href="{{route('product_fourth_section.edit', $fourth_sec->id)}}">
                                    <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#" onclick="destroySection({{$fourth_sec->id}})" class="text-danger w-4 h-4 mr-1">
                                    <svg wire:loading.remove.delay="" wire:target="" class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path ath fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @else
                        <tr>
                            <td colspan="4">No data found</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

{{-- end --}}
<!-- /.content -->
@endsection