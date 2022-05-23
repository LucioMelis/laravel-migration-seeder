<div>
    @forelse ($trains as $train)
        <h3>{{ $train->azienda }}</h3>
        <p>{{ $train->stazione_di_partenza }}</p>
        <p>{{ $train->getData() }}</p>
    @empty
        <p>Non ho trovato niente</p>
    @endforelse

</div>
