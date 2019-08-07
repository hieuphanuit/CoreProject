<form action="{{route('products.store')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <table>
        <tr>
            <td>tên sản phẩm</td>
            <td>
                <input type="text" name="name"/>
            </td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td>
                <input type="text" name="price"/>
            </td>
        </tr>
        <tr>
            <td>size</td>
            <td>
                <input type="text" name="size"/>
            </td>
        </tr>
    </table>
    <button type="submit"> tạo</button>
</form>