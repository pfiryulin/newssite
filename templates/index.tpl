{include file="header.tpl"}
<div class="category__list">
    {foreach $articles as $category}
        <div class="category__item">
            <div class="category__item-header">
                <div class="category__item-title">{$category['title']}</div>
                <div class="link">
                    <a href="/category/{$category['id']}">View all</a>
                </div>
            </div>
            <div class="article__list">
               {foreach $category['articles'] as $article}
                   <div class="article__item">
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
    {/foreach}
</div>

{include file="footer.tpl"}