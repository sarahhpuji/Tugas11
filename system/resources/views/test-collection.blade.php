@extends('Template.base')

@section('content')

    <div class="container">
        <div class="row">
            @foreach($list as $item)
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <div class="card-header">
                            {{$item->nama}}
                        </div>
                        <div class="card-body">
                            {{$item->harga}}
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        {!! $list->links() !!}
                    </div>
                </div>
            </div>   
        </div>
    </div>

@endsection