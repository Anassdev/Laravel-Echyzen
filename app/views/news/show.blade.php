{{--
@foreach($news as $new)
    <h2>{{ $new->titre }}</h2>
    <p>Ecrit le  {{ date('d/m/Y à  H\hi', $new->create_at) }}</p>
    <p>
        <span style="text-align: center;">
            {{  $new->contenu }}
        </span>
    </p>
    <hr />
@endforeach
--}}
@foreach($news as $new)
    <article class="news">
        {{-- Affichage Titre/image_rubrique/nb_commentaire --}}
        <h2 class="news_titre">
           <img class="img_miniature" title="{{ $new->rAlt }}" alt="{{ $new->rAlt }}" src="{{ asset( 'uploads/rubrique/' .
            $new->rUrl) }}" />
            {{ $new->titre }}
             {{--<span> {{ entity.commentaires | length }}  commentaires</span>--}}
        </h2>

        <div class="news_panneau">

            <img title="{{ $new->nAlt }}" alt="{{ $new->rAlt }}"
            src="{{ asset( 'uploads/news/' . $new->nUrl) }}" style="float:left;" />

            <div >
                <p class="intro">
                    <span class="intro_contenu">
                        @unless($new->intro)
                            {{ Str::limit($new->contenu, 200) }}
                        @else
                            {{ $new->intro }}
                        @endunless

                    </span>
                </p>
                <div class="news_contenu">
                    {{ $new->contenu }}
                    <br>
                    {{ $new->created_at }}

                    <hr />
                    <div class="news_button">
                        {{--
                        {{ twitterButton( path('news_show',{ 'id': entity.id}), entity.titre) | raw}}
                        {{ faceBookButton(path('news_show',{ 'id': entity.id})) | raw }}
                        {{ googlePlusButton(path('news_show',{ 'id': entity.id}), 'bubble') | raw }}
                        --}}
                        {{-- génération du bouton commentaire --}}
                        <button class="showTop" value="{{ $new->id }}">Ajouter Commentaire</button>
                    </div>
                    <div class="commentaire">
                        {{--
                        {% include "EchyzenNewsBundle:Commentaire:show.html.twig"  with {'commentaires': entity.commentaires} only %}
                        --}}
                    </div>
                </div>
                <span class="newsShow" ></span>
            </div>
            <footer class="news_footer">
                <p>
                    {{--Ecrit le  {{ date('d/m/Y à  H:i', $new->created_at) }} --}}
                    <span class="news_footer_mot_cle">
                        Mots-Clés :

                        @foreach($new->motcles as $m)
                            #{{ $m->nom }}
                        @endforeach
                        {{--
                        {% for motcle in entity.motcles %}
                            <a class="link_keyword" href="{{ path('news_by_motcle', {'id': motcle.id}) }}"><span>{{ '#' ~ motcle.nom }}</span></a>
                            {{ '  ' }}
                        {% endfor %}
                        --}}
                    </span>
                </p>
            </footer>
        </div>
    </article>
@endforeach

@foreach($count as $c)
    <p>{{ $c->count }} : {{ $c->nom }}</p>
@endforeach
@foreach($countmotcle as $c)
    <p>{{ $c->count }} : {{ $c->nom }}</p>
@endforeach

