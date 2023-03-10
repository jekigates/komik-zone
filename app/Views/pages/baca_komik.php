<div class="container-fluid container-lg mt-4">
   <div class="row">
        <h2 class="fw-bold text-center text-primary">Reality Quest Chapter 1</h2>
    </div>
    <div class="row py-4">
        <div class="col-12">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="">Manhwa</a></li>
                    <li class="breadcrumb-item"><a href="">Reality Quest</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chapter 1</li>
                </ol>
            </nav>
        </div>
        <div class="col-2">
            <select class="form-select" aria-label="Default select example">
                <option selected>Chapter 1</option>
                <?php 
                    for ($i = 2; $i < 76; $i++) {
                        ?>
                        <option value="<?= $i ?>">Chapter <?= $i ?></option>
                        <?php
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <div id="chapter-images">
                <?php 
                    for ($x = 0; $x < 49; $x++) {
                        ?>
                        <img src="<?= base_url('images/comics/reality-quest/chapters/1/' . $x . '.komikindo.id.jpg') ?>" alt="Reality Quest Chapter <?= $x ?> Page <?= $x ?>" class="w-100">
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bottom-navbar nb04">
    <div class="row bg-white py-2">
        <div class="col-4">
            <button class="btn btn-outline-primary">
                <i class="bi bi-download"></i>
            </button>
        </div>
        <div class="col-4 text-center">
            <div class="btn-group" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn btn-outline-primary">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button type="button" class="btn btn-outline-primary">1 of 76</button>
                <button type="button" class="btn btn-outline-primary">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
        <div class="col-4 text-end">
            <div>
                <button class="btn btn-outline-secondary me-2">
                    <i class="bi bi-arrow-up-circle"></i>
                </button>
                <button class="btn btn-outline-primary">
                    <i class="bi bi-download me-1"></i>
                    Full Screen
                </button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid container-lg my-4">
    <div class="row mx-0 bg-white rounded">
        <div class="col-12 p-4">
            <div id="disqus_thread"></div>
            <script>
                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://komik-zone.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </div>
    </div>
</div>