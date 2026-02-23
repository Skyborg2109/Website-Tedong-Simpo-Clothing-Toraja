<?php
$user = App\Models\User::where('email', 'admin@tedongsimpo.com')->first();
if ($user) {
    $user->usertype = 'admin';
    $user->save();
    echo "Admin user updated successfully.\n";
} else {
    echo "Admin user not found.\n";
}
