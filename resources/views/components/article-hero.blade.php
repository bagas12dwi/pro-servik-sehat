<style>
    .hero-article {
        position: relative;
        background: url('{{ URL::asset('storage/' . $article->thumbnails) }}') center center/cover no-repeat;
        color: white;
        height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .hero-article-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    .hero-article-content {
        position: relative;
        z-index: 2;
    }
</style>

<div class="hero-article mb-3">
    <div class="hero-article-overlay"></div>
    <div class="hero-article-content">
    </div>
</div>
