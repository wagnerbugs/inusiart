<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 border-right p-4">
        <div class="form-group">
            <label for="page">Página</label>
            <input type="text" name="page" class="form-control @error('page') is-invalid @enderror" placeholder="Nome da página" required="" value="{{ $page->page ?? old('page') }}">
        </div>
        <div class="form-group">
            <label for="active">Ativo</label>
            <select class="form-control @error('active') is-invalid @enderror" name="active">
                @if(url()->current() == route('admin.pages.create'))

                <option value="1">Sim</option>
                <option value="0">Não</option>

                @else

                @if ($page->active == 1)

                <option value="1">Sim</option>
                <option value="0">Não</option>

                @else

                <option value="0">Não</option>
                <option value="1">Sim</option>

                @endif

                @endif
            </select>
        </div>
        <div class="form-group">
            <label for="target">Ação de abertura</label>
            <select class="form-control @error('target') is-invalid @enderror" name="target">
                @if(url()->current() == route('admin.pages.create'))

                <option value="1">Interno</option>
                <option value="0">Nova aba</option>

                @else

                @if ($page->target == 1)

                <option value="1">Interno</option>
                <option value="0">Nova aba</option>

                @else

                <option value="0">Nova aba</option>
                <option value="1">Interno</option>

                @endif

                @endif
            </select>
        </div>
        <div class="form-group">
            <label for="content">Conteúdo da Página</label>
            <textarea name="content" class="form-control summernote @error('content') is-invalid @enderror" required>{{ $page->content ?? old('content') }}</textarea>
        </div>
    </div>

</div>
