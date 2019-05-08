{extends file="layout.tpl"}

{block name="content"}

  <h2>Order Details</h2>
  
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
{/block}
