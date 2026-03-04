@foreach($list as $data)
<div class="card">
    <a href="/news/detail/{{ $data->id }}">
        <div class="card-img-wrap">
            <img class="card-img" src="/images/news/{{ $data->photo }}" alt="" style="min-height:180px">
        </div>
        <div class="card-body">
            <span class="card-category">{{ $data->typeName }}</span>
            <div class="card-date">{{ $data->createTime }}</div>
            <div class="card-title">{{ $data->title }}</div>
        </div>
    </a>
</div>
@endforeach