<?php

namespace App\Http\Controllers\Web;

use App\Builders\RobotBuilder;
use App\Directors\RobotDirector;
use App\Http\Controllers\Controller;
use App\Robot;
use Illuminate\Http\Request;

class RobotsController extends Controller
{
    /**
     * Build and Retrieve robots.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        try {
            // Building Robots...
            $robots = (new RobotDirector())->build(new RobotBuilder(new Robot), $request->get('robots_number'));

            return response()->json([
                'robot' => $robots,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'server error!! robot could\'nt be built',
            ], 500);
        }
    }
}
