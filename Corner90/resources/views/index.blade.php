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

    <main>
        <section class="hero container">
            <div class="hero-grid">
                <article class="hero-main">
                    <span class="eyebrow">Premier League · Matchday 34</span>
                    <h1>Arsenal storm back from a goal down to seize control at the Emirates</h1>
                    <p class="dek">A second-half double turned the game on its head as the title race tightens with four rounds to play.</p>
                    <div class="hero-meta">
                        <span>By Daniel Osei</span>
                        <span>·</span>
                        <span>Updated 12 min ago</span>
                    </div>
                </article>
                <div class="hero-side">
                    <a class="side-card" href="match.html">
                        <span class="eyebrow">Live · 67'</span>
                        <h3>Arsenal 2–1 Aston Villa — full match centre and stats</h3>
                    </a>
                    <a class="side-card" href="article.html">
                        <span class="eyebrow">Transfers</span>
                        <h3>Three clubs rumoured to be tracking Villa's Moreno in the summer window</h3>
                    </a>
                    <a class="side-card" href="standings.html">
                        <span class="eyebrow">Standings</span>
                        <h3>City drop to third after midweek slip — see the full table</h3>
                    </a>
                </div>
            </div>
        </section>

        <section class="section container">
            <div class="section-head">
                <h2>Today's fixtures</h2>
                <a class="see-all" href="fixtures.html">All fixtures →</a>
            </div>
            <div class="match-list">
                <a class="match-card" href="match.html">
                    <div class="clock is-live">67'</div>
                    <div class="teams-col">
                        <div class="team-row"><span class="team-name">Arsenal</span><span class="team-score">2</span></div>
                        <div class="team-row"><span class="team-name">Aston Villa</span><span class="team-score">1</span></div>
                    </div>
                    <span class="comp-tag">Premier League</span>
                </a>
                <a class="match-card" href="match.html">
                    <div class="clock is-upcoming">20:00</div>
                    <div class="teams-col">
                        <div class="team-row"><span class="team-name">Real Madrid</span></div>
                        <div class="team-row"><span class="team-name">Sevilla</span></div>
                    </div>
                    <span class="comp-tag">La Liga</span>
                </a>
                <a class="match-card" href="match.html">
                    <div class="clock is-ft">FT</div>
                    <div class="teams-col">
                        <div class="team-row"><span class="team-name">Bayern Munich</span><span class="team-score">3</span></div>
                        <div class="team-row"><span class="team-name">RB Leipzig</span><span class="team-score">2</span></div>
                    </div>
                    <span class="comp-tag">Bundesliga</span>
                </a>
            </div>
        </section>

        <div class="container">
            <div class="two-col">
                <div>
                    <div class="section-head">
                        <h2>Latest news</h2>
                        <a class="see-all" href="news.html">All news →</a>
                    </div>
                    <div class="news-grid">
                        <a class="article-card" href="article.html">
                            <div class="article-thumb"></div>
                            <div class="article-body">
                                <span class="article-cat">Transfers</span>
                                <h3>Sevilla open talks over a permanent deal for their on-loan winger</h3>
                                <p class="article-dek">The 22-year-old has scored eight goals since arriving in January.</p>
                                <span class="article-foot">4 hours ago</span>
                            </div>
                        </a>
                        <a class="article-card" href="article.html">
                            <div class="article-thumb"></div>
                            <div class="article-body">
                                <span class="article-cat">Injury news</span>
                                <h3>Leipzig confirm midfielder will miss remainder of the season</h3>
                                <p class="article-dek">A scan revealed ligament damage picked up in Saturday's defeat.</p>
                                <span class="article-foot">6 hours ago</span>
                            </div>
                        </a>
                        <a class="article-card" href="article.html">
                            <div class="article-thumb"></div>
                            <div class="article-body">
                                <span class="article-cat">Analysis</span>
                                <h3>Why dropping deeper has unlocked PSG's attack this spring</h3>
                                <p class="article-dek">A tactical shift in March has coincided with a run of ten wins in twelve.</p>
                                <span class="article-foot">8 hours ago</span>
                            </div>
                        </a>
                    </div>
                </div>

                <aside>
                    <div class="widget">
                        <h4>Top scorers</h4>
                        <div class="top-scorer-row"><span><span class="rank">1</span>Erling Haaland</span><span class="goals">27</span></div>
                        <div class="top-scorer-row"><span><span class="rank">2</span>Harry Kane</span><span class="goals">24</span></div>
                        <div class="top-scorer-row"><span><span class="rank">3</span>Kylian Mbappé</span><span class="goals">22</span></div>
                        <div class="top-scorer-row"><span><span class="rank">4</span>Mohamed Salah</span><span class="goals">21</span></div>
                        <div class="top-scorer-row"><span><span class="rank">5</span>Victor Osimhen</span><span class="goals">19</span></div>
                    </div>
                    <div class="widget">
                        <h4>Premier League — top 5</h4>
                        <div class="top-scorer-row"><span><span class="rank">1</span>Arsenal</span><span class="goals">79</span></div>
                        <div class="top-scorer-row"><span><span class="rank">2</span>Liverpool</span><span class="goals">76</span></div>
                        <div class="top-scorer-row"><span><span class="rank">3</span>Man City</span><span class="goals">74</span></div>
                        <div class="top-scorer-row"><span><span class="rank">4</span>Aston Villa</span><span class="goals">65</span></div>
                        <div class="top-scorer-row"><span><span class="rank">5</span>Tottenham</span><span class="goals">60</span></div>
                    </div>
                </aside>
            </div>
        </div>
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
