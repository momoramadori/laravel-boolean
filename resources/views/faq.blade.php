@extends('layouts.app')
@section('page-name','Domande frequenti')
@section('content')
    <main id='faq-page'>
        <div class="container-fluid">
            <div class='title'>
                <h1>Domande frequenti</h1>
                <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
            </div>
            <div class="faqs-wrapper clearfix">
                <div class='box prima-corso'>
                    <div class="content">
                        <h3>Prima del corso</h3>
                        @foreach ($faqs_prima as $faq_prima)
                        <div class="faq">
                            <h4 class="domanda">
                                {{$faq_prima['domanda']}}
                            </h4>
                            <p class='risposta'>{{$faq_prima['risposta']}}</p>
                            <i class="fas fa-plus active"></i>
                            <i class="fas fa-minus"></i>
                        </div> 
                        @endforeach
                    </div>
                </div>
                <div class='box dopo-corso'>
                    <div class="content">
                        <h3>Dopo il corso</h3>
                        @foreach ($faqs_dopo as $faq_dopo)
                        <div class="faq">
                            <h4 class="domanda">
                                {{$faq_dopo['domanda']}}
                            </h4>
                            <p class='risposta'>{{$faq_dopo['risposta']}}</p>
                            <i class="fas fa-plus active"></i>
                            <i class="fas fa-minus"></i>
                        </div> 
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection