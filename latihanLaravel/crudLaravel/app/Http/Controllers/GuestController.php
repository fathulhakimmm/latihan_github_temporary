<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\DB;
use App\Models\Guest;

class GuestController extends Controller
{
    //
    public function index()
    {
        //database tanpa eloquent untuk menampilkan seluruh isi tabel guest
        // $guest = DB::table('guests')->get();

        //database dengan eloquent
        $guests = Guest::all();
        return view('addGuestForm', ['guests' => $guests]);
    }

    //function to save input data to database
    public function store(Request $request)
    {
        $guest = new Guest;
        $guest->guestName = $request->input('name');
        $guest->guestEmail = $request->input('email');
        $guest->guestAddress = $request->input('address');

        $guest->save();

        return redirect('/')->with('message', 'Data is Successfully saved');
    }

    //function to destroy/delete data from database
    public function destroy($id=0)
    {
        $guest = Guest::find($id);
        $guest->delete();

        return redirect('/')->with('message', 'Data is Successfully deleted');
    }

    // //function to display form edit (modal)
    // public function edit($id)
    // {
    //     $guest = Guest::find($id);
    //     return response('')->json($guest);
    // }

    //function to update data in database
    public function update(Request $request)
    {
        $id = $request->input('id');
        
        $guest = Guest::find($id);
        $guest->guestName = $request->input('name');
        $guest->guestEmail = $request->input('email');
        $guest->guestAddress = $request->input('address');

        $guest->save();

        return redirect('/')->with('message', 'Data is Successfully updated');
    }
}
