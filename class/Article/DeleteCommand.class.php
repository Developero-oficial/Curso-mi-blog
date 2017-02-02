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

  public function exec()
  {
    echo '*' . __CLASS__ . '-> exec</br>';
    return $this->article->delete();
  }
}
?>