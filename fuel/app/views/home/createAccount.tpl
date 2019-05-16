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
 
    {form attrs=['action' => '/home/accountCreate/']}
        <table class="table table-sm table-borderless">
			<tr>
				<td>Username: </td>
				<td>
					<input class="form-control" type="text" name="name" 
						value="{$name|default}"  />
				</td>
			</tr>

			

			<tr>
				<td>Email: </td>
				<td>
					<input class="form-control" type="text" name="price" 
						value="{$price|default}"  />
				</td>
			</tr>

			<tr>
				<td>Password: </td>
				<td>
					<input class="form-control" type="text" name="description" value= "{$description|default}" required>
					</input>
				</td>
			</tr>
			<tr>
				<td>Confirm Password: </td>
				<td>
					<input class="form-control" type="text" name="confirm" 
						value="{$name|default}"  />
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
	
{/block}