<!-- PARTIE NEWS -->
<div class="article content-news-hydro" id="news">
    <div class="row">
        <div class="team-hydro-titre">
            <h1>Les news</h1>
        </div>
        <div class="grid news-description">

            <table class="table " id="tabNews">
                <tbody>

                    @foreach($news->slice(0, 5) as $new)
                        <tr class="news-article">
                            <td class="news-img">
                                <img src="public/img/news/{{$new->nom}}"/>
                            </td>
                            <td class="news-descr">
                                <h3 class="news-titre">{{$new->titre}}</h3>
                                <p class="news-text">
                                    {{$new->texte}}
                                </p>
                                <p class="newx-more"><a href="">Lire la suite..</a></p></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- FIN PARTIE NEWS -->