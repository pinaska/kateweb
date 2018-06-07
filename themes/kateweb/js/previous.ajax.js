/**
 * AJAX script to load smoothly portfolio-items from single-portfolioitem.php.
 * BACKUP 7.06 becuase I am trying other solution
 */



(function($){

var $mainContent = $('.wrap');
var documentHeight = $(document).height();
var windowHeight = $(window).height();
var heightOffset = documentHeight - windowHeight;
var triggerAjaxOffest = 100;
var scrolling = false;
var yPos = 0;
var postIndex = 1;
// var postsPerPage = 3;
var morePosts = true;

var postsUrl = 'http://localhost/katewp/wp-json/wp/v2/portfolio-item/?_embed=trues';

/**
 * Window Scroll Position
 */
$(window).scroll(function() {
  yPos = $(window).scrollTop();
//   console.log(yPos);
  if (!scrolling) {
    scrolling = true;
    setTimeout(function() {
      scrolling = false;
      checkScrollPos(yPos);
    }, 300);
  }
});

/**
 * Check position from top
 */
function checkScrollPos(yPos) {
//   console.log('check scroll pos');
//   console.log(yPos);
  if (yPos >= heightOffset - triggerAjaxOffest) {
    // console.log('bottom of page');
    // console.log(yPos);
    ajaxRequest();
  }
}

/**
 * Ajax request load posts
 */
function ajaxRequest() {
  $.ajax({
    method: 'get',
    url:postsUrl
  })
    .done(function(data) {
    //   console.log(data);
    //   postIndex += postsPerPage;
      postsLoop(data);
      updateHeight();
    })
    .fail(function() {
    //   console.log(err);
    });
}

/**
 * Loop through posts and append content
 */



function postsLoop(data) {
  if (!data.length <= 0) {
    $.each(data, function(index, value) {

    var termArray = value._embedded['wp:term'][0];
    // Get the featured image if there is a featured image.
function get_featured_image() {
    var featuredImgID = value.featured_media;

// Create an empty container for theoretical featured image.
var featImage;

    if (featuredImgID === 0) {
        featImage = '';
    } else {
        var featuredImg = value._embedded['wp:featuredmedia'][0];
        var imgLarge = '';
        var imgWidth = featuredImg.media_details.sizes.full.width;
        var imgHeight = featuredImg.media_details.sizes.full.height;
        if (featuredImg.media_details.sizes.hasOwnProperty('large')) {
            imgLarge = featuredImg.media_details.sizes.large.source_url +  ' 1024w, ';
        }
        featImage = '<div class="single-featured-image-header">' +
                     '<img src="' + featuredImg.media_details.sizes.full.source_url + '" ' +
                     'width="' + imgLarge + '" ' +
                     'height="' + imgHeight + '" ' +
                     'class="csf-image" ' +
                     'alt="" ' +
                     'srcset="' + featuredImg.media_details.sizes.full.source_url + ' ' + imgWidth + 'w, ' + imgLarge + featuredImg.media_details.sizes.medium.source_url + ' 300w" ' +
                     'sizes="100vw">' +
                     '</div>';
    }
    return featImage;
}
      var previousPostContent = '<hr>' +
             '<div class="generated">' +
             '<div class="wrap">'+
             '<div class="content-area">' +
             '<div class="site-main">' +
              '<article class="post hentry" data-id="' + value.id + '">' +
              '<h1>' + value.title.rendered + '</h1>' +
               '<div class="portfolio-item-content">' + value.content.rendered + '</div>' 
               + get_featured_image() +
                 '<div>' + value.CFS.portfolio_item_start + '</div>' + '<div>' + value.CFS. portfolio_item_end + '</div>';

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
                '</div><!---.generated-->';
      $mainContent.append(previousPostContent);

    });
  } else {
    morePosts = false;
    $mainContent.append('<h2>No more posts to load 😔</h3>');
    $(window).unbind('scroll');
  }
}

/**
 * Update height variables as the page will grow as posts are appended
 */
function updateHeight() {
  documentHeight = $(document).height();
  windowHeight = $(window).height();
  heightOffset = documentHeight - windowHeight;
}

})(jQuery);