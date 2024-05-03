<x-Layout :title="$title">
    <div class="card-container">
        @foreach ($team as $member)
        <div class="card">
            <div class="card-header">Team dello Studio Legale</div>
                <div class="card-content">
                    <p>{{$member['name']}}</p>
                    <p>{{$member['surname']}}</p>
                    <p>{{$member['mail']}}</p>
                    <p>{{$member['professione']}}</p>
                    <img src="{{$member['image']}}" alt="">
                    <p>{{$member['descrizione_lavoro']}}</p>
                   
                </div>
        </div>
        @endforeach
    </div>

</x-Layout>