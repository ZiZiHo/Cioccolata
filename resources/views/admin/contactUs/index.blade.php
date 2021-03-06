@extends('layouts.template')

@section('css')
    <script src="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"></script>
@endsection

@section('h1_title', '聯繫我們首頁')

@section('main')
    <a type="button" class="btn btn-sm btn-success m-2" href="{{ asset('/admin/contactus/create') }}">新增</a>
    <table id="example" class="display container" style="width:100%">
        <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>content</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($record as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->content }}</td>
                    <td>
                        <a type="button" href="{{ asset('/admin/contactus/edit') }}/{{ $item->id }}"
                            class="btn btn-sm btn-primary">編輯</a>
                        <form style="display:inline-block;"
                            action="{{ asset('/admin/contactus/delete') }}/{{ $item->id }}"
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
                <th>name</th>
                <th>email</th>
                <th>content</th>
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
