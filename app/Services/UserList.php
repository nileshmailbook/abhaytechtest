<?php

namespace App\Services;
use App\User;

class UserList
{
	public function Items()
	{
		return User::all();
	}
}
