<nav id="navbar">
  <a class="logo" href="#" onclick="navigate('home')">品<span>牌</span>閣</a>
  <ul class="nav-links">
    <li><a href="#" onclick="navigate('about')">關於我們</a></li>
    <li><a href="#" onclick="navigate('news')">最新消息</a></li>
    <li>
      <button onclick="toggleDropdown(this)">產品介紹 ▾</button>
      <div class="dropdown-menu" id="prod-dropdown">
        <a href="#" onclick="navigate('products','all');closeDropdowns()">全部產品</a>
        <a href="#" onclick="navigate('products','A');closeDropdowns()">系列 A — 日用品</a>
        <a href="#" onclick="navigate('products','B');closeDropdowns()">系列 B — 保養品</a>
        <a href="#" onclick="navigate('products','C');closeDropdowns()">系列 C — 精品</a>
      </div>
    </li>
    <li id="nav-member" style="display:none">
      <button onclick="toggleDropdown(this)">會員專區 ▾</button>
      <div class="dropdown-menu">
        <a href="#" onclick="navigate('member','profile');closeDropdowns()">基本資料</a>
        <a href="#" onclick="navigate('member','password');closeDropdowns()">修改密碼</a>
        <a href="#" onclick="navigate('member','cart');closeDropdowns()">購物車</a>
        <a href="#" onclick="navigate('member','orders');closeDropdowns()">訂單記錄</a>
        <a href="#" onclick="logout();closeDropdowns()">登出</a>
      </div>
    </li>
    <li id="nav-login"><a href="#" onclick="openModal('login')">登入 / 加入會員</a></li>
    <li>
      <button class="cart-btn" onclick="navigate('member','cart')">
        🛒 購物車
        <span class="cart-badge" id="cart-badge">0</span>
      </button>
    </li>
  </ul>
  <button class="hamburger" id="hamburger" onclick="toggleMobile()">
    <span></span><span></span><span></span>
  </button>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobile-menu">
  <a href="#" onclick="navigate('about');closeMobile()">關於我們</a>
  <a href="#" onclick="navigate('news');closeMobile()">最新消息</a>
  <button onclick="document.getElementById('mobile-sub').classList.toggle('open')">產品介紹 ▾</button>
  <div class="mobile-sub" id="mobile-sub">
    <a href="#" onclick="navigate('products','all');closeMobile()">全部產品</a>
    <a href="#" onclick="navigate('products','A');closeMobile()">系列 A</a>
    <a href="#" onclick="navigate('products','B');closeMobile()">系列 B</a>
    <a href="#" onclick="navigate('products','C');closeMobile()">系列 C</a>
  </div>
  <a href="#" id="mobile-login" onclick="openModal('login');closeMobile()">登入 / 加入會員</a>
  <a href="#" id="mobile-member" style="display:none" onclick="navigate('member','profile');closeMobile()">會員專區</a>
  <a href="#" id="mobile-logout" style="display:none" onclick="logout();closeMobile()">登出</a>
</div>