<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bidders', function() {
    /**
     * return the list of bidders in alphabetical order according to name (10 points)
     */
});

Route::get('/clients', function() {
    /**
     * return the list of clients in alphabetical order according to name (10 points)
     */
});

Route::get('/biddings', function() {
    /**
     * return the biddings from all the clients arranged according 
     * to completion date (earliest completion first)
     * (10 points)
     */
});

Route::get('/clients/{entity}', function() {
    /**
     * return the information of a specific client
     * together with all its biddings
     * (15 points)
     */
});

Route::get('/biddings/{bidding}', function() {
    /**
     * return a specific bidding together with all the list of bids
     * and bidder (entity)
     * i.e. 
     * [project_name, completion_date]
     *     -- [bidder_name, bid_amount]
     * (25 points)
     */
});


Route::get('/bidders/{entity}', function() {
    /**
     * return the information of a specific bidder
     * together with the list of bids that the bidders have
     * including the data of the biddings and the entity (client)
     * i.e. 
     * [project_name, client_name(entity), bid_amount]
     * (30 points)
     */
});