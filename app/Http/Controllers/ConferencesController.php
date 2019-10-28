<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConferencesRequest;
use App\Http\Requests\UpdateConferencesRequest;
use App\Repositories\ConferencesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ConferencesController extends AppBaseController
{
    /** @var  ConferencesRepository */
    private $conferencesRepository;

    public function __construct(ConferencesRepository $conferencesRepo)
    {
        $this->middleware('auth')->except(['index','show']);
        $this->conferencesRepository = $conferencesRepo;
    }

    /**
     * Display a listing of the Conferences.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $conferences = $this->conferencesRepository->all();

        return view('conferences.index')
            ->with('conferences', $conferences);
    }

    /**
     * Show the form for creating a new Conferences.
     *
     * @return Response
     */
    public function create()
    {
        return view('conferences.create');
    }

    /**
     * Store a newly created Conferences in storage.
     *
     * @param CreateConferencesRequest $request
     *
     * @return Response
     */
    public function store(CreateConferencesRequest $request)
    {
        $input = $request->all();

        $conferences = $this->conferencesRepository->create($input);

        Flash::success('Conferences saved successfully.');

        return redirect(route('conferences.index'));
    }

    /**
     * Display the specified Conferences.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $conferences = $this->conferencesRepository->find($id);

        if (empty($conferences)) {
            Flash::error('Conferences not found');

            return redirect(route('conferences.index'));
        }

        return view('conferences.show')->with('conferences', $conferences);
    }

    /**
     * Show the form for editing the specified Conferences.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $conferences = $this->conferencesRepository->find($id);

        if (empty($conferences)) {
            Flash::error('Conferences not found');

            return redirect(route('conferences.index'));
        }

        return view('conferences.edit')->with('conferences', $conferences);
    }

    /**
     * Update the specified Conferences in storage.
     *
     * @param int $id
     * @param UpdateConferencesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConferencesRequest $request)
    {
        $conferences = $this->conferencesRepository->find($id);

        if (empty($conferences)) {
            Flash::error('Conferences not found');

            return redirect(route('conferences.index'));
        }

        $conferences = $this->conferencesRepository->update($request->all(), $id);

        Flash::success('Conferences updated successfully.');

        return redirect(route('conferences.index'));
    }

    /**
     * Remove the specified Conferences from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $conferences = $this->conferencesRepository->find($id);

        if (empty($conferences)) {
            Flash::error('Conferences not found');

            return redirect(route('conferences.index'));
        }

        $this->conferencesRepository->delete($id);

        Flash::success('Conferences deleted successfully.');

        return redirect(route('conferences.index'));
    }
}
