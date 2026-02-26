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
{include file="footer.tpl"}