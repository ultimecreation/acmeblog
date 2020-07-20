<?php

class ArticlesController extends Controller{
    
    /**
     * list
     *
     * @return void
     */
    public function list()
    {
        $articles = $this->getModel('ArticleModel')->getAllArticles();
        $data['articles'] = $articles;
        return $this->renderView('articles/list',$data);
    }
    
    /**
     * getArticle
     *
     * @return void
     */
    public function getArticle(){
        $articleId = intval( getUriParts(2));
        $article = $this->getModel('ArticleModel')->getArticleById($articleId);
        $data['article'] = $article;
       
        return $this->renderView('articles/single',$data);
    }
    
    /**
     * getArticlesByCategory
     *
     * @return void
     */
    public function getArticlesByCategory(){
        $categoryId = intval( getUriParts(2));
        $articles = $this->getModel('ArticleModel')->getArticleByCategory($categoryId);
        $data['articles'] = $articles;
        $data['cat_name'] = $articles[0]->cat_name;
        return $this->renderView('articles/category',$data);
    }
    
    /**
     * getArticlesBySearchQuery
     *
     * @return void
     */
    public function getArticlesBySearchQuery(){
       
        $term = htmlspecialchars(strip_tags($_GET['terme']));
        $articles = $this->getModel('ArticleModel')->getArticlesBySearchQuery($term);
        $data['articles'] = $articles;
        $data['term'] = $term;
        $data['count'] = count($articles);
       
        return $this->renderView('articles/search',$data);
    }
}