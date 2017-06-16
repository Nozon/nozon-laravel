@extends('layouts.admin')

@section('administration')

                <h3>Les prix/récompenses</h3>
                <div class="row">
                    <div class="administration" id="creerPrix">
                        <button type="button" id="btn-show-form" class="btn btn-default btn-lg btn-add-prix">Ajouter une récompenses</button>
                        <form method="POST" action="{{ url('prix')}}" class="form-add-prix">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" name="type" class="form-control" value="{{ old('type') }}"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Ecrire ici..." value="{{ old('description') }}"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-default btnAddPrix">Ajouter</button>
                            </div>
                        </form>
                    </div>
                    <div id="modPrix">
                        @include('pages.prix.edit')
                    </div>
                </div>


@endsection
