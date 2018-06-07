/**
 * AJAX script to load previous portfolio-item.
 */

 (function($){
    //  var post_id = postdata.post_id;
    //  var theme_uri = postdata.theme_uri;
    //  var rest_url = postdata.rest_url;

    //  console.log('post_id: ' +  post_id + 'theme_uri: '+ theme_uri + 'rest_url:' + rest_url);


    $('.load-previous a').attr('href', 'javascript:void(0)');
    function previous_post_trigger(){
        $('.load-previous a').on('click', get_previous_post);
    }
    previous_post_trigger();

    /*Main function getting the post*/
    function get_previous_post(){
        var previous_post_ID = $(this).attr('data-id');
        var json_url = 'http://localhost/katewp/wp-json/wp/v2/' + 'portfolio-item/' + previous_post_ID + '?_embed=true';


        $.ajax({
            dataType:'json',
            url:json_url,
        })
        .done(function(data){
            build_portfolio_item(data);


            // data._embedded['wp:term'][0][0].name

            // var termArray = data._embedded['wp:term'][0];
            // console.log(termArray);
            
            // //looping through the taxonimies
            // $.each(termArray, function(index, value){
            //     var termName = value.name;
            //     // console.log(index);
            //     // console.log(termName);
            // });

        })
        .fail(function(){
            // console.log('error');
        })
        .always(function(){
            // console.log('ajax complete');
        });

        function build_portfolio_item(data){
            console.log(data);

            var termArray = data._embedded['wp:term'][0];
            console.log(termArray);

            var previous_post_content =
             '<div class="generated">' +
             '<div class="wrap">'+
             '<div class="content-area">' +
             '<div class="site-main">' +
              '<article class="post hentry" data-id="' + data.id + '">' +
              '<h1>' + data.title.rendered + '</h1>' +
               '<div class="portfolio-item-content">' + data.content.rendered + '</div>' +
                 '<div>' + data.CFS.portfolio_item_start + '</div>' + '<div>' + data.CFS. portfolio_item_end + '</div>';

                previous_post_content += '<ul>';
                                         //looping through the taxonomies
                $.each(termArray, function(index, value){
                    //var termName = value.name;
                    previous_post_content += '<li><a href="'+value.link+'">'+value.name+'</a></li>'; 
                });
                previous_post_content += '</ul>';

                previous_post_content += '</article><!-- #post-## -->' +
                '</div><!-- .site-main -->' +
                '</div><!-- .content-area -->' +
            '</div><!---.wrap-->' +

            '<nav class="navigation post-navigation load-previous" role="navigation">' +
                '<span class="nav-subtitle">More our works</span>' +
                '<div class="nav-links">' +
                '<div class="nav-previous">' +
                '<a href="javascript:void(0)" data-id="' + data.id + '">' +
                data.title.rendered +
                '</a>' +
            '</nav>';





         // Append related posts to the #related-posts container
        $('.post-navigation').replaceWith(previous_post_content);
        // $(previous_post_content).insertBefore('.post-navigation');
        //console.log(previous_post_content);
        //add get image function

        }

    }
           // Reininitialize the previous post trigger on new content.
           //previous_post_trigger();


 })(jQuery);