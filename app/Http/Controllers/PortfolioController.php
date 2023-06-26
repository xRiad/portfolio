<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\PortfolioHead;
use App\Models\Intro;

class PortfolioController extends Controller
{
    public function index () {
      $portfolioHead = PortfolioHead::firstOrFail();
      $projects = Project::paginate(4);
      $intro = Intro::firstOrFail();

      return view('front.portfolio.index', ['portfolioHead' => $portfolioHead, 'projects' => $projects, 'intro' => $intro]);
    }

    public function getProject($id) {
      $project = Project::findOrFail($id);

      return view('front.portfolio.detail', ['project' => $project]);
    }
}
