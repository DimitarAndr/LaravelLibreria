<?php

Auth::logout();
Session::flush();
@redirect('/home')
?>

