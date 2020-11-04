<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Company;
use App\Models\Vacancy;
use App\Models\VacancyType;
use Illuminate\Http\Request;

class AdminVacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancies = Vacancy::all();
        return view('admin.vacancies.index')
        ->with('vacancies', $vacancies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vacancies.create')
            ->with('cities', City::all())
            ->with('companies', Company::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vacancy = new Vacancy();
        $vacancy->title = $request->vacancy_title;
        $vacancy->description = $request->vacancy_description;
        $vacancy->city_id = $request->vacancy_city_id;
        $vacancy->company_id = $request->vacancy_company_id;
        $vacancy->vacancy_type_id = $request->vacancy_type_id;
        $vacancy->save();
        return redirect('admin/vacancies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vacancy = Vacancy::find($id);
        $vacancyTypes = VacancyType::all();
        return view('admin.vacancies.edit')
            ->with('vacancy', $vacancy)
            ->with('cities', City::all())
            ->with('companies', Company::all())
            ->with('vacancyTypes' , $vacancyTypes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vacancy = Vacancy::find($id);
        $vacancy->title = $request->vacancy_title;
        $vacancy->description = $request->vacancy_description;
        $vacancy->title = $request->vacancy_title;
        $vacancy->city_id = $request->vacancy_city_id;
        $vacancy->company_id = $request->vacancy_company_id;
        $vacancy->type_id = $request->vacancy_type_id;
        $vacancy->update();
        return redirect('admin/vacancies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Vacancy::destroy($id)) {
            return redirect('admin/vacancies');
        };
    }
}
