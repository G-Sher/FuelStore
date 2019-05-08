{extends file="layout.tpl"}

{block name="localstyle"}
{/block}

{block name="content"}
 <h2>My Orders</h2>
  
  <table class='table table-borderless table-sm'>
    <tr>
      <th>Order ID</th>
      <th>Date/Time
      </th>
    </tr>

    {foreach $orders as $order}
      <tr>
        <td>
          {html_anchor href="user/orderDetail/{$order->id}" text="{$order->id}"}
        </td>
        <td>{$order->created_at}</td>
      </tr>    
    {/foreach}
  </table> 

{/block}
