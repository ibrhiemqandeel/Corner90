<x-muster>

    <main class="container">
        <div class="pitch-line" style="margin-top:40px;">
            <span class="dot"></span>
            <span class="label">Matchday schedule</span>
        </div>
        <h1 style="font-size:36px; margin-bottom:6px;">Fixtures &amp; Results</h1>
        <p style="color:var(--text-muted); margin-bottom:28px;">Kick-off times shown in your local timezone.</p>

        <div class="filters" data-scope="#fixture-list">
            <button class="filter-chip" aria-pressed="true" data-filter="all">All</button>
            <button class="filter-chip" aria-pressed="false" data-filter="pl">Premier League</button>
            <button class="filter-chip" aria-pressed="false" data-filter="laliga">La Liga</button>
            <button class="filter-chip" aria-pressed="false" data-filter="bundesliga">Bundesliga</button>
            <button class="filter-chip" aria-pressed="false" data-filter="seriea">Serie A</button>
        </div>

        <div id="fixture-list">
            <div class="date-group">
                <h4>Today — Saturday, July 4</h4>
                <div class="match-list">
                    <a class="match-card" href="match.html" data-comp="pl">
                        <div class="clock is-live">67'</div>
                        <div class="teams-col">
                            <div class="team-row"><span class="team-name">Arsenal</span><span class="team-score">2</span></div>
                            <div class="team-row"><span class="team-name">Aston Villa</span><span class="team-score">1</span></div>
                        </div>
                        <span class="comp-tag">Premier League</span>
                    </a>
                    <a class="match-card" href="match.html" data-comp="laliga">
                        <div class="clock is-upcoming">20:00</div>
                        <div class="teams-col">
                            <div class="team-row"><span class="team-name">Real Madrid</span></div>
                            <div class="team-row"><span class="team-name">Sevilla</span></div>
                        </div>
                        <span class="comp-tag">La Liga</span>
                    </a>
                    <a class="match-card" href="match.html" data-comp="bundesliga">
                        <div class="clock is-ft">FT</div>
                        <div class="teams-col">
                            <div class="team-row"><span class="team-name">Bayern Munich</span><span class="team-score">3</span></div>
                            <div class="team-row"><span class="team-name">RB Leipzig</span><span class="team-score">2</span></div>
                        </div>
                        <span class="comp-tag">Bundesliga</span>
                    </a>
                    <a class="match-card" href="match.html" data-comp="seriea">
                        <div class="clock is-ft">FT</div>
                        <div class="teams-col">
                            <div class="team-row"><span class="team-name">Inter Milan</span><span class="team-score">0</span></div>
                            <div class="team-row"><span class="team-name">AC Milan</span><span class="team-score">0</span></div>
                        </div>
                        <span class="comp-tag">Serie A</span>
                    </a>
                </div>
            </div>

            <div class="date-group">
                <h4>Sunday, July 5</h4>
                <div class="match-list">
                    <a class="match-card" href="match.html" data-comp="pl">
                        <div class="clock is-upcoming">16:30</div>
                        <div class="teams-col">
                            <div class="team-row"><span class="team-name">Manchester City</span></div>
                            <div class="team-row"><span class="team-name">Newcastle United</span></div>
                        </div>
                        <span class="comp-tag">Premier League</span>
                    </a>
                    <a class="match-card" href="match.html" data-comp="laliga">
                        <div class="clock is-upcoming">19:00</div>
                        <div class="teams-col">
                            <div class="team-row"><span class="team-name">Barcelona</span></div>
                            <div class="team-row"><span class="team-name">Villarreal</span></div>
                        </div>
                        <span class="comp-tag">La Liga</span>
                    </a>
                    <a class="match-card" href="match.html" data-comp="seriea">
                        <div class="clock is-upcoming">21:00</div>
                        <div class="teams-col">
                            <div class="team-row"><span class="team-name">Juventus</span></div>
                            <div class="team-row"><span class="team-name">Napoli</span></div>
                        </div>
                        <span class="comp-tag">Serie A</span>
                    </a>
                </div>
            </div>

            <div class="date-group">
                <h4>Monday, July 6</h4>
                <div class="match-list">
                    <a class="match-card" href="match.html" data-comp="bundesliga">
                        <div class="clock is-upcoming">18:30</div>
                        <div class="teams-col">
                            <div class="team-row"><span class="team-name">Borussia Dortmund</span></div>
                            <div class="team-row"><span class="team-name">Bayer Leverkusen</span></div>
                        </div>
                        <span class="comp-tag">Bundesliga</span>
                    </a>
                    <a class="match-card" href="match.html" data-comp="pl">
                        <div class="clock is-upcoming">20:00</div>
                        <div class="teams-col">
                            <div class="team-row"><span class="team-name">Tottenham Hotspur</span></div>
                            <div class="team-row"><span class="team-name">Chelsea</span></div>
                        </div>
                        <span class="comp-tag">Premier League</span>
                    </a>
                </div>
            </div>
        </div>
    </main>
</x-muster>
