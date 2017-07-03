@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="fa fa-info-circle" aria-hidden="true"></span> Vrije gift
                    </div>
                    <div class="panel-body">
                        <p>
                            Heeft u een spullen voor een goed doel. Maar weet u niet welk doel te kiezen? Dan kunt u hier uw spullen invoegen als vrij gift. 
                            Na het insturen van het onderstaande formulier worden deze geregistreerd als vrij gift. En komt dit een gezamelijk gedeelte van de 
                            initiatieven en organisatie. En als zij geintresseerd zijn in je spullen. Kunnen deze contact met je opnemen.
                        </p>

                        <p class="text-danger">
                            <strong>Info:</strong> Als u uw spullen registreerd kan de organisatie of Initiatief nemer u mailen. 
                        </p>
                    </div> 
                </div>
            </div>

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="fa fa-plus" aria-hidden="true"></span> Registreer mijn spullen.
                    </div>

                    <div class="panel-body">

                        <form class="form-horizontal" method="POST" action="">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label col-md-2">
                                    Vervoer: <span class="text-danger">*</span>
                                </label>

                                <div class="col-md-4">
                                    <select name="vervoer" class="form-control">
                                        <option value="">-- Type vervoer --</option>
                                        <option value="">Zelf ophalen</option>
                                        <option value="">Wordt gebracht</option>
                                        <option value="">Nadere overeenkomst</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2">
                                    Mijn spullen: <span class="text-danger">*</span>
                                </label>
                                
                                <div class="col-md-7">
                                    <textarea name="items" class="form-control" placeholder="Beschrijving van mijn spullen" rows="7"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2">
                                    Extra informatie: <span class="text-danger">*</span>
                                </label>

                                <div class="col-md-7">
                                    <textarea name="extra" class="form-control" placeholder="Extra informatie die niet relevant is voor de spullen" rows="7"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-9">
                                    <button type="submit" class="btn btn-success btn-success"><span class="fa fa-heart" aria-hidden="true"></span> Gift plaatsen</button>
                                </div>
                            </div>

                        </form>
                    
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection