<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class backupController extends Controller
{
	

public function dbDelete()
{
    DB::statement('DROP DATABASE btauto');
    return "btauto database deleted successfully";
}

public function db_backup(){
	$databaseName = config('database.connections.database');
	$backupPath = base_path('/db/btauto.sql');
	exec("mysqldump --user=root --password= $databaseName > $backupPath");
	return "Btauto database backup successfully";
}


}



