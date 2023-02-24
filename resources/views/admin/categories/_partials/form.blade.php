<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 border-right p-4">
        <div class="form-group">
            <label for="category">Categoria</label>
            <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" placeholder="Nome da categoria" required value="{{ $category->category ?? old('category') }}">
        </div>
    </div>

</div>
