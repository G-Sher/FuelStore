{extends file="layout.tpl"}

{block name="content"}

  <h2>My Cart</h2>
  
  <table class='table table-borderless table-sm'>
    <tr>
      <th>product name</th>
      <th>id</th>
      <th>category</th>
      <th>purchase price</th>
      <th>quantity</th>
      <th>subtotal</th>
    </tr>

    {foreach $selections as $selection}
      <tr>
        <td>
          {$selection->product->name}
        </td>
        <td>{$selection->product->id}</td>
        <td>{$selection->product->category->name}</td>
        <td>${number_format($selection->purchase_price,2)}</td>
        <td>{$selection->quantity}</td>
{*        <td>${number_format($sub[selection->id],2)}</td>*}
      </tr>    
    {/foreach}
    <tr>
{*      <th>Total: <b>${$total_price|string_format: "%.2f"}</b></th>*}
    </tr>
  </table> 

  {if $session->get('login') && $session->get('cart')}
    {form attrs=[action => '/user/makeOrder', 'method'=>"GET"]}
      <button type='submit'>Make an Order from Cart</button>
    {/form}
  {/if}

{/block}
