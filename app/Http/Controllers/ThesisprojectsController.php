<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateThesisprojectsRequest;
use App\Http\Requests\UpdateThesisprojectsRequest;
use App\Repositories\ThesisprojectsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ThesisprojectsController extends AppBaseController
{
    /** @var  ThesisprojectsRepository */
    private $thesisprojectsRepository;

    public function __construct(ThesisprojectsRepository $thesisprojectsRepo)
    {
        $this->middleware('auth')->except(['index','show']);
        $this->thesisprojectsRepository = $thesisprojectsRepo;
    }

    /**
     * Display a listing of the Thesisprojects.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $thesisprojects = $this->thesisprojectsRepository->all();

        return view('thesisprojects.index')
            ->with('thesisprojects', $thesisprojects);
    }

    /**
     * Show the form for creating a new Thesisprojects.
     *
     * @return Response
     */
    public function create()
    {
        return view('thesisprojects.create');
    }

    /**
     * Store a newly created Thesisprojects in storage.
     *
     * @param CreateThesisprojectsRequest $request
     *
     * @return Response
     */
    public function store(CreateThesisprojectsRequest $request)
    {
        $input = $request->all();

        $thesisprojects = $this->thesisprojectsRepository->create($input);

        Flash::success('Thesisprojects saved successfully.');

        return redirect(route('thesisprojects.index'));
    }

    /**
     * Display the specified Thesisprojects.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $thesisprojects = $this->thesisprojectsRepository->find($id);

        if (empty($thesisprojects)) {
            Flash::error('Thesisprojects not found');

            return redirect(route('thesisprojects.index'));
        }

        return view('thesisprojects.show')->with('thesisprojects', $thesisprojects);
    }

    /**
     * Show the form for editing the specified Thesisprojects.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $thesisprojects = $this->thesisprojectsRepository->find($id);

        if (empty($thesisprojects)) {
            Flash::error('Thesisprojects not found');

            return redirect(route('thesisprojects.index'));
        }

        return view('thesisprojects.edit')->with('thesisprojects', $thesisprojects);
    }

    /**
     * Update the specified Thesisprojects in storage.
     *
     * @param int $id
     * @param UpdateThesisprojectsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateThesisprojectsRequest $request)
    {
        $thesisprojects = $this->thesisprojectsRepository->find($id);

        if (empty($thesisprojects)) {
            Flash::error('Thesisprojects not found');

            return redirect(route('thesisprojects.index'));
        }

        $thesisprojects = $this->thesisprojectsRepository->update($request->all(), $id);

        Flash::success('Thesisprojects updated successfully.');

        return redirect(route('thesisprojects.index'));
    }

    /**
     * Remove the specified Thesisprojects from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $thesisprojects = $this->thesisprojectsRepository->find($id);

        if (empty($thesisprojects)) {
            Flash::error('Thesisprojects not found');

            return redirect(route('thesisprojects.index'));
        }

        $this->thesisprojectsRepository->delete($id);

        Flash::success('Thesisprojects deleted successfully.');

        return redirect(route('thesisprojects.index'));
    }
}
