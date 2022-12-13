<?php
interface user{
    public function create();
    public function login();
    public function logout();
    public function verifyEmail();
    public function resetPassword();
    public function token();
    public function updatePassword();
    public function showUser();
    public function updateUser();
    public function deleteUser();
}