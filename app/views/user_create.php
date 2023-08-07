<?php $this->layout('master', ['title' => $title]) ?>

<p>Create User</p>

<form action="/user/store" method='post'>
    <input type="text" name="firstName" placeholder="First Name">
    <input type="text" name="lastName" placeholder="Last Name">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="password" placeholder="Password">
    <button type="submit">Create User</button>
</form>