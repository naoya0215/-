@include("layouts.app")

<form action="{{ route('shop.store') }}" method="post">
    @csrf
    <div class="form_list">
        <select name="category" id="category">
            @foreach($categories as $category)
                <optgroup label = "{{ $category->category_name }}">
            @endforeach
        </select>
    </div>
    <div>
        <h2>商品名</h2>
        <label for="name" value="商品名">
        <input id="name" class="name" type="text" name="name" :value="old('name')">
    </div>
        <h2>商品情報</h2>
        <label for="information" value="商品情報">
        <input id="information" class="information" type="text" name="information" :value="old('information')">
    </div>
    <div>
        <h2>価格</h2>
        <label for="price" value="価格">
        <input id="price" class="price" type="number" name="price" :value="old('price')">
    </div>
    <div>
        <h2>表示順序</h2>
        <label for="sort_order" value="表示順序">
        <input id="sort_order" class="sort_order" type="number" name="sort_order">
    </div>
    <div>
        <h2>販売中/停止中</h2>
        <label for="selling">販売中</label>
        <input type="radio" name="is_selling" value="1">
        <label for="selling">停止中</label>
        <input type="radio" name="is_selling" value="0">
    </div>  
    <button class="button">
        新規登録
    </button>
</form>

