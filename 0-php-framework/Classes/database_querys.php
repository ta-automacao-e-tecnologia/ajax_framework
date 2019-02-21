<?php

    class querys
    {
        protected $ALL_DATA = "SELECT * FROM users";
        protected $LOGIN = "SELECT * FROM users WHERE user = ? AND pass = ?";
    }