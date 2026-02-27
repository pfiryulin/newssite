{include file="header.tpl"}
<div class="category__item">
    <div class="category__item-header">
        <div class="category__item-title">{$category['name']}</div>
    </div>
    <div class="sort__nav">
        <ul class="link__list">
            <li class="link {if $sort == 'views'}active{/if}">
                <a href="?page=1&sort=views&direct={$direction}">
                    {if $direction == 'desc'}
                        Еще никто не видел
                    {else}
                        Самые популярные
                    {/if}
                </a>
            </li>
            <li class="link {if $sort == 'created_at'}active{/if}">
                <a href="?page=1&sort=created_at&direct={$direction}">
                    {if $direction == 'desc'}
                        Проверенно временем
                    {else}
                        Самое свежее
                    {/if}
                </a>
            </li>
        </ul>
    </div>

    {include file="article-list.tpl" articles=$articles}

</div>
<div class="pagination">
    <ul class="link__list">
        <li>
            <a href="?page=1&sort={$sort}&direct={$curentDirection}">В начало</a>
        </li>
        {for $i=1 to $totalPages}
            <li class="link
                {if $currenPage == $i}active{/if}
            ">
                <a href="?page={$i}&sort={$sort}&direct={$curentDirection}">{$i}</a>
            </li>
        {/for}
        <li>
            <a href="?page={$totalPages}&sort={$sort}&direct={$curentDirection}">В конец</a>
        </li>

    </ul>
</div>
{include file="footer.tpl"}