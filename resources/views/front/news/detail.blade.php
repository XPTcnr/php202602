@extends("front.layout")
@section("content")
<link rel="stylesheet" href="/css/news_detail.css">
<section class="hero">
  <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1400&q=80" alt="頒獎典禮">
  <div class="hero-grad"></div>
  <div class="hero-text">
    <h1>{{ $news->title }}</h1>
    <div class="hero-rule"></div>
  </div>
</section>

<div class="wrap">

  <aside>
    <div class="sidebar-inner">
      <a href="/news" class="back-link">← 返回最新消息</a>
      <div class="info-box">
        <div class="info-row">
          <div class="info-label">類別</div>
          <div class="info-val">📰 {{ $news->types->typeName }}</div>
        </div>
        <div class="info-row">
          <div class="info-label">發布時間</div>
          <div class="info-val">{{ $news->createTime }}</div>
        </div>
      </div>
    </div>
  </aside>

  <article>

    <div class="art-top">
      <div class="art-meta">
        <span class="cat-badge">📰 {{ $news->types->typeName }}</span>
        <span class="art-date">{{ $news->createTime }}</span>
      </div>
      <h2 class="art-title">{{ $news->title }}</h2>
    </div>

    <div class="art-img-wrap">
      <img class="art-img" src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&q=80" alt="頒獎典禮現場">
    </div>
    {{--<p class="img-caption">▲ 頒獎典禮現場實況</p>--}}

    <div class="lead">
      {{ mb_substr($news->content, 0, 20, 'UTF-8') . "……" }}
    </div>

    <div class="body-text">
      <p>{!! $news->content !!}</p>
    </div>

    <div class="art-footer">
      <div class="tags">
        <span class="tag">📰 {{ $news->types->typeName }}</span>
        <span class="tag">🗓 {{ $news->createTime }}</span>
      </div>
    </div>

  </article>
</div>
@endsection