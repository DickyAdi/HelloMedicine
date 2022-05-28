<?php

namespace App\Http\Controllers;

use App\Models\edukasi;
use Illuminate\Http\Request;

class edukasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $val = [
            [
                'title' => 'Edukasi 1',
                'author' => 'diki',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, minus culpa consequuntur nihil corporis dolores at. Quasi ab accusamus earum commodi nisi assumenda adipisci ratione quam aperiam, nostrum dolorum. Possimus quam perspiciatis consequuntur reprehenderit, nobis quaerat quod! Temporibus et, delectus voluptatibus corporis similique assumenda reiciendis! Eum incidunt cupiditate rem minima?'
            ],
            [
                'title' => 'Edukasi 2',
                'author' => 'diki',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eaque cum vitae est neque illo tenetur non consequatur totam corrupti autem minus ea numquam recusandae distinctio soluta ratione blanditiis harum, at deleniti impedit veritatis molestias amet. Illum voluptas maiores ab dignissimos perspiciatis rerum, corporis nostrum sequi at ea id odio.'
            ],
            [
                'title' => 'Edukasi 3',
                'author' => 'jane',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quos at nostrum natus porro odit fugiat amet ipsa veritatis unde alias rerum cum, neque facere voluptas hic. Ut molestiae impedit accusantium dolor nobis dicta voluptatem, quod autem suscipit non error natus aliquid rerum inventore quam in minus cumque? Excepturi, fugiat?'
            ]
        ];

        return view('edukasi', [
            'value' => $val
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\edukasi  $edukasi
     * @return \Illuminate\Http\Response
     */
    public function show(edukasi $edukasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\edukasi  $edukasi
     * @return \Illuminate\Http\Response
     */
    public function edit(edukasi $edukasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\edukasi  $edukasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, edukasi $edukasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\edukasi  $edukasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(edukasi $edukasi)
    {
        //
    }
}
