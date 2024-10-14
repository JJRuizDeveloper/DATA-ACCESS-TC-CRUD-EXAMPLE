<html>
    <head>
        <style>
            ul {
                list-style-type: none;
                display: flex;
                flex-direction: column;
                gap: 5px;
            }
            li {
                width: 150px;
                text-align: center;
                display: flex;
                justify-content: flex-start;
                align-items: center;
                padding: 10px;
                border-radius:5px;
                border: 1px solid #ccc;
                color: #3c3c3c;
            }
            .delete-btn {
                margin: 2px;
                cursor: pointer;
            }
            </style>
    </head>
    <body>
        <form action="{{ route('product.store') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Write your new product" />
            <input type="submit" value="Add Product" />
        </form>
        <h1>Products:</h1>
        <ul>
       @forelse($products as $product)
        <li>
            <a href="{{ route('product.edit', $product->id) }}">✏️​</a>
            <form action="{{ route('product.destroy', $product->id) }}" method="post" class="delete-btn">
                @method("DELETE")
                @csrf
                <input type="submit" value="🗑️" />
            </form>
            {{ $product->name }} 
        ​</li>
       @empty
        <li>NO DATA</li>
       @endforelse
        </ul>
    </body>
</html>
