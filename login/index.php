<?php 

include '../header.php';

?>
<div class="container">
    <form class="form-signin" method="POST" action="autenticacion.php" novalidate>
     
      <h1 class="h3 mb-3 font-weight-normal">Po favor, identificate.</h1>
      <label for="email" class="sr-only">Email address</label>
      <input
        type="email"
        id="email"
        name="email"
        class="form-control"
        placeholder="Email address"
        required
        autofocus
      />
      <label for="password" class="sr-only">Password</label>
      <input
        type="password"
        id="password"
        name="password"
        class="form-control"
        placeholder="Password"
        required
      />
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">
        Sign in
      </button>
      
    </form>
    </div>

<?php

include '../footer.php';

?>