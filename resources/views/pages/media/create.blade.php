@extends('layouts.admin')

@section('administration')

    <h3>Les médias</h3>
                <div class="row">
                    <div class="administration" id="creerEdition">
                        <button type="button" id="btn-show-form" class="btn btn-default btn-lg btn-add-media">Ajouter un médias</button>
                        <form class="form-add-media" method="POST" action="{{ url('media') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <label>Insérer une image</label>
                                <input type="file" name="image"/>
                                <button class="btn btn-default btnAddMediaImg">Ajouter photo</button>
                        </form>
                    </div>
                    <div id="modMedia">
                        @include('pages.media.edit')
                    </div>
                </div>

@endsection
