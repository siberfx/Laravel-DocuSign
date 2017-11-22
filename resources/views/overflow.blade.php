@extends('layout')
@section('content')

    <div class="content">
        <img src="{{ asset('/images/John.png') }}" alt=""
             style="width: 180px; margin-top: -25px;position: absolute;">

        <h4 class="text-center">
            <b>Section K: Additional Information</b>
        </h4>

        @foreach($overflow as $filename => $sections)
            <?php $filename = str_replace('_', ' ', $filename); ?>
            @foreach($sections as $section => $tabs)
                <?php $section = str_replace('_', ' ', $section); ?>

                <div class="panel panel-default" style="border-radius: 0px">
                    <div class="panel-heading" style="background-color: #939598; border-radius: 0px;">
                        <h3 class="panel-title">
                            <b style="color: white">
                                {{ $filename }}, {{ $section }}
                            </b>
                        </h3>
                    </div>
                    <div class="panel-body" style="font-size: 11px;">
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

@endsection