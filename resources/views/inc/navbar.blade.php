<header role="banner" id="ij-header">
    <div class="first-navbar">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <!-- Mobile Toggle Menu Button -->
                    <a href="#" class="js-ij-nav-toggle ij-nav-toggle" data-toggle="collapse"
                       data-target="#first_navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                    <a class="navbar-brand" href="/">IvanJournal</a>
                </div>
                <div id="first_navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('explore') }}"><span>Explore</span></a></li>
                        <li><a href="{{ route('explore') }}/news"><span>News</span></a></li>
                        <li><a href="{{ route('explore') }}/podcasts"><span>Podcasts</span></a></li>
                        <li><a href="{{ route('explore') }}/stories"><span>Stories</span></a></li>
                        <li><a href="{{ route('explore') }}/reviews"><span>Reviews</span></a></li>
                        <li><a href="{{ route('explore') }}/tutorials"><span>Tuts</span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="second-navbar">
        <div class="container">
            <nav class="navbar navbar-default">
                <div id="second_navbar" class="navbar-collapse">
                    <ul class="nav navbar-nav nav-hscroll">
                        <i class="nav-arrows-left fas fa-angle-left"></i>
                        <li class="internal"><a href="{{ route('tag', ['tag' => 'science-fiction']) }}"><span><i
                                            class="fas fa-stroopwafel"></i> Sci-Fi</span></a></li>
                        <li class="internal"><a href="{{ route('tag', ['tag' => 'space']) }}"><span><i
                                            class="fas fa-user-astronaut"></i> Space</span></a></li>
                        <li class="internal"><a href="{{ route('tag', ['tag' => 'technologies']) }}"><span><i
                                            class="fas fa-robot"></i> Tech</span></a></li>
                        <li class="internal"><a href="{{ route('tag', ['tag' => 'programming']) }}"><span><i
                                            class="far fa-file-code"></i> Programming</span></a></li>
                        <li class="internal"><a href="{{ route('tag', ['tag' => 'cinematography']) }}"><span><i
                                            class="fas fa-film"></i> Cinema</span></a></li>
                        <li class="internal"><a href="{{ route('tag', ['tag' => 'gamedev']) }}"><span><i
                                            class="fas fa-gamepad"></i> GameDev</span></a></li>
                        <li class="internal"><a href="{{ route('tag', ['tag' => 'cyberpunk']) }}"><span><i
                                            class="fas fa-capsules"></i> Cyberpunk</span></a></li>
                        <li class="internal"><a href="{{ route('tag', ['tag' => 'post-apocalypse']) }}"><span><i
                                            class="fas fa-power-off"></i> Post-Apocalypse</span></a></li>
                        <li class="internal"><a href="{{ route('tag', ['tag' => 'horror']) }}"><span><i
                                            class="fas fa-skull"></i> Horror</span></a></li>
                        <li class="internal"><a href="{{ route('tag', ['tag' => 'biopunk']) }}"><span><i
                                            class="fas fa-heartbeat"></i> Biopunk</span></a></li>
                        <i class="nav-arrows-right fas fa-angle-right"></i>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>