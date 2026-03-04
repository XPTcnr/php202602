@extends("front.layout")
@section("content")
<script>
// 網頁載入時
$(document).ready(function(){
    // 呼叫getList
    getList("");
});

// 取得最新消息
function getList(typeId)
{
    $.ajax({
        url: "/news/getList",
        type: "get",
        //dataType: "json",
        data: {
            typeId: typeId,
            _token: "{{ csrf_token() }}"
        },
        success: function(msg){
            console.log(msg);
            $("#news-grid").html(msg);
        },
    });
}

function showActive(btn) {
  document.querySelectorAll('#news-tabs .tab-btn').forEach(b=>b.classList.remove('active'));
  btn.classList.add('active');
}
</script>
<div class="page" id="page-news">
  <div class="banner">
    <div class="banner-bg" style="background-image: url('https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=1400&q=80')"></div>
    <div class="banner-overlay"></div>
    <div class="banner-content"><h1>最新消息</h1><p>品牌動態 · 活動資訊</p></div>
  </div>
  <div class="section">
    <div class="tab-bar" id="news-tabs">
      <button class="tab-btn active" onclick="getList('');showActive(this)">全部</button>
      @if (!empty($types))
        @foreach($types as $data)
            <button class="tab-btn" onclick="getList('{{ $data->id }}');showActive(this)">{{ $data->typeName }}</button>
        @endforeach
      @endif
    </div>
    <div class="card-grid" id="news-grid"></div>
  </div>
</div>
@endsection