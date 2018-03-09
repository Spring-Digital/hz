<?php

namespace App\Http\Controllers;

use App\Models\Quarter;
use Illuminate\Http\Request;

/**
 * Controller to manage Quarter CRUD.
 *
 * @package App\Http\Controllers
 * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
 * Class QuarterController
 */
class QuarterController extends Controller
{

    /**
     * QuarterController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show all Quarters.
     * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
     * @return mixed
     */
    public function index()
    {
        return response(Quarter::all());
    }

    /**
     * Store new quarter information
     *
     * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        return response('', 201);
    }
}
