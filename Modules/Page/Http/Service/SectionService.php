<?php


namespace Modules\Page\Http\Service;


use Modules\Page\Repository\SectionRepository;

class SectionService
{
    /**
     * @var SectionRepository
     */
    private $sectionRepo;

    public function __construct(
        SectionRepository $sectionRepository
    )
    {
        $this->sectionRepo = $sectionRepository;
    }

    public function createSection ($data){
        return $this->sectionRepo->create($data);
    }

    public function updateSection ($data,$id){
        return $this->sectionRepo->update($data,$id);
    }

    public function deleteSection ($id){
        return $this->sectionRepo->delete($id);
    }

    public function getSection ($section){
        return $this->sectionRepo->getSectionByName ($section);
    }

    public function getAllSection ($section){
        return $this->sectionRepo->getAllSectionByName ($section);
    }

    public function uploadLogo($request)
    {
        $destination = base_path() . '/public/pic/';
        $filename = rand(1111111, 99999999);
        $file = $request->file('file');
        $newFileName = $filename . $request->file->getClientOriginalName();
        $file->move($destination, $newFileName);
        return '/pic/' . $newFileName;
    }

}
