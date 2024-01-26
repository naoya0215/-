@include("layouts.app")
<div class="shop">
    <h1>shop</h1>
    <form action="{{ route('shop.index') }}" method="GET">
        @csrf
        <div class="name_key">
            <label for="keyword">キーワードで検索
                <input type="text" name="keyword" class="keyword" value="{{ $keyword }}">
            </label>
            <div class="name_word">
                商品名を検索してください
            </div>
        </div>
        <div>
            <div class="name_search">
                <input type="submit" class="search_btn" value="検索">
            </div>
        </div>
    </form>   
    <table class="table">
        <thead>
            <tr>
                <th>編集</th>
                <th>商品名</th>
                <th>商品情報</th>
                <th>価格</th>
                <th>表示順序</th>
                <th>販売中/停止中</th>
                <th>削除</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shops as $shop)
            <tr>
                <td>編集</td>
                <td>{{$shop->name}}</td>
                <td>{{$shop->information}}</td>
                <td>{{$shop->price}}</td>
                <td>{{$shop->sort_order}}</td>
                <td>{{$shop->is_selling}}</td>
                <td>削除</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <a href="{{ route('shop.create') }}">商品登録</a>
</div>