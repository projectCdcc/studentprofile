<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
      // lists of Jobs
      public function jobList()
      {
          // Retrieve all jobs from the jobs table as a collection
          $jobs = Job::all();

          // Return the collection of jobs
          return view('employer.jobs.emp-job-list')->with('jobs', $jobs);
      }

      // details of Jobs
      public function jobDetail($id)
      {
        // Retrive all jobs from the jobs table as a collection
        $job = Job::where('id', $id)->first();

        return view('employer.jobs.emp-job-detail')->with('job', $job);
      }

}
