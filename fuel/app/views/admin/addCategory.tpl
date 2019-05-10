{extends file="layout.tpl"}

{block name="localstyle"}
{/block}

{block name="content"}
<h2>Add Category</h2>

<p></p>

<h5>Current Categories:</h5>

<ul>
    {foreach $category as $categories}
    <li>{$categories}</li>
    {/foreach}
</ul>

{form attrs=[action => '/admin/addCatReenter/', 'method'=>"GET"]}
    <label>New Category:</label>
    <input class="form-control" type="text" name="newCat" value='{$name|default}'/>
    <button type= "submit" name="add">Add Category</button>
    <button type= "submit" name="cancel">Cancel</button>]
{/form}
{/block}