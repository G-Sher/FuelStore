{extends file="layout.tpl"}
 
{block name="localstyle"}
  <style type="text/css">
    td:first-child, th:first-child {
      white-space: nowrap;
      width: 10px;
    }
  </style>
{/block}
 
{block name="content"}
    <h2>Add Product</h2>
 
    {form attrs=['action' => '/add/addBookReentrant/']}
        <table class="table table-sm table-borderless">
			<tr>
				<td>Name: </td>
				<td>
					<input class="form-control" type="text" name="name" 
						value="{$name|default}"  />
					<span class="error">{$validator->error_message('name')}</span>
				</td>
			</tr>

			<tr>
				<td>Category: </td>
				
					<td>
						
						<select class="form-control" name="category">
							{foreach $categories as $category}
							{html_options options=$category selected= {$category|default}}
							{/foreach}
						</select>
						
					</td>	
				
			</tr>

			<tr>
				<td>Price : </td>
				<td>
					<input class="form-control" type="text" name="price" 
						value="{$price|default}"  />
					<span class="error">{$validator->error_message('price')}</span>
				</td>
			</tr>

			<tr>
				<td>Description: </td>
				<td>
					<textarea class="form-control" type="text" name="description" value= "{$description|default}" required>
					</textarea>
				</td>
			</tr>

            <tr>
				<td>Photo: </td>
				<td>
					<select class="form-control" name="photo_file">
						{foreach $photo_files as $photo_file}
						{html_options options=$photo_file selected=$photo_file}
						{/foreach}
					</select>
				</td>
			</tr>

			<tr>
				<td></td>
				<td>
					<button type="submit" name="doit">Add</button>
					<button type="submit" name="cancel">Cancel</button>
				</td>
			</tr>

		</table>
 	{/form}
 
	<h4 class="message">{$message|default}</h4>
	
	{*
  <pre>{$validator->error_message()|var_export}</pre>
  *}
{/block}
 
