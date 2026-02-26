{include file="header.tpl"}
<div class="category__item">
    <div class="category__item-header">
        <div class="category__item-title">{$category['name']}</div>
    </div>
    <div class="article__list">
        {foreach $articles as $article}
            <div class="article__item current-category">
                <div class="article__item-img">
                    <img src="{$article['img']}" alt="">
                </div>
                <div class="article-title">
                    <a href="/article/{$article['id']}">{$article['title']}</a>
                </div>
                <div class="article-date">
                    {$article['created_at']|date_format:"%b %e %Y"}
                </div>
                <div class="article-description">
                    {$article['description']}
                </div>
                <div class="link">
                    <a href="/article/{$article['id']}">Continue reading</a>
                </div>
            </div>
        {/foreach}
    </div>
</div>
<div class="pagination">
    <ul>
        <li>
            <a href="?page=1">В начало</a>
        </li>
        {for $i=1 to $totalPages}
            <li class="link
                {if $currenPage == $i}active{/if}
            ">
                <a href="?page={$i}">{$i}</a>
            </li>
        {/for}
        <li>
            <a href="?page={$totalPages}">В конец</a>
        </li>

    </ul>
</div>
{include file="footer.tpl"}