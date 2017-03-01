<?php 
/**
* 
*/
class DeleteCommand implements iCommand
{
  protected $article;

  public function __construct(Article $article)
  {
    $this->article = $article;
  }

  public function exec(): int
  {
    return $this->article->delete();
  }
}
