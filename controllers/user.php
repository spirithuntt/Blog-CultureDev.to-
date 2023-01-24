<?php
interface crudUser{
    public function create();
    public function login();
    public function logout();
    public function verifyEmail();
    public function resetPassword();
    public function token();
    public function updatePassword();
}