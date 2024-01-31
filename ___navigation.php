        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper" class="">
            <div id="pitch-selector">
                <div class="header text-white">
                    <strong>6 Types of Pitches</strong>
                </div>

                <div class="pitch-category mb-3">
                    Fastballs
                </div>

                <ul>
                    <li title="Fastest pitch" class="pitch-type four-seamer" onclick="location.href='index.php';">4 Seamer &#128293;</li>
                </ul>
                <ul>
                    <li><span class="pitch-label">Deceptive</span>
                        <ul>
                            <li title="Fast pitch" class="pitch-type splitter" onclick="location.href='index.php?pitch=3';">Splitter/Slider/Sinker &#128293;</li>
                            <li><span class="pitch-label">Storytellers</span>
                                <ul>
                                    <li title="The game is moving along well" class="pitch-type two-seamer" onclick="location.href='index.php?pitch=1';">2 Seamer <span style="font-size:24px;" class="mb-3">&#128663;</span></li>
                                    <li title="Starting to feel nervous about the score" class="pitch-type cutter" onclick="location.href='index.php?pitch=2';">Cutter <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 64 64"><path fill="#ffce31" d="M5.9 62c-3.3 0-4.8-2.4-3.3-5.3L29.3 4.2c1.5-2.9 3.9-2.9 5.4 0l26.7 52.5c1.5 2.9 0 5.3-3.3 5.3H5.9z"/><g fill="#231f20"><path d="m27.8 23.6l2.8 18.5c.3 1.8 2.6 1.8 2.9 0l2.7-18.5c.5-7.2-8.9-7.2-8.4 0"/><circle cx="32" cy="49.6" r="4.2"/></g></svg></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="pitch-category mt-3 mb-3">
                    Deceptive Pitches
                </div>

                <ul>
                    <li><span class="pitch-label">Breaking Balls</span>
                        <ul>
                            <li class="pitch-type change-up" onclick="location.href='index.php?pitch=4';">Change Up</li>
                            <li class="pitch-type curve-ball" onclick="location.href='index.php?pitch=5';">Curve Ball</li>
                        </ul>
                    </li>
                </ul>

                <div class="pitch-category-desc mt-3">
                    Pitch Description
                </div>

                <div class="pitch-desc-section mb-3">
                    <div>
                        <p class="pitch-name mb-1"><span class="pitch-desc-name">4 Seamer</span> <span class="pitch-desc-type">Fastball</p>
                        <p class="pitch-description text-dark">Straight and fast</p>
                        <p class="text-dark mt-3">Reel number: <span class="reel-number text-dark">1</span> of <span class="total-reel-number text-dark"><?= $numOfPitches ?></span></p>
                    </div>
                </div>

            </div>
        </nav>