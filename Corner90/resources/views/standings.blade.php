<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Standings &amp; Stats — Corner90</title>
<meta name="description" content="Full league tables, top scorers and season statistics.">
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
      <a href="standings.html" aria-current="page">Standings</a>
      <a href="news.html">News</a>
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
    <span class="label">Season 2025/26</span>
  </div>
  <h1 style="font-size:36px; margin-bottom:6px;">Premier League Table</h1>
  <p style="color:var(--text-muted); margin-bottom:28px;">Green line marks the Champions League places, red line marks relegation.</p>

  <div class="table-wrap">
    <table class="standings">
      <thead>
        <tr>
          <th>#</th><th style="text-align:left;">Club</th><th>P</th><th>W</th><th>D</th><th>L</th><th>GF</th><th>GA</th><th>GD</th><th>Pts</th>
        </tr>
      </thead>
      <tbody>
        <tr class="zone-cl"><td class="rank">1</td><td class="team">Arsenal</td><td>34</td><td>24</td><td>7</td><td>3</td><td>68</td><td>27</td><td>+41</td><td class="pts">79</td></tr>
        <tr class="zone-cl"><td class="rank">2</td><td class="team">Liverpool</td><td>34</td><td>23</td><td>7</td><td>4</td><td>71</td><td>32</td><td>+39</td><td class="pts">76</td></tr>
        <tr class="zone-cl"><td class="rank">3</td><td class="team">Manchester City</td><td>34</td><td>22</td><td>8</td><td>4</td><td>73</td><td>30</td><td>+43</td><td class="pts">74</td></tr>
        <tr class="zone-cl"><td class="rank">4</td><td class="team">Aston Villa</td><td>34</td><td>19</td><td>8</td><td>7</td><td>58</td><td>39</td><td>+19</td><td class="pts">65</td></tr>
        <tr><td class="rank">5</td><td class="team">Tottenham Hotspur</td><td>34</td><td>18</td><td>6</td><td>10</td><td>62</td><td>48</td><td>+14</td><td class="pts">60</td></tr>
        <tr><td class="rank">6</td><td class="team">Newcastle United</td><td>34</td><td>16</td><td>9</td><td>9</td><td>54</td><td>45</td><td>+9</td><td class="pts">57</td></tr>
        <tr><td class="rank">7</td><td class="team">Chelsea</td><td>34</td><td>15</td><td>9</td><td>10</td><td>50</td><td>44</td><td>+6</td><td class="pts">54</td></tr>
        <tr><td class="rank">8</td><td class="team">Manchester United</td><td>34</td><td>14</td><td>8</td><td>12</td><td>46</td><td>47</td><td>-1</td><td class="pts">50</td></tr>
        <tr><td class="rank">9</td><td class="team">Brighton</td><td>34</td><td>13</td><td>9</td><td>12</td><td>49</td><td>50</td><td>-1</td><td class="pts">48</td></tr>
        <tr><td class="rank">10</td><td class="team">West Ham</td><td>34</td><td>12</td><td>9</td><td>13</td><td>44</td><td>51</td><td>-7</td><td class="pts">45</td></tr>
        <tr><td class="rank">17</td><td class="team">Everton</td><td>34</td><td>8</td><td>9</td><td>17</td><td>32</td><td>55</td><td>-23</td><td class="pts">33</td></tr>
        <tr class="zone-rel"><td class="rank">18</td><td class="team">Luton Town</td><td>34</td><td>6</td><td>8</td><td>20</td><td>28</td><td>62</td><td>-34</td><td class="pts">26</td></tr>
        <tr class="zone-rel"><td class="rank">19</td><td class="team">Burnley</td><td>34</td><td>5</td><td>9</td><td>20</td><td>26</td><td>65</td><td>-39</td><td class="pts">24</td></tr>
        <tr class="zone-rel"><td class="rank">20</td><td class="team">Sheffield United</td><td>34</td><td>4</td><td>7</td><td>23</td><td>22</td><td>70</td><td>-48</td><td class="pts">19</td></tr>
      </tbody>
    </table>
  </div>

  <div class="pitch-line">
    <span class="dot"></span>
    <span class="label">Top scorers</span>
  </div>

  <div class="table-wrap">
    <table class="standings">
      <thead>
        <tr><th>#</th><th style="text-align:left;">Player</th><th style="text-align:left;">Club</th><th>Apps</th><th>Goals</th><th>Assists</th></tr>
      </thead>
      <tbody>
        <tr><td class="rank">1</td><td class="team">Erling Haaland</td><td style="text-align:left;">Manchester City</td><td>32</td><td class="pts">27</td><td>5</td></tr>
        <tr><td class="rank">2</td><td class="team">Harry Kane</td><td style="text-align:left;">Bayern Munich</td><td>33</td><td class="pts">24</td><td>6</td></tr>
        <tr><td class="rank">3</td><td class="team">Kylian Mbappé</td><td style="text-align:left;">Real Madrid</td><td>31</td><td class="pts">22</td><td>7</td></tr>
        <tr><td class="rank">4</td><td class="team">Mohamed Salah</td><td style="text-align:left;">Liverpool</td><td>34</td><td class="pts">21</td><td>13</td></tr>
        <tr><td class="rank">5</td><td class="team">Victor Osimhen</td><td style="text-align:left;">Napoli</td><td>29</td><td class="pts">19</td><td>4</td></tr>
      </tbody>
    </table>
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
