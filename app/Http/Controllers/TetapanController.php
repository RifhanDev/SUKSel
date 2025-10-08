<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TetapanController extends Controller
{
    public function getPeranan(Request $request)
    {
        $roles = DB::select("
            SELECT id, name
            FROM roles
            ORDER BY id ASC
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

    public function getMenuTree()
    {
        $menus = DB::select("
            SELECT menu_id, main_id, title 
            FROM menu
        ");
        $tree = $this->buildTree($menus);

        return response()->json($tree);
    }

    private function buildTree($menus, $parentId = null)
    {
        $branch = [];

        foreach ($menus as $menu) {
            if ($menu->main_id == $parentId) {
                $children = $this->buildTree($menus, $menu->menu_id);

                $node = [
                    'id'   => $menu->menu_id,
                    'text' => $menu->title,
                ];

                if (!empty($children)) {
                    $node['children'] = $children;
                }

                $branch[] = $node;
            }
        }

        return $branch;
    }

}

