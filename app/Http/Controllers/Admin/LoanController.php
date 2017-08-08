<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Loan as LoanRequest;
use App\Item;
use App\Loan;
use App\Status;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.loans.index', ['loans' => Loan::paginate(20)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = ['statuses' => Status::all()];
        if (isset($request->item)) {
            $data['item'] = Item::where(['id' => $request->item, 'borrowable' => true])->firstOrFail();
        } else {
            $data['items'] = Item::leftJoin('items_types', 'items.id', '=', 'items_types.id')
                ->where('borrowable', true)->whereNotBetween('')->get();
        }

        if (isset($request->user)) {
            $data['user'] = User::findOrFail($request->user);
        } else {
            $data['users'] = User::all();
        }

        $data['date_begin'] = Carbon::today()->format('d/m/Y');
        $data['date_end'] = Carbon::today()->addWeek(2)->format('d/m/Y');
        $data['status'] = Status::findOrFail(1);

        return view('admin.loans.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  LoanRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoanRequest $request)
    {
        $loan = new Loan($request->all());
        $loan->date_begin = Carbon::createFromFormat("d/m/Y", $request->date_begin);
        $loan->date_end = Carbon::createFromFormat("d/m/Y", $request->date_end);

        $loan->save();

        $request->session()->flash('success',
            'Loan '.$loan->item->itemInfo->title.', <i>'.$loan->user->username.'</i> created !');

        return redirect()->route('admin.loans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loan $loan
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loan $loan
     * @return \Illuminate\Http\Response
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Loan $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loan $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        //
    }
}
