<aside class="col-sm-12 col-md-12 col-lg-3">

    <div class="row mb-3">
    <div class="col">
        <div class="card">
        <div class="card-body">
            <h3 class="card-title">Título</h3>
            <p class="card-subtitle text-muted mt-2 mb-2">Subtítulo</p>
            <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <a href="#" class="card-link">Enlace 1</a>
            <a href="#" class="card-link">Enlace 2</a>
        </div>
        </div>
    </div>
    </div>

    <div class="row mb-3">
    <div class="col">
        <div class="card">
        <div class="card-body p-2 m-2" style="overflow: hidden;">
            <?php if (!function_exists('dynamic_sidebar' ) || !dynamic_sidebar('aside') ) : endif; ?>
        </div>
        </div>
    </div>
    </div>

</aside>