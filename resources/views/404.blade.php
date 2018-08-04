@extends('layout.master',['page_title'=>'Danh sách sản phẩm | Sea Fashion'])
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                Trang không tồn tại hoặc đã bị xoá, vui lòng <a href="/admin/apartment">click vào đây</a> để trở về trang chủ hoặc trang sẽ tự chuyển trong 5s nữa.
            </div>
            <div class="card-body">
                <img src="http://cdn2.hubspot.net/hubfs/53/bitly-404-page.png" alt="" class="img-thumbnail">
            </div>
        </div>
    </div>
    <script>
        window.setTimeout(function(){
            window.location.href = "/admin/apartment";
        }, 5000);
    </script>
@endsection