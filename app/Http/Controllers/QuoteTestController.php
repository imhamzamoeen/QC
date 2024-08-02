<?php

namespace App\Http\Controllers;

use App\Http\Requests\testquote\filterQuoteRequest;
use App\Http\Requests\testQuote\storeQuoteRequest;
use App\Models\comapnies;
use App\Repositories\Interfaces\TestQuoteRepoRepositoryInterface;
use App\Services\JsonResponseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\TestQuotePolicy;
use App\Services\FileStoreService;
use Illuminate\Support\Str;

class QuoteTestController extends Controller
{
    protected $repo;

    // Constructor to bind model to repo
    public function __construct(TestQuoteRepoRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }


    //     function fetch_data(Request $request)
    // {
    //     $url="data_fetch?page=";
    //  if($request->ajax())
    //  {
    //   $all_policies = TestQuotePolicy::where('upper_age','<=',$request->upper_age)->where('lower_age','>=',$request->lower_age)->orderBy('basic_amount', 'ASC')->paginate(4);

    //   return view('components.test-quote.view',compact('all_policies','url'))->render();
    //  }
    //  $all_policies=TestQuotePolicy::paginate(3);
    //  return view('test_folder.quote_test.calculate',compact('all_policies','url'));
    // }


    function fetch_data(Request $request)
    {
        $url = "data_fetch?page=";
        $tariqa = "POST";
        if ($request->ajax()) {
            $all_policies = TestQuotePolicy::where('upper_age', '<=', $request->upper_age)->where('lower_age', '>=', $request->lower_age)->orderBy('basic_amount', 'ASC')->paginate(2);
            return view('components.test-quote.view', compact('all_policies', 'url', 'tariqa'))->render();
        }
        $all_policies = TestQuotePolicy::where('upper_age', '<=', $request->upper_age)->where('lower_age', '>=', $request->lower_age)->orderBy('basic_amount', 'ASC')->paginate(2);
        return view('test_folder.quote_test.calculate', compact('all_policies', 'url', 'tariqa'));
    }
    public function filter_a_quote(filterQuoteRequest $request)
    {

        try {
            $data = TestQuotePolicy::where('upper_age', '<=', $request->upper_age)->where('lower_age', '>=', $request->lower_age)->orderBy('basic_amount', 'ASC')->paginate(6);
            if ($data->isNotEmpty())
                return JsonResponseService::JsonSuccess('Policies found for you successfully !', $data);

            return JsonResponseService::JsonFailed('No Policy Found!', $data);
        } catch (\Exception $exception) {
            return  JsonResponseService::getJsonException($exception);
        }
    }
    public function calculate_quote(Request $request)
    {
        $url = "calculate_quote?page=";
        $tariqa = "GET";
        if ($request->ajax()) {
            $all_policies = comapnies::paginate(2);
            return view('components.test-quote.view', compact('all_policies', 'url', 'tariqa'))->render();
        }
        $all_policies = comapnies::paginate(1);
        return view('test_folder.quote_test.calculate', compact('all_policies', 'url', 'tariqa'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return redirect()->route('test_quote.calculate');
        // return view('test_folder.quote_test.index');
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
    public function store(storeQuoteRequest $request)
    {
        $specs = '';
        foreach ($request->features as $Afeature) {
            $specs = $specs . $Afeature . ',';
        }

        $new_ages = explode("-", $request->age);
        foreach ($new_ages as $age) {
            str_replace(['"', "'"], "", $age);
        }

        try {
            DB::beginTransaction();
            $file_name = FileStoreService::ImageStore($request->pic, 'images/test_quote');
            $request->request->add(['image' => $file_name]);  // this add data to request 
            //    $request->request->add(['id' =>Str::uuid()->toString()]);  // this add data to request
            $request->request->add(['features' => $specs]);  // this add data to request
            $request->request->add(['lower_age' => $new_ages[0]]);  // this add data to request
            $request->request->add(['upper_age' => $new_ages[1]]);  // this add data to request


            // return $request->except('pic');
            $action =  $this->repo->create($request->except('pic', 'age'));
            DB::commit();
            return JsonResponseService::JsonSuccess('New Quote Submitted Successfully !', $action);


            DB::rollBack();
            return JsonResponseService::getJsonSuccess('Failed to create new Quote !');
        } catch (\Exception $exception) {
            DB::rollBack();
            return  JsonResponseService::getJsonException($exception);
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
