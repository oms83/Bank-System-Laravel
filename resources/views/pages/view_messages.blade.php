@extends('layouts.master')

@section('title', 'View Message')


@section('custom-style')

<style>


</style>

@endsection

@section('content')

<div class="row">    

    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card" style="border-radius:10px !important">
            {{-- Messages Table --}}
            <div class="col-12">
                <div class="card p-4">
                    <div class="card-title d-print-none">
                        <p class="h5 mt-3"> <a href="{{ url()->previous() }}" class="mr-3"> <i class="fa fa-arrow-left"></i> </a> {{ $message->subject }} <a href="" class="float-right" onclick="window.print()" > <i class="fa fa-print"></i> </a> </p>
                    </div>
                    <div class="card-title">
                        
                        <div class="row mt-4">
                            <div class="col-1 text-right">

                                @if($message->sender_id == Auth::id())

                                    @if( !empty($message->receiver->photo) )
                                        <img src="{{ $message->receiver->photo }}" />
                                    @else
                                        <img src="{{ url('') }}/assets/images/users/1.jpg" class="rounded-circle" width="40" />
                                    @endif

                                @else
                                    
                                    @if( !empty($message->sender->photo) )
                                        <img src="{{ $message->sender->photo }}" />
                                    @else
                                        <img src="{{ url('') }}/assets/images/users/1.jpg" class="rounded-circle" width="40" />
                                    @endif

                                @endif
                                
                            </div>
                            <div class="col-8">
                                
                                @if($message->sender_id == Auth::id())
                                    <b>{{ $message->receiver->fullname }}</b> {{ $message->receiver->email }}
                                    <br/>
                                    from me
                                @else
                                    <b>{{ $message->sender->fullname }}</b> {{ $message->sender->email }}
                                    <br/>
                                    to me
                                @endif

                            </div>
                            <div class="col-3 text-right">
                                {{ $message->created_at->format('M, d, Y h:m a') }} ({{ $message->created_at->diffForHumans() }})
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        {!! $message->body !!}
                        
                    </div>

                </div>

            </div>

        </div>
    </div>


</div>
     



@endsection

@section('custom-script')

<script>


</script>

@endsection