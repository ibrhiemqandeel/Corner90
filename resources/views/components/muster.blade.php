<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corner90 — Football News, Fixtures &amp; Live Scores</title>
    <meta name="description" content="Corner90 brings you live scores, fixtures, standings and breaking football news.">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>

<body>

    <header class="site-header">
        <div class="container">
            <a href="index.html" class="brand" aria-label="Corner90 home">
                <svg viewBox="0 0 340 100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Corner90 logo">
                    <path d="M8 15 L8 85 L78 85" fill="none" stroke="#3A4A42" stroke-width="3" stroke-linecap="round" />
                    <path d="M48 85 A 40 40 0 0 1 8 45" fill="none" stroke="#2F7A4D" stroke-width="3" />
                    <circle cx="36" cy="57" r="4.5" fill="#FFB020" />
                    <text x="94" y="64" style="font-family:'Oswald',sans-serif;font-weight:600;font-size:34px;fill:#F2F5F3;letter-spacing:1px;">CORNER<tspan style="font-weight:700;fill:#45A968;">90</tspan></text>
                </svg>
            </a>
            <nav class="main-nav" aria-label="Primary">
                <a href="index.html" aria-current="page">Home</a>
                <a href="fixtures.html">Fixtures</a>
                <a href="standings.html">Standings</a>
                <a href="news.html">News</a>
            </nav>
            <div class="header-actions">
                <span class="live-pill"><span class="blip"></span> 3 LIVE</span>
                <button class="nav-toggle" aria-label="Toggle menu" aria-expanded="false">☰</button>
            </div>
        </div>
    </header>

    <div class="ticker" aria-label="Live score ticker">
        <div class="ticker-track">
            <div class="tick"><span class="min">67'</span><span class="teams">Arsenal</span><span class="score">2–1</span><span class="teams">Aston Villa</span></div>
            <div class="tick"><span class="min ft">FT</span><span class="teams">Inter Milan</span><span class="score">0–0</span><span class="teams">AC Milan</span></div>
            <div class="tick"><span class="min">23'</span><span class="teams">Real Madrid</span><span class="score">1–0</span><span class="teams">Sevilla</span></div>
            <div class="tick"><span class="min ft">FT</span><span class="teams">Bayern Munich</span><span class="score">3–2</span><span class="teams">RB Leipzig</span></div>
            <div class="tick"><span class="min">HT</span><span class="teams">PSG</span><span class="score">1–1</span><span class="teams">Marseille</span></div>
            <!-- duplicate for seamless loop -->
            <div class="tick"><span class="min">67'</span><span class="teams">Arsenal</span><span class="score">2–1</span><span class="teams">Aston Villa</span></div>
            <div class="tick"><span class="min ft">FT</span><span class="teams">Inter Milan</span><span class="score">0–0</span><span class="teams">AC Milan</span></div>
            <div class="tick"><span class="min">23'</span><span class="teams">Real Madrid</span><span class="score">1–0</span><span class="teams">Sevilla</span></div>
            <div class="tick"><span class="min ft">FT</span><span class="teams">Bayern Munich</span><span class="score">3–2</span><span class="teams">RB Leipzig</span></div>
            <div class="tick"><span class="min">HT</span><span class="teams">PSG</span><span class="score">1–1</span><span class="teams">Marseille</span></div>
        </div>
    </div>

    <main class="site-main">
        {{ $slot }}
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <svg viewBox="0 0 340 100" width="150" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M8 15 L8 85 L78 85" fill="none" stroke="#3A4A42" stroke-width="3" stroke-linecap="round" />
                        <path d="M48 85 A 40 40 0 0 1 8 45" fill="none" stroke="#2F7A4D" stroke-width="3" />
                        <circle cx="36" cy="57" r="4.5" fill="#FFB020" />
                        <text x="94" y="64" style="font-family:'Oswald',sans-serif;font-weight:600;font-size:34px;fill:#F2F5F3;letter-spacing:1px;">CORNER<tspan style="font-weight:700;fill:#45A968;">90</tspan></text>
                    </svg>
                </div>
                <div>
                    <h5>Coverage</h5>
                    <ul>
                        <li><a href="fixtures.html">Fixtures</a></li>
                        <li><a href="standings.html">Standings</a></li>
                        <li><a href="news.html">News</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Competitions</h5>
                    <ul>
                        <li><a href="#">Premier League</a></li>
                        <li><a href="#">La Liga</a></li>
                        <li><a href="#">Bundesliga</a></li>
                    </ul>
                </div>
                <div>
                    <h5>About</h5>
                    <ul>
                        <li><a href="#">Our newsroom</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Advertise</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <span>© 2026 Corner90. All rights reserved.</span>
                <span>Every match, every minute.</span>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>
