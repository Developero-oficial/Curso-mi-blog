<?php 
/**
* 
*/
class UpdateCommand implements iCommand
{
  protected $article;

  public function __construct(Article $article)
  {
    $this->article = $article;
  }

  public function exec()
  {
    return $this->article->update();
  }
}
?>