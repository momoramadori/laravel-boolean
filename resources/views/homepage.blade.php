@extends('layouts.app')
@section('page-name','Home')
@section('content')
    <main>
        <div class="container jumbotron">
            <div>
                <h1>Diventa <strong>sviluppatore web</strong></h1>
                <p>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>
                <ul>
                    <li><strong>6 mesi</strong> di corso intensivo online in diretta</li>
                    <li><strong>Nessuna competenza</strong> di programmazione richiesta</li>
                    <li>Siamo certi del tuo successo, altrimenti <strong>ti rimborsiamo</strong></li>
                </ul>
            </div>
            <div class='wrapper'>
                 <img src="{{asset('images/pc-black-gif.gif')}}" alt="Pc gif">
            </div>
        </div>
        <section id='info-data'>
            <div class="container">
                <div>
                    <h3>98%</h3>
                    <p>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</p>
                </div>
                <div>
                    <h3>€ 23.000</h3>
                    <p>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</p>
                </div>
                <div>
                    <h3>#1</h3>
                    <p>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</p>
                </div>
            </div>
            
        </section>
    </main>
@endsection