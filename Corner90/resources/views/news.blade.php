<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Football News — Corner90</title>
<meta name="description" content="Breaking transfer news, injury updates and tactical analysis from around the world.">
<link rel="stylesheet" href="styles.css">
</head>
<body>

<header class="site-header">
  <div class="container">
    <a href="index.html" class="brand" aria-label="Corner90 home">
      <svg viewBox="0 0 340 100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Corner90 logo">
        <path d="M8 15 L8 85 L78 85" fill="none" stroke="#3A4A42" stroke-width="3" stroke-linecap="round"/>
        <path d="M48 85 A 40 40 0 0 1 8 45" fill="none" stroke="#2F7A4D" stroke-width="3"/>
        <circle cx="36" cy="57" r="4.5" fill="#FFB020"/>
        <text x="94" y="64" style="font-family:'Oswald',sans-serif;font-weight:600;font-size:34px;fill:#F2F5F3;letter-spacing:1px;">CORNER<tspan style="font-weight:700;fill:#45A968;">90</tspan></text>
      </svg>
    </a>
    <nav class="main-nav" aria-label="Primary">
      <a href="index.html">Home</a>
      <a href="fixtures.html">Fixtures</a>
      <a href="standings.html">Standings</a>
      <a href="news.html" aria-current="page">News</a>
    </nav>
    <div class="header-actions">
      <span class="live-pill"><span class="blip"></span> 3 LIVE</span>
      <button class="nav-toggle" aria-label="Toggle menu" aria-expanded="false">☰</button>
    </div>
  </div>
</header>

<main class="container">
  <div class="pitch-line" style="margin-top:40px;">
    <span class="dot"></span>
    <span class="label">Newsroom</span>
  </div>
  <h1 style="font-size:36px; margin-bottom:24px;">Latest Football News</h1>

  <div class="filters" data-scope="#news-list">
    <button class="filter-chip" aria-pressed="true" data-filter="all">All</button>
    <button class="filter-chip" aria-pressed="false" data-filter="transfers">Transfers</button>
    <button class="filter-chip" aria-pressed="false" data-filter="injuries">Injury news</button>
    <button class="filter-chip" aria-pressed="false" data-filter="analysis">Analysis</button>
  </div>

  <div id="news-list" class="news-grid" style="margin-bottom:56px;">
    <a class="article-card" href="article.html" data-comp="transfers">
      <div class="article-thumb"></div>
      <div class="article-body">
        <span class="article-cat">Transfers</span>
        <h3>Sevilla open talks over a permanent deal for their on-loan winger</h3>
        <p class="article-dek">The 22-year-old has scored eight goals since arriving in January.</p>
        <span class="article-foot">4 hours ago</span>
      </div>
    </a>
    <a class="article-card" href="article.html" data-comp="injuries">
      <div class="article-thumb"></div>
      <div class="article-body">
        <span class="article-cat">Injury news</span>
        <h3>Leipzig confirm midfielder will miss remainder of the season</h3>
        <p class="article-dek">A scan revealed ligament damage picked up in Saturday's defeat.</p>
        <span class="article-foot">6 hours ago</span>
      </div>
    </a>
    <a class="article-card" href="article.html" data-comp="analysis">
      <div class="article-thumb"></div>
      <div class="article-body">
        <span class="article-cat">Analysis</span>
        <h3>Why dropping deeper has unlocked PSG's attack this spring</h3>
        <p class="article-dek">A tactical shift in March has coincided with a run of ten wins in twelve.</p>
        <span class="article-foot">8 hours ago</span>
      </div>
    </a>
    <a class="article-card" href="article.html" data-comp="transfers">
      <div class="article-thumb"></div>
      <div class="article-body">
        <span class="article-cat">Transfers</span>
        <h3>Three clubs rumoured to be tracking Villa's Moreno in the summer window</h3>
        <p class="article-dek">Scouts from Spain and Italy were reportedly at the Emirates on Saturday.</p>
        <span class="article-foot">10 hours ago</span>
      </div>
    </a>
    <a class="article-card" href="article.html" data-comp="analysis">
      <div class="article-thumb"></div>
      <div class="article-body">
        <span class="article-cat">Analysis</span>
        <h3>How set-piece coaching turned Villa into the league's most dangerous team from corners</h3>
        <p class="article-dek">A specialist hire in the summer has already paid off with eleven goals.</p>
        <span class="article-foot">12 hours ago</span>
      </div>
    </a>
    <a class="article-card" href="article.html" data-comp="injuries">
      <div class="article-thumb"></div>
      <div class="article-body">
        <span class="article-cat">Injury news</span>
        <h3>Real Madrid sweat on late fitness test ahead of Sevilla clash</h3>
        <p class="article-dek">The defender picked up a knock in training on Thursday.</p>
        <span class="article-foot">1 day ago</span>
      </div>
    </a>
  </div>
</main>

<footer class="site-footer">
  <div class="container">
    <div class="footer-bottom">
      <span>© 2026 Corner90. All rights reserved.</span>
      <span>Every match, every minute.</span>
    </div>
  </div>
</footer>

<script src="script.js"></script>
</body>
</html>
