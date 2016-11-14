<?php
foreach ($cotado->users as $user) {
    echo $user->pivot->created_at;
}