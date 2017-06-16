<h4><button type="button" id="year" class="btn btn-default news">Modifier une news</button></h4>
<div id="listeNews">
    <div class="row">
    <div class="grid news-description">

        <table class="table " id="tabNews">
            <tbody>

                @foreach($news as $new)
                    <tr class="news-article">
                        <form method="POST" action="">
                            {{csrf_field()}}
                                <input type="hidden" value="{{$new->id}}">
                                <label>Image</label>
                                <input type="file" name="imgNews"/>
                                <label>Titre de la news</label>
                                <input type="text" class="form-control" placeholder="{{$new->titre}}" name="titre"/>
                                <label>Decription</label>
                                <textarea class="form-control" rows="3" placeholder="{{$new->titre}}" name="texte"></textarea>
                                <input type="hidden" name="_method" value="PUT">
                                <input type="submit">
                                    <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
                                </input>
                        </form>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>

    <table>
        <tbody>
            <tr>
                <td>
                    @foreach($news as $new)
                        <tr>
                            <td>
                                <div class="news-img">
                                    <img class="img-liste-sponsor" src="/img/"/>
                                </div>
                                <div class="news-description">
                                    <h5 id="title-news">{{$new->titre}}</h5>
                                    <p id="date-news" type="date">{{$new->created_at->format('d/m/Y')}}</p>
                                </div>
                            </td>
                        </tr>
                        <!-- supprimer -->
                        <tr>
                            <td>
                                
                                <form method="POST" action="">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit">
                                        <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
                                    </input>
                                </form>
                            </td>
                        </tr>

                        <!-- modifier -->
                        <tr>
                            <td>
                                <form method="POST" action="">
                                {{csrf_field()}}
                                    <input type="hidden" value="{{$new->id}}">
                                    <label>Image</label>
                                    <input type="file" name="imgNews"/>
                                    <label>Titre de la news</label>
                                    <input type="text" class="form-control" name="titre">{{$new->titre}}</input>
                                    <label>Date de création</label>
                                    <input type="text" class="form-control" name="titre">{{$new->created_at->format('d/m/Y')}}</input>
                                    <label>Decription</label>
                                    <textarea class="form-control" rows="3" name="texte">{{$new->description}}</textarea>
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="submit">
                                        <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
                                    </input>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
