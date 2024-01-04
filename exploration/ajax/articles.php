<?php 
require_once('../../private/initialize.php'); 


$blogPost = Blog::find_by_status(['status' => 2]);

// pre_r($blogPost);
// Check if the category or page number is set in the AJAX request
$category = isset($_GET['category']) ? $_GET['category'] : 'All Articles';
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Example data: array of articles with title, summary, date, image, and link
$articles = $blogPost; 

if ($category && $category !== 'All Articles') {
  $filtered_articles = array_filter($articles, function($article) use ($category) {
    return $article->category_id === $category;
  });
  $articles = $filtered_articles;
} else {
  $filtered_articles = $articles;
}

// Paginate articles
$per_page = 3;
$total_pages = ceil(count($filtered_articles) / $per_page);
$offset = ($page - 1) * $per_page;
$paginated_articles = array_slice($filtered_articles, $offset, $per_page);


// Generate HTML code for the article list
$html = '';
foreach ($paginated_articles as $article) {
  $thumbnail = !empty($article->thumbnail) ? url_for_root('uploads/' . $article->thumbnail) :  url_for_root('uploads/thumbs/image150.png');
  $date = date('M d, Y h:i:a', strtotime($article->created_at));
  $duration = !empty($article->duration) ? $article->duration ." read" : "" ;
  $category = Category::find_by_id($article->category_id)->name;
  $html .= '<div class="row mb-4 py-4 " style="border-bottom: 1px solid #a49f9f9c">';
  $html .= '<div class="col-md-3 order-md-2 mb-3 mb-md-0"><img src="' . $thumbnail . '" class="img-fluid rounded"></div>';
  $html .= '<div class="col-md-9 order-md-1">';
  $html .= '<a class="text-dark title-link" href="readmore.php?link=' . $article->link . '&id=' . $article->id . '" >';
  $html .= '<h5 class="header">' . $article->title . '</h5>';
  
  $html .= '<p class="text-muted"><small>' . $date . '</small></p>';
  $html .= '<p class="line-clamp" style="text-align: justify;">' . $article->summary . '</p>';
  // $html .= '<a href="readmore.php?id=' . $article->id . '" class="btn btn-primary btn-sm">Read More</a>';
  $html .= '<a class="category-label  text-muted">' . $category . '</a>';
  $html .= '<small class=" ms-1 text-muted ">' . $duration . '</small>';
  $html .= '</div>';
  $html .= '</a>';
  
  $html .= '</div>';
}

// Generate HTML code for the pagination
if ($total_pages > 1) {
  $pagination = '<div class="d-flex justify-content-end">';
  $pagination .= '<nav id="pagination" aria-label="Page navigation">';
  $pagination .= '<ul class="pagination">';
  for ($i = 1; $i <= $total_pages; $i++) {
    $active = $i == $page ? ' active' : '';
    $pagination .= '<li class="page-item' . $active . '"><a class="page-link" href="#">' . $i . '</a></li>';
  }
  $pagination .= '</ul>';
  $pagination .= '</nav>';
  $pagination .= '</div>';
} else {
  $pagination = '';
}

// Return the HTML code for the article list and pagination
echo $html . $pagination;


?>
