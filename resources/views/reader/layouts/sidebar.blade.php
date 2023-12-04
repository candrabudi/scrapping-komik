<div id="sidebar">
    <div class="section">
        <div class="quickfilter">
            <form action="https://seataku.com/manga" class="filters " method="GET">
                <div class="filter dropdown">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown"> Genre <span
                            id="filtercount">All</span> <i class="fa fa-angle-down" aria-hidden="true"></i> </button>
                    <ul class="dropdown-menu c4 genrez">
                        <li>
                            <input class="genre-item " type="checkbox" id="genre-3" name="genre[]" value="3">
                            <label for="genre-3">Action</label>
                        </li>
                        <li>
                            <input class="genre-item " type="checkbox" id="genre-4" name="genre[]" value="4">
                            <label for="genre-4">Adventure</label>
                        </li>
                        <li>
                            <input class="genre-item " type="checkbox" id="genre-17" name="genre[]" value="17">
                            <label for="genre-17">Comedy</label>
                        </li>
                        <li>
                            <input class="genre-item " type="checkbox" id="genre-23" name="genre[]" value="23">
                            <label for="genre-23">Drama</label>
                        </li>
                        <li>
                            <input class="genre-item " type="checkbox" id="genre-5" name="genre[]" value="5">
                            <label for="genre-5">Fantasy</label>
                        </li>
                        <li>
                            <input class="genre-item " type="checkbox" id="genre-24" name="genre[]" value="24">
                            <label for="genre-24">Historical</label>
                        </li>
                        <li>
                            <input class="genre-item " type="checkbox" id="genre-18" name="genre[]" value="18">
                            <label for="genre-18">Isekai</label>
                        </li>
                        <li>
                            <input class="genre-item " type="checkbox" id="genre-40" name="genre[]" value="40">
                            <label for="genre-40">Medical</label>
                        </li>
                        <li>
                            <input class="genre-item " type="checkbox" id="genre-28" name="genre[]" value="28">
                            <label for="genre-28">Romance</label>
                        </li>
                        <li>
                            <input class="genre-item " type="checkbox" id="genre-19" name="genre[]" value="19">
                            <label for="genre-19">Slice of Life</label>
                        </li>
                        <li>
                            <input class="genre-item " type="checkbox" id="genre-29" name="genre[]" value="29">
                            <label for="genre-29">Superhero</label>
                        </li>
                    </ul>
                </div>
                <div class="filter dropdown">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown"> Status <span
                            id="filtercount">All</span> <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                    <ul class="dropdown-menu c1">
                        <li> <input type="radio" id="anime_status-all" name="status" value="" checked="">
                            <label for="anime_status-all">All</label></li>
                        <li> <input type="radio" id="anime_status-ongoing" name="status" value="ongoing"> <label
                                for="anime_status-ongoing">Ongoing</label></li>
                        <li> <input type="radio" id="anime_status-completed" name="status" value="completed">
                            <label for="anime_status-completed">Completed</label></li>
                        <li> <input type="radio" id="anime_status-hiatus" name="status" value="hiatus"> <label
                                for="anime_status-hiatus">Hiatus</label></li>
                    </ul>
                </div>
                <div class="filter dropdown">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown"> Type <span
                            id="filtercount">All</span> <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                    <ul class="dropdown-menu c1">
                        <li> <input type="radio" id="type-all" name="type" value="" checked="">
                            <label for="type-all">All</label></li>
                        <li><input type="radio" id="type-manga" name="type" value="manga"><label
                                for="type-manga">Manga</label></li>
                        <li><input type="radio" id="type-manhwa" name="type" value="manhwa"><label
                                for="type-manhwa">Manhwa</label></li>
                        <li><input type="radio" id="type-manhua" name="type" value="manhua"><label
                                for="type-manhua">Manhua</label></li>
                        <li><input type="radio" id="type-comic" name="type" value="comic"><label
                                for="type-comic">Comic</label></li>
                        <li><input type="radio" id="type-novel" name="type" value="novel"><label
                                for="type-novel">Novel</label></li>
                    </ul>
                </div>
                <div class="filter dropdown">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown"> Order by <span
                            id="filtercount">Default</span> <i class="fa fa-angle-down"
                            aria-hidden="true"></i></button>
                    <ul class="dropdown-menu c1">
                        <li> <input type="radio" id="sort_by-" name="order" value="" checked="">
                            <label for="sort_by-">Default</label></li>
                        <li> <input type="radio" id="sort_by-name_a-z" name="order" value="title"> <label
                                for="sort_by-name_a-z">A-Z</label></li>
                        <li> <input type="radio" id="sort_by-name_z-a" name="order" value="titlereverse"> <label
                                for="sort_by-name_z-a">Z-A</label></li>
                        <li> <input type="radio" id="sort_by-update" name="order" value="update"> <label
                                for="sort_by-update">Update</label></li>
                        <li> <input type="radio" id="sort_by-added" name="order" value="latest"> <label
                                for="sort_by-added">Added</label></li>
                        <li> <input type="radio" id="sort_by-popular" name="order" value="popular"> <label
                                for="sort_by-popular">Popular</label></li>
                    </ul>
                </div>
                <div class="filter submit"> <button type="submit" class="btn btn-custom-search"><i
                            class="fa fa-search" aria-hidden="true"></i> Search</button></div>
            </form>
        </div>
        <div class="clear"></div>
        <script>
            var ts_sf_exclusion = 0;
        </script>
    </div>
    <div class="section">
        <ul class='genre'>
            <li>
                <a href="https://seataku.com/genres/action/" title="View all series in Action">Action</a>
            </li>
            <li>
                <a href="https://seataku.com/genres/adventure/" title="View all series in Adventure">Adventure</a>
            </li>
            <li>
                <a href="https://seataku.com/genres/comedy/" title="View all series in Comedy">Comedy</a>
            </li>
            <li>
                <a href="https://seataku.com/genres/drama/" title="View all series in Drama">Drama</a>
            </li>
            <li>
                <a href="https://seataku.com/genres/fantasy/" title="View all series in Fantasy">Fantasy</a>
            </li>
            <li>
                <a href="https://seataku.com/genres/historical/" title="View all series in Historical">Historical</a>
            </li>
            <li>
                <a href="https://seataku.com/genres/isekai/" title="View all series in Isekai">Isekai</a>
            </li>
            <li>
                <a href="https://seataku.com/genres/medical/" title="View all series in Medical">Medical</a>
            </li>
            <li>
                <a href="https://seataku.com/genres/romance/" title="View all series in Romance">Romance</a>
            </li>
            <li>
                <a href="https://seataku.com/genres/slice-of-life/" title="View all series in Slice of Life">Slice of
                    Life</a>
            </li>
            <li>
                <a href="https://seataku.com/genres/superhero/" title="View all series in Superhero">Superhero</a>
            </li>
        </ul>
    </div>
    <div class="section">
        <div class="ts-wpop-series-gen">
            <ul class="ts-wpop-nav-tabs">
                <li class="active"><span class="ts-wpop-tab" data-range="weekly">Weekly</span></li>
                <li><span class="ts-wpop-tab" data-range="monthly">Monthly</span></li>
                <li><span class="ts-wpop-tab" data-range="alltime">All</span></li>
            </ul>
        </div>

        <div id="wpop-items">
            <div class='serieslist pop wpop wpop-weekly'>
                <ul>
                    <li>
                        <div class="ctr">1</div>
                        <div class="imgseries">
                            <a class="series" href="https://seataku.com/manga/gods-gambit-bahasa-indonesia/"
                                rel="116">
                                <img data-lazyloaded="1" data-placeholder-resp="214x307"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMTQiIGhlaWdodD0iMzA3IiB2aWV3Qm94PSIwIDAgMjE0IDMwNyI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                    data-src="https://seataku.com/wp-content/uploads/2023/11/Komik-Gods-Gambit.webp"
                                    class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                    title="Gods’ Gambit Bahasa Indonesia" alt="Gods’ Gambit Bahasa Indonesia"
                                    width="214" height="307" /> </a>
                        </div>
                        <div class="leftseries">
                            <h2>
                                <a class="series" href="https://seataku.com/manga/gods-gambit-bahasa-indonesia/"
                                    rel="116">Gods’
                                    Gambit Bahasa Indonesia</a>
                            </h2>
                            <span><b>Genres</b>: <a href="https://seataku.com/genres/action/"
                                    rel="tag">Action</a>, <a href="https://seataku.com/genres/fantasy/"
                                    rel="tag">Fantasy</a></span>
                            <div class="rt">
                                <div class="rating">
                                    <div class="rating-prc">
                                        <div class="rtp">
                                            <div class="rtb"><span style="width:70%"></span></div>
                                        </div>
                                    </div>
                                    <div class="numscore">7.00</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctr">2</div>
                        <div class="imgseries">
                            <a class="series"
                                href="https://seataku.com/manga/the-heavenly-demons-descendant-bahasa-indonesia/"
                                rel="176">
                                <img data-lazyloaded="1" data-placeholder-resp="214x310"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMTQiIGhlaWdodD0iMzEwIiB2aWV3Qm94PSIwIDAgMjE0IDMxMCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                    data-src="https://seataku.com/wp-content/uploads/2023/11/Komik-The-Heavenly-Demons-Descendant-1.webp"
                                    class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                    title="The Heavenly Demon’s Descendant Bahasa Indonesia"
                                    alt="The Heavenly Demon’s Descendant Bahasa Indonesia" width="214"
                                    height="310" /> </a>
                        </div>
                        <div class="leftseries">
                            <h2>
                                <a class="series"
                                    href="https://seataku.com/manga/the-heavenly-demons-descendant-bahasa-indonesia/"
                                    rel="176">The Heavenly Demon’s Descendant Bahasa Indonesia</a>
                            </h2>
                            <span><b>Genres</b>: <a href="https://seataku.com/genres/action/"
                                    rel="tag">Action</a>, <a href="https://seataku.com/genres/adventure/"
                                    rel="tag">Adventure</a>, <a href="https://seataku.com/genres/fantasy/"
                                    rel="tag">Fantasy</a></span>
                            <div class="rt">
                                <div class="rating">
                                    <div class="rating-prc">
                                        <div class="rtp">
                                            <div class="rtb"><span style="width:70%"></span></div>
                                        </div>
                                    </div>
                                    <div class="numscore">7.00</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctr">3</div>
                        <div class="imgseries">
                            <a class="series"
                                href="https://seataku.com/manga/the-counts-youngest-son-is-a-player-bahasa-indonesia/"
                                rel="66">
                                <img data-lazyloaded="1" data-placeholder-resp="214x306"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMTQiIGhlaWdodD0iMzA2IiB2aWV3Qm94PSIwIDAgMjE0IDMwNiI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                    data-src="https://seataku.com/wp-content/uploads/2023/11/Komik-The-Counts-Youngest-Son-Is-A-Player.webp"
                                    class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                    title="The Count’s Youngest Son Is A Player Bahasa Indonesia"
                                    alt="The Count’s Youngest Son Is A Player Bahasa Indonesia" width="214"
                                    height="306" /> </a>
                        </div>
                        <div class="leftseries">
                            <h2>
                                <a class="series"
                                    href="https://seataku.com/manga/the-counts-youngest-son-is-a-player-bahasa-indonesia/"
                                    rel="66">The Count’s Youngest Son Is A Player Bahasa Indonesia</a>
                            </h2>
                            <span><b>Genres</b>: <a href="https://seataku.com/genres/action/"
                                    rel="tag">Action</a>, <a href="https://seataku.com/genres/adventure/"
                                    rel="tag">Adventure</a>, <a href="https://seataku.com/genres/fantasy/"
                                    rel="tag">Fantasy</a></span>
                            <div class="rt">
                                <div class="rating">
                                    <div class="rating-prc">
                                        <div class="rtp">
                                            <div class="rtb"><span style="width:70%"></span></div>
                                        </div>
                                    </div>
                                    <div class="numscore">7</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctr">4</div>
                        <div class="imgseries">
                            <a class="series"
                                href="https://seataku.com/manga/the-beginning-after-the-end-side-story-jasmine-wind-borne-bahasa-indonesia/"
                                rel="17">
                                <img data-lazyloaded="1" data-placeholder-resp="214x268"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMTQiIGhlaWdodD0iMjY4IiB2aWV3Qm94PSIwIDAgMjE0IDI2OCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                    data-src="https://seataku.com/wp-content/uploads/2023/11/Komik-The-Beginning-After-The-End-Side-Story-Jasmine-Wind-Borne.webp"
                                    class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                    title="The Beginning After The End – Side Story Jasmine : Wind-Borne Bahasa Indonesia"
                                    alt="The Beginning After The End – Side Story Jasmine : Wind-Borne Bahasa Indonesia"
                                    width="214" height="268" /> </a>
                        </div>
                        <div class="leftseries">
                            <h2>
                                <a class="series"
                                    href="https://seataku.com/manga/the-beginning-after-the-end-side-story-jasmine-wind-borne-bahasa-indonesia/"
                                    rel="17">The Beginning After The End – Side Story Jasmine : Wind-Borne Bahasa
                                    Indonesia</a>
                            </h2>
                            <span><b>Genres</b>: <a href="https://seataku.com/genres/action/"
                                    rel="tag">Action</a>, <a href="https://seataku.com/genres/adventure/"
                                    rel="tag">Adventure</a>, <a href="https://seataku.com/genres/fantasy/"
                                    rel="tag">Fantasy</a></span>
                            <div class="rt">
                                <div class="rating">
                                    <div class="rating-prc">
                                        <div class="rtp">
                                            <div class="rtb"><span style="width:75%"></span></div>
                                        </div>
                                    </div>
                                    <div class="numscore">7.5</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctr">5</div>
                        <div class="imgseries">
                            <a class="series"
                                href="https://seataku.com/manga/solo-eating-to-overpowered-bahasa-indonesia/"
                                rel="250">
                                <img data-lazyloaded="1" data-placeholder-resp="214x306"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMTQiIGhlaWdodD0iMzA2IiB2aWV3Qm94PSIwIDAgMjE0IDMwNiI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                    data-src="https://seataku.com/wp-content/uploads/2023/11/Komik-Solo-Eating-to-Overpowered.webp"
                                    class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                    title="Solo Eating to Overpowered Bahasa Indonesia"
                                    alt="Solo Eating to Overpowered Bahasa Indonesia" width="214"
                                    height="306" /> </a>
                        </div>
                        <div class="leftseries">
                            <h2>
                                <a class="series"
                                    href="https://seataku.com/manga/solo-eating-to-overpowered-bahasa-indonesia/"
                                    rel="250">Solo Eating to Overpowered Bahasa Indonesia</a>
                            </h2>
                            <span><b>Genres</b>: <a href="https://seataku.com/genres/action/"
                                    rel="tag">Action</a>, <a href="https://seataku.com/genres/adventure/"
                                    rel="tag">Adventure</a>, <a href="https://seataku.com/genres/drama/"
                                    rel="tag">Drama</a>, <a href="https://seataku.com/genres/fantasy/"
                                    rel="tag">Fantasy</a></span>
                            <div class="rt">
                                <div class="rating">
                                    <div class="rating-prc">
                                        <div class="rtp">
                                            <div class="rtb"><span style="width:75%"></span></div>
                                        </div>
                                    </div>
                                    <div class="numscore">7.5</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>


            <div class='serieslist pop wpop wpop-monthly'>
                <ul>
                    <li>
                        <div class="ctr">1</div>
                        <div class="imgseries">
                            <a class="series" href="https://seataku.com/manga/gods-gambit-bahasa-indonesia/"
                                rel="116">
                                <img data-lazyloaded="1" data-placeholder-resp="214x307"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMTQiIGhlaWdodD0iMzA3IiB2aWV3Qm94PSIwIDAgMjE0IDMwNyI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                    data-src="https://seataku.com/wp-content/uploads/2023/11/Komik-Gods-Gambit.webp"
                                    class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                    title="Gods’ Gambit Bahasa Indonesia" alt="Gods’ Gambit Bahasa Indonesia"
                                    width="214" height="307" /> </a>
                        </div>
                        <div class="leftseries">
                            <h2>
                                <a class="series" href="https://seataku.com/manga/gods-gambit-bahasa-indonesia/"
                                    rel="116">Gods’
                                    Gambit Bahasa Indonesia</a>
                            </h2>
                            <span><b>Genres</b>: <a href="https://seataku.com/genres/action/"
                                    rel="tag">Action</a>, <a href="https://seataku.com/genres/fantasy/"
                                    rel="tag">Fantasy</a></span>
                            <div class="rt">
                                <div class="rating">
                                    <div class="rating-prc">
                                        <div class="rtp">
                                            <div class="rtb"><span style="width:70%"></span></div>
                                        </div>
                                    </div>
                                    <div class="numscore">7.00</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctr">2</div>
                        <div class="imgseries">
                            <a class="series"
                                href="https://seataku.com/manga/the-heavenly-demons-descendant-bahasa-indonesia/"
                                rel="176">
                                <img data-lazyloaded="1" data-placeholder-resp="214x310"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMTQiIGhlaWdodD0iMzEwIiB2aWV3Qm94PSIwIDAgMjE0IDMxMCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                    data-src="https://seataku.com/wp-content/uploads/2023/11/Komik-The-Heavenly-Demons-Descendant-1.webp"
                                    class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                    title="The Heavenly Demon’s Descendant Bahasa Indonesia"
                                    alt="The Heavenly Demon’s Descendant Bahasa Indonesia" width="214"
                                    height="310" /> </a>
                        </div>
                        <div class="leftseries">
                            <h2>
                                <a class="series"
                                    href="https://seataku.com/manga/the-heavenly-demons-descendant-bahasa-indonesia/"
                                    rel="176">The Heavenly Demon’s Descendant Bahasa Indonesia</a>
                            </h2>
                            <span><b>Genres</b>: <a href="https://seataku.com/genres/action/"
                                    rel="tag">Action</a>, <a href="https://seataku.com/genres/adventure/"
                                    rel="tag">Adventure</a>, <a href="https://seataku.com/genres/fantasy/"
                                    rel="tag">Fantasy</a></span>
                            <div class="rt">
                                <div class="rating">
                                    <div class="rating-prc">
                                        <div class="rtp">
                                            <div class="rtb"><span style="width:70%"></span></div>
                                        </div>
                                    </div>
                                    <div class="numscore">7.00</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctr">3</div>
                        <div class="imgseries">
                            <a class="series"
                                href="https://seataku.com/manga/the-counts-youngest-son-is-a-player-bahasa-indonesia/"
                                rel="66">
                                <img data-lazyloaded="1" data-placeholder-resp="214x306"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMTQiIGhlaWdodD0iMzA2IiB2aWV3Qm94PSIwIDAgMjE0IDMwNiI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                    data-src="https://seataku.com/wp-content/uploads/2023/11/Komik-The-Counts-Youngest-Son-Is-A-Player.webp"
                                    class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                    title="The Count’s Youngest Son Is A Player Bahasa Indonesia"
                                    alt="The Count’s Youngest Son Is A Player Bahasa Indonesia" width="214"
                                    height="306" /> </a>
                        </div>
                        <div class="leftseries">
                            <h2>
                                <a class="series"
                                    href="https://seataku.com/manga/the-counts-youngest-son-is-a-player-bahasa-indonesia/"
                                    rel="66">The Count’s Youngest Son Is A Player Bahasa Indonesia</a>
                            </h2>
                            <span><b>Genres</b>: <a href="https://seataku.com/genres/action/"
                                    rel="tag">Action</a>, <a href="https://seataku.com/genres/adventure/"
                                    rel="tag">Adventure</a>, <a href="https://seataku.com/genres/fantasy/"
                                    rel="tag">Fantasy</a></span>
                            <div class="rt">
                                <div class="rating">
                                    <div class="rating-prc">
                                        <div class="rtp">
                                            <div class="rtb"><span style="width:70%"></span></div>
                                        </div>
                                    </div>
                                    <div class="numscore">7</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctr">4</div>
                        <div class="imgseries">
                            <a class="series"
                                href="https://seataku.com/manga/the-beginning-after-the-end-side-story-jasmine-wind-borne-bahasa-indonesia/"
                                rel="17">
                                <img data-lazyloaded="1" data-placeholder-resp="214x268"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMTQiIGhlaWdodD0iMjY4IiB2aWV3Qm94PSIwIDAgMjE0IDI2OCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                    data-src="https://seataku.com/wp-content/uploads/2023/11/Komik-The-Beginning-After-The-End-Side-Story-Jasmine-Wind-Borne.webp"
                                    class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                    title="The Beginning After The End – Side Story Jasmine : Wind-Borne Bahasa Indonesia"
                                    alt="The Beginning After The End – Side Story Jasmine : Wind-Borne Bahasa Indonesia"
                                    width="214" height="268" /> </a>
                        </div>
                        <div class="leftseries">
                            <h2>
                                <a class="series"
                                    href="https://seataku.com/manga/the-beginning-after-the-end-side-story-jasmine-wind-borne-bahasa-indonesia/"
                                    rel="17">The Beginning After The End – Side Story Jasmine : Wind-Borne Bahasa
                                    Indonesia</a>
                            </h2>
                            <span><b>Genres</b>: <a href="https://seataku.com/genres/action/"
                                    rel="tag">Action</a>, <a href="https://seataku.com/genres/adventure/"
                                    rel="tag">Adventure</a>, <a href="https://seataku.com/genres/fantasy/"
                                    rel="tag">Fantasy</a></span>
                            <div class="rt">
                                <div class="rating">
                                    <div class="rating-prc">
                                        <div class="rtp">
                                            <div class="rtb"><span style="width:75%"></span></div>
                                        </div>
                                    </div>
                                    <div class="numscore">7.5</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctr">5</div>
                        <div class="imgseries">
                            <a class="series"
                                href="https://seataku.com/manga/solo-eating-to-overpowered-bahasa-indonesia/"
                                rel="250">
                                <img data-lazyloaded="1" data-placeholder-resp="214x306"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMTQiIGhlaWdodD0iMzA2IiB2aWV3Qm94PSIwIDAgMjE0IDMwNiI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                    data-src="https://seataku.com/wp-content/uploads/2023/11/Komik-Solo-Eating-to-Overpowered.webp"
                                    class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                    title="Solo Eating to Overpowered Bahasa Indonesia"
                                    alt="Solo Eating to Overpowered Bahasa Indonesia" width="214"
                                    height="306" /> </a>
                        </div>
                        <div class="leftseries">
                            <h2>
                                <a class="series"
                                    href="https://seataku.com/manga/solo-eating-to-overpowered-bahasa-indonesia/"
                                    rel="250">Solo Eating to Overpowered Bahasa Indonesia</a>
                            </h2>
                            <span><b>Genres</b>: <a href="https://seataku.com/genres/action/"
                                    rel="tag">Action</a>, <a href="https://seataku.com/genres/adventure/"
                                    rel="tag">Adventure</a>, <a href="https://seataku.com/genres/drama/"
                                    rel="tag">Drama</a>, <a href="https://seataku.com/genres/fantasy/"
                                    rel="tag">Fantasy</a></span>
                            <div class="rt">
                                <div class="rating">
                                    <div class="rating-prc">
                                        <div class="rtp">
                                            <div class="rtb"><span style="width:75%"></span></div>
                                        </div>
                                    </div>
                                    <div class="numscore">7.5</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class='serieslist pop wpop wpop-alltime'>
                <ul>
                    <li>
                        <div class="ctr">1</div>
                        <div class="imgseries">
                            <a class="series" href="https://seataku.com/manga/gods-gambit-bahasa-indonesia/"
                                rel="116">
                                <img data-lazyloaded="1" data-placeholder-resp="214x307"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMTQiIGhlaWdodD0iMzA3IiB2aWV3Qm94PSIwIDAgMjE0IDMwNyI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                    data-src="https://seataku.com/wp-content/uploads/2023/11/Komik-Gods-Gambit.webp"
                                    class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                    title="Gods’ Gambit Bahasa Indonesia" alt="Gods’ Gambit Bahasa Indonesia"
                                    width="214" height="307" /> </a>
                        </div>
                        <div class="leftseries">
                            <h2>
                                <a class="series" href="https://seataku.com/manga/gods-gambit-bahasa-indonesia/"
                                    rel="116">Gods’
                                    Gambit Bahasa Indonesia</a>
                            </h2>
                            <span><b>Genres</b>: <a href="https://seataku.com/genres/action/"
                                    rel="tag">Action</a>, <a href="https://seataku.com/genres/fantasy/"
                                    rel="tag">Fantasy</a></span>
                            <div class="rt">
                                <div class="rating">
                                    <div class="rating-prc">
                                        <div class="rtp">
                                            <div class="rtb"><span style="width:70%"></span></div>
                                        </div>
                                    </div>
                                    <div class="numscore">7.00</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctr">2</div>
                        <div class="imgseries">
                            <a class="series"
                                href="https://seataku.com/manga/the-counts-youngest-son-is-a-player-bahasa-indonesia/"
                                rel="66">
                                <img data-lazyloaded="1" data-placeholder-resp="214x306"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMTQiIGhlaWdodD0iMzA2IiB2aWV3Qm94PSIwIDAgMjE0IDMwNiI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                    data-src="https://seataku.com/wp-content/uploads/2023/11/Komik-The-Counts-Youngest-Son-Is-A-Player.webp"
                                    class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                    title="The Count’s Youngest Son Is A Player Bahasa Indonesia"
                                    alt="The Count’s Youngest Son Is A Player Bahasa Indonesia" width="214"
                                    height="306" /> </a>
                        </div>
                        <div class="leftseries">
                            <h2>
                                <a class="series"
                                    href="https://seataku.com/manga/the-counts-youngest-son-is-a-player-bahasa-indonesia/"
                                    rel="66">The Count’s Youngest Son Is A Player Bahasa Indonesia</a>
                            </h2>
                            <span><b>Genres</b>: <a href="https://seataku.com/genres/action/"
                                    rel="tag">Action</a>, <a href="https://seataku.com/genres/adventure/"
                                    rel="tag">Adventure</a>, <a href="https://seataku.com/genres/fantasy/"
                                    rel="tag">Fantasy</a></span>
                            <div class="rt">
                                <div class="rating">
                                    <div class="rating-prc">
                                        <div class="rtp">
                                            <div class="rtb"><span style="width:70%"></span></div>
                                        </div>
                                    </div>
                                    <div class="numscore">7</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctr">3</div>
                        <div class="imgseries">
                            <a class="series"
                                href="https://seataku.com/manga/the-heavenly-demons-descendant-bahasa-indonesia/"
                                rel="176">
                                <img data-lazyloaded="1" data-placeholder-resp="214x310"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMTQiIGhlaWdodD0iMzEwIiB2aWV3Qm94PSIwIDAgMjE0IDMxMCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                    data-src="https://seataku.com/wp-content/uploads/2023/11/Komik-The-Heavenly-Demons-Descendant-1.webp"
                                    class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                    title="The Heavenly Demon’s Descendant Bahasa Indonesia"
                                    alt="The Heavenly Demon’s Descendant Bahasa Indonesia" width="214"
                                    height="310" /> </a>
                        </div>
                        <div class="leftseries">
                            <h2>
                                <a class="series"
                                    href="https://seataku.com/manga/the-heavenly-demons-descendant-bahasa-indonesia/"
                                    rel="176">The Heavenly Demon’s Descendant Bahasa Indonesia</a>
                            </h2>
                            <span><b>Genres</b>: <a href="https://seataku.com/genres/action/"
                                    rel="tag">Action</a>, <a href="https://seataku.com/genres/adventure/"
                                    rel="tag">Adventure</a>, <a href="https://seataku.com/genres/fantasy/"
                                    rel="tag">Fantasy</a></span>
                            <div class="rt">
                                <div class="rating">
                                    <div class="rating-prc">
                                        <div class="rtp">
                                            <div class="rtb"><span style="width:70%"></span></div>
                                        </div>
                                    </div>
                                    <div class="numscore">7.00</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctr">4</div>
                        <div class="imgseries">
                            <a class="series"
                                href="https://seataku.com/manga/ghoul-ga-sekai-wo-sukutta-koto-wo-watashi-dake-ga-shitteiru/"
                                rel="382">
                                <img data-lazyloaded="1" data-placeholder-resp="214x305"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMTQiIGhlaWdodD0iMzA1IiB2aWV3Qm94PSIwIDAgMjE0IDMwNSI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                    data-src="https://seataku.com/wp-content/uploads/2023/11/Komik-Ghoul-ga-Sekai-wo-Sukutta-Koto-wo-Watashi-dake-ga-shitteiru.webp"
                                    class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                    title="Ghoul ga Sekai wo Sukutta Koto wo Watashi dake ga shitteiru"
                                    alt="Ghoul ga Sekai wo Sukutta Koto wo Watashi dake ga shitteiru" width="214"
                                    height="305" />
                            </a>
                        </div>
                        <div class="leftseries">
                            <h2>
                                <a class="series"
                                    href="https://seataku.com/manga/ghoul-ga-sekai-wo-sukutta-koto-wo-watashi-dake-ga-shitteiru/"
                                    rel="382">Ghoul ga Sekai wo Sukutta Koto wo Watashi dake ga shitteiru</a>
                            </h2>
                            <span><b>Genres</b>: <a href="https://seataku.com/genres/action/"
                                    rel="tag">Action</a>, <a href="https://seataku.com/genres/adventure/"
                                    rel="tag">Adventure</a>, <a href="https://seataku.com/genres/drama/"
                                    rel="tag">Drama</a>, <a href="https://seataku.com/genres/fantasy/"
                                    rel="tag">Fantasy</a></span>
                            <div class="rt">
                                <div class="rating">
                                    <div class="rating-prc">
                                        <div class="rtp">
                                            <div class="rtb"><span style="width:75%"></span></div>
                                        </div>
                                    </div>
                                    <div class="numscore">7.5</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ctr">5</div>
                        <div class="imgseries">
                            <a class="series"
                                href="https://seataku.com/manga/the-beginning-after-the-end-side-story-jasmine-wind-borne-bahasa-indonesia/"
                                rel="17">
                                <img data-lazyloaded="1" data-placeholder-resp="214x268"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMTQiIGhlaWdodD0iMjY4IiB2aWV3Qm94PSIwIDAgMjE0IDI2OCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                    data-src="https://seataku.com/wp-content/uploads/2023/11/Komik-The-Beginning-After-The-End-Side-Story-Jasmine-Wind-Borne.webp"
                                    class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                    title="The Beginning After The End – Side Story Jasmine : Wind-Borne Bahasa Indonesia"
                                    alt="The Beginning After The End – Side Story Jasmine : Wind-Borne Bahasa Indonesia"
                                    width="214" height="268" /> </a>
                        </div>
                        <div class="leftseries">
                            <h2>
                                <a class="series"
                                    href="https://seataku.com/manga/the-beginning-after-the-end-side-story-jasmine-wind-borne-bahasa-indonesia/"
                                    rel="17">The Beginning After The End – Side Story Jasmine : Wind-Borne Bahasa
                                    Indonesia</a>
                            </h2>
                            <span><b>Genres</b>: <a href="https://seataku.com/genres/action/"
                                    rel="tag">Action</a>, <a href="https://seataku.com/genres/adventure/"
                                    rel="tag">Adventure</a>, <a href="https://seataku.com/genres/fantasy/"
                                    rel="tag">Fantasy</a></span>
                            <div class="rt">
                                <div class="rating">
                                    <div class="rating-prc">
                                        <div class="rtp">
                                            <div class="rtb"><span style="width:75%"></span></div>
                                        </div>
                                    </div>
                                    <div class="numscore">7.5</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        ts_popular_widget.run(1701648983);
    </script>

</div>
