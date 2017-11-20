@extends('layout')
@section('content')

    <div class="panel panel-default">
        <div class="row">
            <div class="container">
                <div class="col-md-12">

                    <img src="{{ asset('/images/John.png') }}" alt=""
                         style="width: 180px;margin-left: 10px;position: absolute;">

                    <div class="page-header">
                        <h3 class="text-center" style="color: black">
                            <b>Section K: Additional Information</b>
                        </h3>
                    </div>

                    @foreach($overflow as $filename => $sections)
                        <?php $filename = str_replace('_', ' ', $filename); ?>
                        @foreach($sections as $section => $tabs)
                            <?php $section = str_replace('_', ' ', $section); ?>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <b>{{ $filename }}, {{ $section }}</b>
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    @foreach($tabs as $item)
                                        <h5>
                                        @foreach($item as $value)
                                                {{ $value ?? '' }},
                                        @endforeach
                                        </h5>
                                    @endforeach
                                </div>
                            </div>

                        @endforeach
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection