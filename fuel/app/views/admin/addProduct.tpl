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
						
						<select class="form-control" name="categories">
							{foreach $category as $categories}
							{html_options options=$categories }
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
					<textarea class="form-control" type="text" name="description" required>
					</textarea>
				</td>
			</tr>

            <tr>
				<td>Photo: </td>
				<td>
					<select class="form-control" name="photo_files">
						{foreach $photo_file as $photo_files}
						{html_options options=$photo_files selected=$photo_files}
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
 
