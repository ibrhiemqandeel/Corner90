<x-muster>

    <main class="container">
        <div class="pitch-line" style="margin-top:36px;">
            <span class="dot"></span>
            <span class="label">Premier League · Matchday 34 · Emirates Stadium</span>
        </div>

        <div class="scoreboard">
            <div class="side">
                <div class="crest">ARS</div>
                <h2>Arsenal</h2>
            </div>
            <div class="center">
                <div class="score-big">2 – 1</div>
                <div class="minute">67' · 2nd half</div>
            </div>
            <div class="side">
                <div class="crest">AVL</div>
                <h2>Aston Villa</h2>
            </div>
        </div>

        <div class="tabs" role="tablist">
            <button class="tab" role="tab" aria-selected="true" data-tab="panel-overview">Overview</button>
            <button class="tab" role="tab" aria-selected="false" data-tab="panel-stats">Stats</button>
            <button class="tab" role="tab" aria-selected="false" data-tab="panel-lineups">Lineups</button>
        </div>

        <div id="panel-overview" class="tab-panel is-active">
            <div class="two-col">
                <div>
                    <h3 style="font-size:20px; margin-bottom:18px;">Match events</h3>
                    <div class="timeline">
                        <div class="event-row">
                            <span class="min">67'</span>
                            <span class="desc"><span class="event-icon">⚽</span><b>Bukayo Saka</b> restores Arsenal's lead, curling a finish into the far corner.</span>
                        </div>
                        <div class="event-row">
                            <span class="min">58'</span>
                            <span class="desc"><span class="event-icon">🟨</span><b>Ezri Konsa</b> booked for a late challenge on Martinelli.</span>
                        </div>
                        <div class="event-row">
                            <span class="min">51'</span>
                            <span class="desc"><span class="event-icon">⚽</span><b>Ollie Watkins</b> equalises with a close-range header from a corner.</span>
                        </div>
                        <div class="event-row">
                            <span class="min">45'</span>
                            <span class="desc">Half-time.</span>
                        </div>
                        <div class="event-row">
                            <span class="min">29'</span>
                            <span class="desc"><span class="event-icon">⚽</span><b>Kai Havertz</b> opens the scoring, tapping in from close range.</span>
                        </div>
                        <div class="event-row">
                            <span class="min">1'</span>
                            <span class="desc">Kick-off at the Emirates Stadium.</span>
                        </div>
                    </div>
                </div>
                <aside>
                    <div class="widget">
                        <h4>Match info</h4>
                        <p style="font-size:14px; color:var(--text-muted); margin-bottom:10px;">Venue: Emirates Stadium, London</p>
                        <p style="font-size:14px; color:var(--text-muted); margin-bottom:10px;">Referee: Michael Oliver</p>
                        <p style="font-size:14px; color:var(--text-muted);">Attendance: 60,260</p>
                    </div>
                </aside>
            </div>
        </div>

        <div id="panel-stats" class="tab-panel">
            <div style="max-width:640px; margin:0 auto;">
                <div class="stat-row">
                    <span class="val left">61%</span>
                    <div class="stat-track">
                        <div class="stat-fill" style="width:61%;"></div>
                    </div>
                    <span class="val">39%</span>
                </div>
                <div class="stat-label">Possession</div>

                <div class="stat-row">
                    <span class="val left">14</span>
                    <div class="stat-track">
                        <div class="stat-fill" style="width:58%;"></div>
                    </div>
                    <span class="val">10</span>
                </div>
                <div class="stat-label">Shots</div>

                <div class="stat-row">
                    <span class="val left">6</span>
                    <div class="stat-track">
                        <div class="stat-fill" style="width:66%;"></div>
                    </div>
                    <span class="val">3</span>
                </div>
                <div class="stat-label">Shots on target</div>

                <div class="stat-row">
                    <span class="val left">7</span>
                    <div class="stat-track">
                        <div class="stat-fill" style="width:54%;"></div>
                    </div>
                    <span class="val">6</span>
                </div>
                <div class="stat-label">Corners</div>

                <div class="stat-row">
                    <span class="val left">9</span>
                    <div class="stat-track">
                        <div class="stat-fill" style="width:45%;"></div>
                    </div>
                    <span class="val">11</span>
                </div>
                <div class="stat-label">Fouls</div>

                <div class="stat-row">
                    <span class="val left">1</span>
                    <div class="stat-track">
                        <div class="stat-fill" style="width:50%;"></div>
                    </div>
                    <span class="val">1</span>
                </div>
                <div class="stat-label">Yellow cards</div>
            </div>
        </div>

        <div id="panel-lineups" class="tab-panel">
            <div class="two-col">
                <div>
                    <h3 style="font-size:18px; margin-bottom:14px;">Arsenal (4-3-3)</h3>
                    <p style="color:var(--text-muted); line-height:2;">Raya · White, Saliba, Gabriel, Timber · Rice, Ødegaard, Havertz · Saka, Martinelli, Jesus</p>
                </div>
                <div>
                    <h3 style="font-size:18px; margin-bottom:14px;">Aston Villa (4-2-3-1)</h3>
                    <p style="color:var(--text-muted); line-height:2;">Martínez · Cash, Konsa, Torres, Digne · Kamara, Tielemans · Bailey, McGinn, Moreno · Watkins</p>
                </div>
            </div>
        </div>
    </main>
</x-muster>
