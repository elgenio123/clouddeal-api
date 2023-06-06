<!-- edit.blade.php -->

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $category->name }}" required>
    <!-- Autres champs du formulaire -->
    <button type="submit">Mettre à jour</button>
</form>
