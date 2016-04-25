<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class CardsController extends Controller
{
    public function index()
    {
        $cards = Card::all();

        return view('cards.index', compact('cards'));
    }

    public function show(Card $card)
    {
        $card->load('notes.user');

        //$card = Card::with('notes.user')->find(1);

        //return $card;

        return view('cards.show', compact('card'));

    }
}
