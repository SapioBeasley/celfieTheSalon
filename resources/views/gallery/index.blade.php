@extends('layouts.default')

@section('title', 'Gallery')

@section('content')
<div class="intro-box" data-parallax-bg="{{asset('img/intro-box-home.jpg')}}">
    <div class="box-img-wrapper">
        <div class="box-img">
            <span></span>
        </div>
    </div>

    <div class="intro-box-inner container">
        @include('includes.pageTitle')
    </div>

    <!-- Scroll Down Btn -->
    <a href="#" class="scroll-btn">
        <span class="icon"></span>
    </a>

    <!-- Rounded Border Bottom -->
    <div class="rounded-border-bottom">
        <span></span>
    </div>
</div>

<!-- Portfolio Section -->
<section class="section section-portfolio-extended">
    <div class="container">
        <div class="portfolio-filters isotope-filters">
            <ul class="clean-list">
                <li><a class="current" data-filter="*" href="#">All</a></li>
                <li><a data-filter=".lashes" href="#">Lashes</a></li>
                <li><a data-filter=".extentions" href="#">Extentions</a></li>
                <li><a data-filter=".blowouts" href="#">Blowouts</a></li>
                <li><a data-filter=".tanning" href="#">Tanning</a></li>
            </ul>
        </div>
    </div>

    <!-- Portfolio Wrapper -->
    <div class="portfolio-wrapper">
        <div class="row isotope-container" data-default-selection="*">
            <div class="col-sm-12 col-md-8 isotope-item photography">
                <div class="portfolio-box">
                    <div class="box-cover">
                        <div class="box-info">
                            <h4 class="portfolio-item-title">Creative effect</h4>

                            <ul class="clean-list portfolio-item-categories">
                                <li>Photography</li>
                            </ul>
                        </div>
                        <a href="portfolio-item.html">
                            <img src="http://source.unsplash.com/random/598x370?hair,woman={{rand(1,99)}}" alt="portfolio box cover" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-8 isotope-item photography motion">
                <div class="portfolio-box">
                    <div class="box-cover">
                        <div class="box-info">
                            <h4 class="portfolio-item-title">Creative effect</h4>

                            <ul class="clean-list portfolio-item-categories">
                                <li>Photography</li>
                                <li>Motion</li>
                            </ul>
                        </div>
                        <a href="portfolio-item.html">
                            <img src="http://source.unsplash.com/random/598x370?hair,woman={{rand(1,99)}}" alt="portfolio box cover" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-8 isotope-item brand design">
                <div class="portfolio-box">
                    <div class="box-cover">
                        <div class="box-info">
                            <h4 class="portfolio-item-title">Creative effect</h4>

                            <ul class="clean-list portfolio-item-categories">
                                <li>Brand</li>
                            </ul>
                        </div>
                        <a href="portfolio-item.html">
                            <img src="http://source.unsplash.com/random/598x370?hair,woman={{rand(1,99)}}" alt="portfolio box cover" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-8 isotope-item brand photography">
                <div class="portfolio-box">
                    <div class="box-cover">
                        <div class="box-info">
                            <h4 class="portfolio-item-title">Creative effect</h4>

                            <ul class="clean-list portfolio-item-categories">
                                <li>Brand</li>
                                <li>Photography</li>
                            </ul>
                        </div>
                        <a href="portfolio-item.html">
                            <img src="http://source.unsplash.com/random/598x370?hair,woman={{rand(1,99)}}" alt="portfolio box cover" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-8 isotope-item photography design">
                <div class="portfolio-box">
                    <div class="box-cover">
                        <div class="box-info">
                            <h4 class="portfolio-item-title">Creative effect</h4>

                            <ul class="clean-list portfolio-item-categories">
                                <li>Photography</li>
                            </ul>
                        </div>
                        <a href="portfolio-item.html">
                            <img src="http://source.unsplash.com/random/598x370?hair,woman={{rand(1,99)}}" alt="portfolio box cover" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-8 isotope-item photography motion">
                <div class="portfolio-box">
                    <div class="box-cover">
                        <div class="box-info">
                            <h4 class="portfolio-item-title">Creative effect</h4>

                            <ul class="clean-list portfolio-item-categories">
                                <li>Photography</li>
                                <li>Motion</li>
                            </ul>
                        </div>
                        <a href="portfolio-item.html">
                            <img src="http://source.unsplash.com/random/598x370?hair,woman={{rand(1,99)}}" alt="portfolio box cover" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-8 isotope-item photography motion design">
                <div class="portfolio-box">
                    <div class="box-cover">
                        <div class="box-info">
                            <h4 class="portfolio-item-title">Creative effect</h4>

                            <ul class="clean-list portfolio-item-categories">
                                <li>Photography</li>
                                <li>Brand</li>
                            </ul>
                        </div>
                        <a href="portfolio-item.html">
                            <img src="http://source.unsplash.com/random/598x370?hair,woman={{rand(1,99)}}" alt="portfolio box cover" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-8 isotope-item design">
                <div class="portfolio-box">
                    <div class="box-cover">
                        <div class="box-info">
                            <h4 class="portfolio-item-title">Creative effect</h4>

                            <ul class="clean-list portfolio-item-categories">
                                <li>Motion</li>
                                <li>Brand</li>
                            </ul>
                        </div>
                        <a href="portfolio-item.html">
                            <img src="http://source.unsplash.com/random/598x370?hair,woman={{rand(1,99)}}" alt="portfolio box cover" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-8 isotope-item photography brand">
                <div class="portfolio-box">
                    <div class="box-cover">
                        <div class="box-info">
                            <h4 class="portfolio-item-title">Creative effect</h4>

                            <ul class="clean-list portfolio-item-categories">
                                <li>Motion</li>
                                <li>Brand</li>
                            </ul>
                        </div>
                        <a href="portfolio-item.html">
                            <img src="http://source.unsplash.com/random/598x370?hair,woman={{rand(1,99)}}" alt="portfolio box cover" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-8 isotope-item design">
                <div class="portfolio-box">
                    <div class="box-cover">
                        <div class="box-info">
                            <h4 class="portfolio-item-title">Creative effect</h4>

                            <ul class="clean-list portfolio-item-categories">
                                <li>Motion</li>
                                <li>Brand</li>
                            </ul>
                        </div>
                        <a href="portfolio-item.html">
                            <img src="http://source.unsplash.com/random/598x370?hair,woman={{rand(1,99)}}" alt="portfolio box cover" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-8 isotope-item motion">
                <div class="portfolio-box">
                    <div class="box-cover">
                        <div class="box-info">
                            <h4 class="portfolio-item-title">Creative effect</h4>

                            <ul class="clean-list portfolio-item-categories">
                                <li>Motion</li>
                                <li>Brand</li>
                            </ul>
                        </div>
                        <a href="portfolio-item.html">
                            <img src="http://source.unsplash.com/random/598x370?hair,woman={{rand(1,99)}}" alt="portfolio box cover" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-8 isotope-item brand">
                <div class="portfolio-box">
                    <div class="box-cover">
                        <div class="box-info">
                            <h4 class="portfolio-item-title">Creative effect</h4>

                            <ul class="clean-list portfolio-item-categories">
                                <li>Motion</li>
                                <li>Brand</li>
                            </ul>
                        </div>
                        <a href="portfolio-item.html">
                            <img src="http://source.unsplash.com/random/598x370?hair,woman={{rand(1,99)}}" alt="portfolio box cover" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <ul class='page-numbers'>
            <li><a class="page-numbers prev" href="#">Prev</a></li>
            <li><span class="page-numbers current">1</span></li>
            <li><a class="page-numbers" href="#">2</a></li>
            <li><a class="page-numbers" href="#">3</a></li>
            <li><a class="page-numbers next" href="#">Next</a></li>
        </ul>
    </div>
</section>
@endsection
