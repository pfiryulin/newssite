{include file="header.tpl"}
<div class="article__body">
    <h1 class="title">Article</h1>
    <div class="article-date"> {$article['created_at']|date_format:"%b %e %Y"}</div>
    <div class="article-img">
        <img src="{$article['img']}" alt="">
    </div>
    <div class="article__contant">
        {$article['content']}
    </div>
</div>
{if $similarArticles}
<div class="similar_articles">
    <div class="similar_articles-title">
        <h4>Похожие статьи</h4>
    </div>
    <div class="article__list">
        {foreach $similarArticles as $simArticle}
            <div class="article__item current-category">
                <div class="article__item-img">
                    <img src="{$simArticle['img']}" alt="">
                </div>
                <div class="article-title">
                    <a href="/article/{$simArticle['id']}">{$simArticle['title']}</a>
                </div>
                <div class="article-date">
                    {$simArticle['created_at']|date_format:"%b %e %Y"}
                </div>
                <div class="article-description">
                    {$simArticle['description']}
                </div>
                <div class="link">
                    <a href="/article/{$simArticle['id']}">Continue reading</a>
                </div>
            </div>
        {/foreach}
    </div>
</div>
{/if}
{include file="footer.tpl"}