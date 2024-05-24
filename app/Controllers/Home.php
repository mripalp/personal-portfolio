<?php

namespace App\Controllers;

use App\Models\HomeModel;
use App\Models\ProjectsModel;
use App\Models\SkillsModel;

class Home extends BaseController
{
    public function body()
    {
        // Profile
        $userModel = new HomeModel();
        $nameData = $userModel->getName();
        $aboutData = $userModel->getAbout();
        $skillsData = $userModel->getSkills();
        $phoneData = $userModel->getPhone();
        $emailData = $userModel->getEmail();

        // Tech Stack
        $tools = new SkillsModel();
        $list_tools = $tools->findAll();

        // Project
        $projectModel = new ProjectsModel();
        $projects = $projectModel->findAll();


        $data = [
            'title' => 'Ripal Portfolio',
            'name' => ucwords(strtolower($nameData['name'])),
            'about' => $aboutData['about'],
            'skills' => $skillsData['skills'],
            'phone' => $phoneData['phone'],
            'email' => $emailData['email'],

            // Tools
            'tools' => $list_tools,

            // Project
            'projects' => $projects,
        ];


        return view('body', $data);
    }
}
