@extends('layouts.template')

@section('css')
    <script src="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"></script>
@endsection

@section('h1_title', '聯繫我們首頁')

@section('main')
    <a type="button" class="btn btn-sm btn-success m-2" href="{{ asset('/admin/user/create') }}">新增</a>
    <table id="example" class="display container" style="max-width:100% ">
        <thead>
            <tr>
                {{-- <th>訂購者姓名</th> --}}
                <th>訂單編號</th>
                <th>收件人姓名</th>
                <th>收件人手機</th>
                <th>收件人信箱</th>
                <th>收件人地址</th>
                <th>訂單總額</th>
                <th>運送方式</th>
                <th>運費</th>
                <th>運送狀態</th>
                <th>訂單狀況</th>
                <th>商品總數</th>
                <th>備註</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($record as $item)
                <tr>
                    {{-- 訂單編號關聯到會員的姓名 --}}
                    {{-- <td>{{ $item->user_id }}</td> --}}
                    <td>{{ $item->order_no }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->pay_type }}</td>
                    <td>{{ $item->is_paid }}</td>
                    <td>{{ $item->shipping }}</td>
                    <td>{{ $item->shipping_fee }}</td>
                    <td>{{ $item->shipping_status_id }}</td>
                    <td>{{ $item->order_status_id }}</td>
                    <td>{{ $item->remark }}</td>
                    {{-- <td>{{ count() order的數量 }}</td> --}}

                    <td>
                        <a type="button" href="{{ asset('/admin/order/edit') }}/{{ $item->id }}"
                            class="btn btn-sm btn-primary">檢視詳細</a>
                        <form style="display:inline-block;"
                            action="{{ asset('/admin/order/delete') }}/{{ $item->id }}"
                            method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger">刪除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        <tfoot>
            <tr>
                <th>訂購者姓名</th>
                <th>訂單編號</th>
                <th>收件人姓名</th>
                <th>收件人聯絡方式</th>
                <th>收件人地址</th>
                <th>訂單總額</th>
                <th>運送方式</th>
                <th>運費</th>
                <th>運送狀態</th>
                <th>訂單狀況</th>
                <th>備註</th>
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
