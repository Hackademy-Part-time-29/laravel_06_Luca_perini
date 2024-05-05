<x-Layout :title="$title">
    <div class="contact-container">
        <h2>Hai bisogno di info? <br>Contattaci:</h2>
        <form action="{{route('saveContact')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome">
            </div>
            <div class="form-group">
                <label for="cognome">Cognome:</label>
                <input type="text" id="cognome" name="cognome">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <button type="submit">Invia</button>
            </div>
        </form>
    </div>
</x-Layout>