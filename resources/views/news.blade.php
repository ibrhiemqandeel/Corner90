<x-muster>

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
</x-muster>
