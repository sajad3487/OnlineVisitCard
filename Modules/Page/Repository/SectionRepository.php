<?php


namespace Modules\Page\Repository;


use App\DesignPatterns\Repository;
use Illuminate\Database\Eloquent\Model;
use Modules\Page\Entities\Section;

class SectionRepository extends Repository
{
    public function __construct()
    {
        $this->model = new Section();
    }

    public function getSectionByName ($section){
        return Section::where('section',$section)->first();
    }

    public function getAllSectionByName ($section){
        return Section::where('section',$section)
            ->orderBy('priority', 'asc')
            ->get();
    }

}
