<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function add($data) {
        $branch = Branch::create($data);
        return $branch -> id;
    }

    public function get_branches() {
        return Branch::all();
    }

    public function get_branch($id) {
        return Branch::find($id);
    }

    public function edit_branches($data, $where) {
        return Branch::where($where) -> update($data);
    }

    public function delete_branch($id) {
        Branch::where('id', $id) -> delete();
    }
}
