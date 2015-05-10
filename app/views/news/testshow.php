<h1>Home!!!!</h1>
{{ param }}
<article class="news" ng-repeat="new in news">

    <h2 class="news_titre">
        <img class="img_miniature" title="{{ new.rAlt }}" alt="{{ new.rAlt }}" src="{{ 'uploads/rubrique/' + new.rUrl }}" />
        {{ new.titre }}
        <!--<span> {{ entity.commentaires | length }}  commentaires</span>-->
    </h2>

    <div class="news_panneau">

        <img title="{{ new.nAlt }}" alt="{{ new.nAlt }}"
              src="{{ 'uploads/news/' + new.nUrl }}" style="float:left;" />

        <div >
            <p class="intro">
                <span class="intro_contenu" ng-show="isUndefinedOrNull(new.intro)">
                    contenu
                </span>

                <span class="intro_contenu" ng-hide="isUndefinedOrNull(new.intro)">
                    {{ new.intro }}
                </span>
            </p>

            <div class="news_contenu">
                {{ new.contenu }}
                <br>
                {{ new.created_at }}

                <hr />
                <div class="news_button">
                    <!--
                    {{ twitterButton( path('news_show',{ 'id': entity.id}), entity.titre) | raw}}
                    {{ faceBookButton(path('news_show',{ 'id': entity.id})) | raw }}
                    {{ googlePlusButton(path('news_show',{ 'id': entity.id}), 'bubble') | raw }}
                    -->

                    <button class="showTop" value="{{ new.id }}">Ajouter Commentaire</button>
                </div>
                <div class="commentaire">
                    <!--
                    {% include "EchyzenNewsBundle:Commentaire:show.html.twig"  with {'commentaires': entity.commentaires} only %}
                    -->
                </div>
            </div>
            <span class="newsShow" ></span>
        </div>

        <footer class="news_footer">
            <p>
                <!--Ecrit le  {{ date('d/m/Y à  H:i', $new->created_at) }} -->
                    <span class="news_footer_mot_cle">
                        Mots-Clés :
                        <a href="{{ laroute.route('news.index') }}" ng-repeat="m in new.motcles">
                            {{ m.nom }}
                        </a>
                    </span>
            </p>
        </footer>
    </div>

</article>



