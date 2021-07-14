@extends('layouts.nav_footer')

@section('title', '巧遇農情 - 修改會員資料 Member Edit')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/member-oeder-list.css') }}">

    <!-- datatable CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection


@section('main')
    <main>
        <div class="banner"></div>
        <div class="title">
            <h1>會員中心</h1>
            <h5>Member Center</h5>
        </div>

        <div class="link-group">

            <a href="{{ asset('/member') }}" class="edit">
                <h4>修改會員資料</h4>
            </a>
            <div class="order-list">
                <h4>訂單狀態查詢</h4>
            </div>
            <a href="#" class="logout">
                <h4>會員登出</h4>
            </a>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>訂單日期</th>
                                    <th>訂單編號</th>
                                    <th>訂單總額</th>
                                    <th>訂單狀態</th>
                                    <th>付款狀態</th>
                                    <th>出貨狀態</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $orderStatus;
                                    $orderStatus[0] = '處理中';
                                    $orderStatus[1] = '已確認';
                                    $orderStatus[2] = '已完成';
                                    $orderStatus[3] = '已取消';

                                    $payStatus;
                                    $payStatus[0] = '未付款';
                                    $payStatus[1] = '付款失敗';
                                    $payStatus[2] = '超過付款時間';
                                    $payStatus[3] = '已付款';
                                    $payStatus[4] = '退款中';
                                    $payStatus[5] = '已退款';

                                    $shipStatus;
                                    $shipStatus[0] = '備貨中';
                                    $shipStatus[1] = '發貨中';
                                    $shipStatus[2] = '已發貨';
                                    $shipStatus[3] = '已到達';
                                    $shipStatus[4] = '已取貨';
                                    $shipStatus[5] = '退貨中';
                                    $shipStatus[6] = '已退貨';
                                @endphp
                                @foreach ($record as $item)
                                    <tr>
                                        <td>20{{ date('y-m-d', strtotime($item->created_at)) }}</td>
                                        <td>{{ $item->order_no }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $orderStatus[$item->order_status_id] }}</td>
                                        <td>{{ $payStatus[$item->is_paid] }}</td>
                                        <td>{{ $shipStatus[$item->shipping_status_id] }}</td>
                                    </tr>
                                @endforeach

                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>訂單日期</th>
                                    <th>訂單編號</th>
                                    <th>訂單總額</th>
                                    <th>訂單狀態</th>
                                    <th>付款狀態</th>
                                    <th>出貨狀態</th>
                                </tr>
                            </tfoot>
                        </table>



                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

@section('js')
    <!-- atatable -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
