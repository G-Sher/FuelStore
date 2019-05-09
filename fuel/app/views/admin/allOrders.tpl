{extends file="layout.tpl"}

{block name="localstyle"}
{/block}

{block name="content"}
 <h2>All Orders</h2>
  
  <table class='table table-borderless table-sm'>
    <tr>
      <th>Order ID</th>
      <th>User</th>
      <th>Date/Time
      </th>
    </tr>

    {foreach $orders as $order}
      <tr>
        <td>
          {html_anchor href="admin/adminDetail/{$order->id}" text="{$order->id}"}
        </td>
        <td></td>
        <td>{$order->created_at}</td>
      </tr>    
    {/foreach}
  </table> 

	{if {session_get_flash var='confirm'}}
		<h3>{session_get_flash var='confirm'}</h3>
	{/if}
{/block}