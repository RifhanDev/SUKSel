<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TetapanController extends Controller
{
    public function getPeranan(Request $request)
    {
        $roles = DB::select("
            SELECT id, name, 'test' AS description
            FROM roles
            WHERE true
        ");

        return view('tetapan.pengurusan-peranan', ['roles' => $roles]);
    }

    public function getMenu()
    {
        $mainMenus = DB::select("SELECT * FROM menu WHERE main_id IS NULL");

        foreach ($mainMenus as &$menu) {
            $menu->children = DB::select("SELECT * FROM menu WHERE main_id = ?", [$menu->menu_id]);

            foreach ($menu->children as &$child) {
                $child->children = DB::select("SELECT * FROM menu WHERE main_id = ?", [$child->menu_id]);
            }
        }

        return view('tetapan.pengurusan-menu', ['menus' => $mainMenus]);
    }

}

