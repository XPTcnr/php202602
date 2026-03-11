@extends("front.layout")
@section("content")
<div class="page" id="page-about">
    <div class="banner">
        <div class="banner-bg" style="background-image: url('https://images.unsplash.com/photo-1497366216548-37526070297c?w=1400&q=80')"></div>
        <div class="banner-overlay"></div>
        <div class="banner-content">
            <h1>關於我們</h1>
            <p>品牌故事 · 理念傳承</p>
        </div>
    </div>
    <div class="section">
        <h2 class="section-title">品牌理念</h2>
        <div class="divider"></div>
        <div class="about-blocks">
            <div class="about-block">
                <img class="about-img" src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=800&q=80" alt="品牌故事">
                <div class="about-text">
                    <h3>從一個夢想開始</h3>
                    <p>2005年，創辦人陳雅琳在一間小工作室裡，懷著對美好生活的憧憬，開始了這段品牌旅程。她相信，每一件日常用品都應該帶給人溫暖與喜悅。</p>
                    <p>我們的產品不僅僅是商品，更是生活態度的體現。每一條線條、每一個細節，都經過反覆推敲，只為讓您的每一天更美好。</p>
                </div>
            </div>
            <div class="about-block reverse">
                <img class="about-img" src="https://images.unsplash.com/photo-1556761175-4b46a572b786?w=800&q=80" alt="工匠精神">
                <div class="about-text">
                    <h3>工匠精神 · 品質堅持</h3>
                    <p>我們與超過50位來自全球的優秀工匠合作，將傳統工藝與現代設計完美融合。每一件產品都經過嚴格的品質把關，確保您收到的是最好的。</p>
                    <p>從原料採購到成品包裝，我們的每一個環節都透明可追溯，讓您安心享受。</p>
                </div>
            </div>
            <div class="about-block">
                <img class="about-img" src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800&q=80" alt="永續發展">
                <div class="about-text">
                    <h3>永續發展 · 綠色承諾</h3>
                    <p>我們深知環境保護的重要性，因此積極採用環保材料，並致力於減少碳足跡。我們承諾到2030年實現碳中和目標。</p>
                    <p>每一次購買，您也是在為地球的未來投票。我們會將部分收益捐贈給環保組織，共同守護這片美麗的土地。</p>
                </div>
            </div>
        </div>
    </div>
    @if(!empty($event))
    <div class="timeline-section">
        <div class="timeline-inner">
            <h2 class="section-title" style="text-align:center">品牌大事記</h2>
            <div class="divider" style="margin:12px auto 48px"></div>
            <div class="timeline">
                @foreach($event as $data)
                <div class="tl-item">
                    <div class="tl-dot"></div>
                    <div class="tl-year">{{ date("Y", strtotime($data->dates)) }}</div>
                    <div class="tl-title">{{ $data->title }}</div>
                    <div class="tl-desc">{{ $data->content }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
@endsection