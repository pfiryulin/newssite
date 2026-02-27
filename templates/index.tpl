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
                       <div class="article-data">
                           <div class="article-data-item">
                               {$article['created_at']|date_format:"%b %e %Y"}
                           </div>
                           <div class="article-data-item">
                               <svg height="15" viewBox="0 0 32 32" width="32" xmlns="http://www.w3.org/2000/svg">
                                   <g fill="none" fill-rule="evenodd">
                                       <path d="m0 0h32v32h-32z"/>
                                       <path d="m16 4c11.0150135 0 16 12 16 12s-4.9592389 12-16 12c-11.04076111 0-16-12-16-12s4.98498645-12 16-12zm0 6c-3.3137085 0-6 2.6862915-6 6s2.6862915 6 6 6 6-2.6862915 6-6-2.6862915-6-6-6zm0 2c2.209139 0 4 1.790861 4 4s-1.790861 4-4 4-4-1.790861-4-4 1.790861-4 4-4z" fill="#647bb5"/>
                                   </g>
                               </svg>
                               {$article['views']}
                           </div>

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