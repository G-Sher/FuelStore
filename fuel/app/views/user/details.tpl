{extends file="layout.tpl"}

{block name="content"}

	<h2>Order #{$order->id}</h2>
	
	{if $session->get('login') and $session->get('login')->is_admin}
	<p>User: {$user->name}</p>
	<p>Email: {$user->email}</p>
	{/if}
	
	<table class='table table-borderless table-sm'>
		<tr>
			<th>product name</th>
			<th>id</th>
			<th>category</th>
			<th>purchase price</th>
			<th>quantity</th>
			<th>subtotal</th>
		</tr>

		{foreach $items as $item}
		<tr>
			<td>
			{$item['name']}
			</td>
			<td>{$item['id']}</td>
			<td>{$item['category']}</td>
			<td>${number_format($item['purchase_price'],2)}</td>
			<td>{$item['quantity']}</td>
			<td>${number_format($item['sub'],2)}</td>
		</tr>    
		{/foreach}
		
		<tr>
			<th>Total: <b>${$total_price|string_format: "%.2f"}</b></th>
		</tr>
	</table> 
		{if $session->get('login') and $session->get('login')->is_admin}
			{form attrs=[action=>"admin/process/{$order->id}", method=>"get"]}
				<button type="submit">Process</button>
				{if {session_get_flash var='set_confirm'}}
					<button type='submit' name="cancel">Cancel</button>
					<input type='hidden' name='confirm'/>
					<h3>{session_get_flash var='message'}</h3>
				{/if}
			{/form}
		{/if}
{/block}
