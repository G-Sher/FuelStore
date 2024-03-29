{if not $session->get('login') or not $session->get('login')->is_admin}
  <li class="nav-link">{html_anchor href="/cart/" text="Cart"}</li>
  
{/if}

{* logged in non-admin *}
{if $session->get('login') and not $session->get('login')->is_admin}
  <li class="nav-link">{html_anchor href='/user' text='My Orders'}</li>
{/if}

{* logged in admin *}
{if $session->get('login') and $session->get('login')->is_admin}
  <li class="nav-link">{html_anchor href='/admin' text='All Orders'}</li>
  <li class="nav-link">{html_anchor href='/add/addBook' text='Add Product'}</li>
  <li class="nav-link">{html_anchor href='/admin/addCategory' text='Add Category'}</li>
{/if}
{if not $session->get('login')}
<li class="nav-link">{html_anchor href="/home/accountCreate/" text="Create Account"}</li>
{/if}
{if $session->get('login')}
  <li class="nav-link">{html_anchor href='/authenticate/logout' text='Logout'}</li>
{else}
  <li class="nav-link">{html_anchor href='/authenticate/login' text='Login'}</li>
{/if}

