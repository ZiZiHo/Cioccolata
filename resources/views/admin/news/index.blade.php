@extends('layouts.template')

@section('css')
    <script src="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"></script>
@endsection

@section('h1_title', '最新消息首頁')

@section('main')
    <a type="button" class="btn btn-sm btn-success m-2" href="{{ asset('/admin/news/create') }}">新增</a>
    <table id="example" class="display container" style="width:100%">
        <thead>
            <tr>
                <th>消息標題</th>
                <th>消息摘要</th>
                <th>消息種類</th>
                <th>張貼日期</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($record as $item)
                <tr>
                    <td>{{ Str::limit($item->title, 20) }}</td>
                    <td>{{ Str::limit($item->summary, 20) }}</td> {{-- 限制字數 --}}
                    <td>{{ $item->newsType->type_name }}</td>
                    <td>{{ $item->date }}</td>
                    <td>
                        <a type="button" href="{{ asset('/admin/news/edit') }}/{{ $item->id }}"
                            class="btn btn-sm btn-primary">編輯</a>

                        <form style="display:inline-block;"
                            action="{{ asset('/admin/news/delete') }}/{{ $item->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger">刪除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        <tfoot>
            <tr>
                <th>消息標題</th>
                <th>消息摘要</th>
                <th>消息種類</th>
                <th>張貼日期</th>
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
