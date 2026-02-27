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

            {include file="article-list.tpl" articles=$category['articles']}

        </div>
    {/foreach}
</div>

{include file="footer.tpl"}