<div class="row">
    <div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 border-right p-4">
        <div class="form-group">
            <label for="product">Nome do produto</label>
            <input type="text" name="product" class="form-control limite @error('product') is-invalid @enderror" placeholder="Nome do produto" required value="{{ $product->product ?? old('product') }}">
        </div>
        <div class="form-group">
            <label for="category_id">Categoria</label>
            <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" required>
                @if(url()->current() == route('admin.products.create'))

                <option value="">Definir categoria</option>

                <@foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach

                @else

                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? "selected='selected'" : ""}}>{{ $category->category }}</option>
                @endforeach

                @endif

            </select>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="value">Valor <small>(Colocar ponto 1111.11)</small></label>
                    <input type="number" min="1" step="any" name="value" class="form-control @error('value') is-invalid @enderror" placeholder="1111.11" required value="{{ $product->value ?? old('value') }}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="value_discount">Valor promocional <small>(Opcional)</small></label>
                    <input type="number" min="1" step="any" name="value_discount" class="form-control @error('value_discount') is-invalid @enderror" placeholder="1111.11" value="{{ $product->value_discount ?? old('value_discount') }}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" class="form-control summernote @error('description') is-invalid @enderror" required>{{ $product->description ?? old('description') }}</textarea>
        </div>
    </div>
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 p-4">

        @if(url()->current() == route('admin.products.create'))
        @else
        <div class="text-center mb-3">
            <img src="{{ url('storage/images/product/'.$product->image) }}" alt="{{ $product->product }}" class="img-fluid border">
        </div>
        @endif

        <div class="form-group">
            <label for="image">Capa <small>(Padrão: 300<strong>L</strong> x 300<strong>A</strong> | Máx: 2MB)</small></label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image">
                    <label class="custom-file-label" for="image">Escolha o arquivo</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="weight">Peso <small>(Cálculo de frete)</small></label>
            <input type="text" name="weight" class="form-control @error('weight') is-invalid @enderror" placeholder="Peso" value="{{ $product->weight ?? old('weight') }}">
        </div>
        <div class="form-group">
            <label for="dimension_x">Largura do pacote <small>(Cálculo de frete)</small></label>
            <input type="text" name="dimension_x" class="form-control @error('dimension_x') is-invalid @enderror" placeholder="Largura" value="{{ $product->dimension_x ?? old('dimension_x') }}">
        </div>
        <div class="form-group">
            <label for="dimension_y">Altura do pacote <small>(Cálculo de frete)</small></label>
            <input type="text" name="dimension_y" class="form-control @error('dimension_y') is-invalid @enderror" placeholder="Altura" value="{{ $product->dimension_y ?? old('dimension_y') }}">
        </div>
        <div class="form-group">
            <label for="dimension_z">Profundidade do pacote <small>(Cálculo de frete)</small></label>
            <input type="text" name="dimension_z" class="form-control @error('dimension_z') is-invalid @enderror" placeholder="Profundidade" value="{{ $product->dimension_z ?? old('dimension_z') }}">
        </div>

        <div class="form-group">
            <label for="sku">SKU <small>(Localização no estoque)</small></label>
            <input type="text" name="sku" class="form-control @error('sku') is-invalid @enderror" required value="{{ $product->sku ?? old('sku') }}">
        </div>
        <div class="form-group">
            <label for="stock">Estoque <small>(Quantidade)</small></label>
            <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ $product->stock ?? old('stock') }}">
        </div>
        <div class="form-group">
            <label for="active">Ativo <small>(Visível ao público)</small></label>
            <select class="form-control @error('active') is-invalid @enderror" name="active" required>

                @if(url()->current() == route('admin.products.create'))

                <option value="1">Sim</option>
                <option value="0">Não</option>

                @else

                <option value="0">Não</option>
                <option value="1" {{ $product->active == 1 ? "selected='selected'" : ""}}>Sim</option>

                @endif

            </select>
        </div>
    </div>
</div>
