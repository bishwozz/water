<!-- One -->
<article id="main">

        <h2 Style="font-weight:bold;"> Chemicals, Minerals And Filter Media</h2>

        <div class="row gtr-150">
            <div class="col-8 col-12-narrower">
                <!-- Content -->
                <div class="content">
                    <section>
                        <header>
                            <h1 Style="font-weight:bold;"><u>{{ $products->name }}</u>
                                <h1>{{ $products->second }}</h1>
                            </h1>

                        </header>
                        <a href="#" class="image featured"></a><img src="{{ 'storage/' . $products->image }} "
                            height="400" width="700"></a>
                    </section>
                </div>
            </div>
            <div class="col-4 col-12-narrower">
                <!-- Sidebar -->
                <div class="sidebar">
                    <section>
                        <br> <br> <br> <br> <br><br>

                        <p>{{ $products->grade }}<br>
                            {{ $products->size }}<br>
                            {{ $products->pack }}</p>
                    </section>
                </div>
            </div>
        </div>

        <div class="container">
            <header>
                <h3>Application:</h3>
            </header>
            <h3> {{ $products->discription }}</h3>
        </div>
        <hr>
 




</article>
