<?php 
/**
* 
*/
class SelectCommand implements iCommand
{
  protected $article;

  public function __construct(Article $article)
  {
    $this->article = $article;
  }

  public function exec(): mysqli_result
  {
    return $this->article->select();
  }
}
