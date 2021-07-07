@extends('layouts.template')

@section('css')
    <script src="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"></script>
@endsection

@section('h1_title', '產品首頁')

@section('main')
    <a type="button" class="btn btn-sm btn-success m-2" href="{{ asset('/admin/product/create') }}">新增</a>
    <table id="example" class="display container" style="width:100%">
        <thead>
            <tr>
                <th>產品名稱</th>
                <th>產品類別</th>
                <th>產品價格</th>
                <th>產品內容物單位</th>
                <th>產品成分</th>
                <th>產品重量</th>
                <th>保存期限</th>
                <th>保存溫度</th>
                <th>備註</th>
                <th>推薦序</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($record as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->product_type_id }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->unit }}</td>
                    <td>{{ $item->ingredient }}</td>
                    <td>{{ $item->weight }}</td>
                    <td>{{ $item->EXP }}</td>
                    <td>{{ $item->temp }}</td>
                    <td>{{ $item->remark }}</td>
                    <td>{{ $item->sort }}</td>
                    <td>
                        <a type="button" href="{{ asset('/admin/product/edit') }}/{{ $item->id }}"
                            class="btn btn-sm btn-primary">編輯</a>

                        <form style="display:inline-block;"
                            action="{{ asset('/admin/product/delete') }}/{{ $item->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger">刪除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        <tfoot>
            <tr>
                <th>產品名稱</th>
                <th>產品類別</th>
                <th>產品價格</th>
                <th>產品內容物單位</th>
                <th>產品成分</th>
                <th>產品重量</th>
                <th>保存期限</th>
                <th>保存溫度</th>
                <th>備註</th>
                <th>推薦序</th>
                <th>操作</th>
            </tr>
        </tfoot>
    </table>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
