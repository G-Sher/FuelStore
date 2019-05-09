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
 
    <form action="addProductReentrant.php" method="post">
        <table class="table table-sm table-borderless">
			<tr>
				<td>Name: </td>
				<td>
					<input class="form-control" type="text" name="name" 
						value="{$name|escape:'html'}" />
				</td>
			</tr>

			<tr>
				<td>Category: </td>
				<td>
					<select class="form-control" name="category">
						{html_options options=$category selected=$category}
					</select>
				</td>
			</tr>

			<tr>
				<td>Price ($): </td>
				<td>
					<input class="form-control" type="text" name="price" 
						type="text" required
						{* value="{$price|escape:'html'}" />*} /> 
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
						{html_options options=$photo_files selected=$photo_files}
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
 	</form>
 
	<h4 class="message">{$message|default}</h4>
{/block}
 
{block name="localscript"}
  <script>
    $("button[name='cancel']").click(function(){
      $("input[name='quantity']").prop('disabled',true);
    });
  </script>
{/block}