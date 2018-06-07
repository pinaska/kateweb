/**
 * AJAX script to load smoothly portfolio-items from single-portfolioitem.php.
 * BACKUP 7.06 becuase I am trying other solution
 */

 (function($){
    //check if javascript is available on the site
    $('.load-previous a').attr('href', 'javascript:void(0)');

    //clic event on the button
    function previous_post_trigger(){
        $('.load-previous a').on('click', get_previous_post);
    }
    previous_post_trigger();

    //main function getting the post
    function get_previous_post(){
        // var previousPostID = $(this).attr('data-id');
        var jsonUrl = 'http://localhost/katewp/wp-json/wp/v2/' + 'portfolio-item/'  + '?_embed=true';


        $.ajax({
            dataType:'json',
            url:jsonUrl,
        })
        .done(function(data){
            console.log(data);
            build_portfolio_item(data);

        })
        .fail(function(){
            // console.log('error');
        })
        .always(function(){
            // console.log('ajax complete');
        });
    }//END of get_previous_post

        //main function building html for json data
        function build_portfolio_item(data){
            // console.log(data);

            var termArray = data._embedded['wp:term'][0];
            // console.log(termArray);

            var previousPostContent =
            '<hr>' +
             '<div class="generated">' +
             '<div class="wrap">'+
             '<div class="content-area">' +
             '<div class="site-main">' +
              '<article class="post hentry" data-id="' + data.id + '">' +
              '<h1>' + data.title.rendered + '</h1>' +
               '<div class="portfolio-item-content">' + data.content.rendered + '</div>' +
                 '<div>' + data.CFS.portfolio_item_start + '</div>' + '<div>' + data.CFS. portfolio_item_end + '</div>';

                previousPostContent += '<ul>';
                //looping through the taxonomies
                $.each(termArray, function(index, value){
                    // var termName = value.name;
                    previousPostContent += '<li><a href="'+ value.link +'">'+ value.name+'</a></li>';
                });
                previousPostContent += '</ul>';

                previousPostContent += '</article><!-- #post-## -->' +
                '</div><!-- .site-main -->' +
                '</div><!-- .content-area -->' +
                '</div><!---.wrap-->' +
                '</div><!---.generated-->'+






                //TODO button return undifined
            '<nav class="navigation post-navigation load-previous" role="navigation">' +
                '<span class="nav-subtitle">More our works</span>' +
                '<div class="nav-links">' +
                '<div class="nav-previous">' +
                '<a href="javascript:void(0)" data-id="' + data.previous_post_ID + '">' +
                data.previous_post_title +
                '</a>' +
            '</nav>';

         // Append related posts to the #related-posts container
        $('.post-navigation').replaceWith(previousPostContent);
        // $(previous_post_content).insertBefore('.post-navigation');

        // TODO reininitialize the previous post trigger on new content.
        previous_post_trigger();

        //TODO add get image function


        }//END of build_portfolio_item


        // TODO replace button with infinitiv scroll based on windows height



 })(jQuery);