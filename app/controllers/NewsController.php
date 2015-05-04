<?php

class NewsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $array['news'] = News::join('images as nImage', 'nImage.id', '=', 'news.image_id')
        //->selectRaw('images.alt as lol, images.url as XD, images.id as lil')
        ->join('rubriques', 'rubriques.id', '=', 'news.rubrique_id')
        ->join('images as rImage', 'rImage.id', '=', 'rubriques.image_id')
        /*->join('news_motcle as nm','nm.news_id', '=', 'news.id' )
        ->join('motcles', 'motcles.id', '=', 'nm.motcle_id')*/
        ->with('motcles')
        ->orderBy('news.created_at')->where('publication','=',1)
        ->select(/*'motcles.nom',*/ 'nImage.alt as nAlt', 'nImage.url as nUrl',
            'rImage.alt as rAlt', 'rImage.url as rUrl',
            'news.id', 'news.intro', 'news.titre', 'news.contenu', 'news.created_at', 'news.updated_at'
        )
        ->get();
            //die($array['news'][0]->motcles);
        $array['count'] = News::join('rubriques', 'rubriques.id', '=', 'news.rubrique_id')
            ->selectRaw( 'rubriques.nom, count(*) as count')
            ->groupBy('rubriques.id')->get();
        $array['countmotcle'] = Motcle::join('news_motcle as nm','nm.motcle_id', '=', 'motcles.id' )
            ->selectRaw( 'motcles.nom, count(*) as count')
            ->groupBy('motcles.id')->get();

        $from = date('Y-m-d', strtotime('2015-03-01'));
        $to = date('Y-m-d');

        $array['lol'] = News::select([
            DB::raw('MONTH(created_at) AS month'),
            DB::raw('COUNT(*) AS count'),
        ])
            ->whereBetween('created_at', [$from, $to])
            ->groupBy('month')
            ->orderBy('month', 'ASC')
            ->get()
            ->toArray();

        //die(var_dump($array['lol']));
            //->lists('count', 'date');


        // get all news
		//$array['news'] = News::orderBy('created_at')->where('publication','=',1)->get();

        // load the view and pass the news
        return View::make('news.index')->with($array);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
